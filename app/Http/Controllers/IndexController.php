<?php

namespace App\Http\Controllers;

use App\Jobs\SendContactEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function send(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:100',
            'email' => 'required|email|indisposable',
            'subject' => 'required|string|max:150',
            'message' => 'required|string|max:400',
        ]);

        // ✅ Extra check for disposable/temporary emails
        $disposableDomains = [
            'tempmail.com',
            '10minutemail.com',
            'guerrillamail.com',
            'mailinator.com',
            'yopmail.com',
            'trashmail.com'
        ];

        $emailDomain = strtolower(substr(strrchr($validated['email'], "@"), 1));

        if (in_array($emailDomain, $disposableDomains)) {
            return response()->json([
                'success' => false,
                'error' => 'Please provide a valid personal email address, not a temporary one.'
            ], 422);
        }

        // Dispatch job to queue (non-blocking)
        SendContactEmail::dispatch($validated);

        // Return JSON immediately so the frontend can show success
        return response()->json([
            'success' => true,
            'message' => 'Message received — thank you! I will reply soon.'
        ]);
    }
}
