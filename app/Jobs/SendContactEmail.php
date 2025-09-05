<?php

namespace App\Jobs;

use App\Mail\ContactMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
class SendContactEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public array $data;
    public $tries = 3;
    public $backoff = 60; // or public function backoff() { return [60, 120]; }
    public function __construct(array $data)
    {
        $this->data = $data;
    }
    public function handle()
    {
        $recipient = config('mail.from.address') ?? env('MAIL_FROM_ADDRESS');
        Mail::to($recipient)->send(new ContactMail($this->data));
    }
    public function failed(\Throwable $exception)
    {
        Log::error('SendContactEmail job failed', [
            'error' => $exception->getMessage(),
            'data' => $this->data
        ]);
    }
}
