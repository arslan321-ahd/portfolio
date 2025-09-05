<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Message</title>
</head>

<body
    style="margin: 0; padding: 0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f7f9fc;">
    <!-- Main Container -->
    <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%"
        style="margin: 40px auto; max-width: 600px;">
        <!-- Header -->
        <tr>
            <td
                style="background: linear-gradient(135deg, #6e8efb, #a777e3); padding: 30px 20px; text-align: center; border-radius: 10px 10px 0 0;">
                <h1 style="color: white; margin: 0; font-size: 28px; letter-spacing: 1px;">NEW MESSAGE</h1>
                <p style="color: rgba(255,255,255,0.8); margin: 10px 0 0; font-size: 16px;">You've received a new
                    contact form submission</p>
            </td>
        </tr>

        <!-- Message Container -->
        <tr>
            <td style="background-color: #ffffff; padding: 40px 30px;">
                <h2 style="color: #333333; margin-top: 0; border-left: 4px solid #6e8efb; padding-left: 15px;">Contact
                    Details</h2>

                <!-- Name Field -->
                <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%"
                    style="margin: 20px 0;">
                    <tr>
                        <td width="30%"
                            style="color: #6e8efb; font-weight: bold; padding: 8px 0; border-bottom: 1px dashed #eaeaea;">
                            Name:</td>
                        <td width="70%" style="padding: 8px 0; border-bottom: 1px dashed #eaeaea; color: #555;">
                            {{ $data['name'] }}</td>
                    </tr>
                </table>

                <!-- Email Field -->
                <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%"
                    style="margin: 20px 0;">
                    <tr>
                        <td width="30%"
                            style="color: #6e8efb; font-weight: bold; padding: 8px 0; border-bottom: 1px dashed #eaeaea;">
                            Email:</td>
                        <td width="70%" style="padding: 8px 0; border-bottom: 1px dashed #eaeaea; color: #555;">
                            {{ $data['email'] }}</td>
                    </tr>
                </table>

                <!-- Subject Field -->
                <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%"
                    style="margin: 20px 0;">
                    <tr>
                        <td width="30%"
                            style="color: #6e8efb; font-weight: bold; padding: 8px 0; border-bottom: 1px dashed #eaeaea;">
                            Subject:</td>
                        <td width="70%" style="padding: 8px 0; border-bottom: 1px dashed #eaeaea; color: #555;">
                            {{ $data['subject'] }}</td>
                    </tr>
                </table>

                <!-- Message Content -->
                <h2 style="color: #333333; margin-top: 40px; border-left: 4px solid #a777e3; padding-left: 15px;">
                    Message</h2>
                <div
                    style="background-color: #f9f9f9; padding: 20px; border-radius: 8px; margin: 20px 0; border-left: 3px solid #a777e3;">
                    <p style="color: #555; line-height: 1.6; margin: 0; font-style: italic;">{{ $data['message'] }}</p>
                </div>

                <!-- Footer Message -->
                <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%"
                    style="margin-top: 40px; padding-top: 20px; border-top: 1px solid #eee;">
                    <tr>
                        <td style="color: #777; text-align: center; font-style: italic;">
                            <p>This message was sent from your website's Portfolio contact.</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <!-- Footer -->
        <tr>
            <td style="background-color: #333; padding: 20px; text-align: center; border-radius: 0 0 10px 10px;">
                <p style="color: #ccc; margin: 0; font-size: 14px;">&copy; 2025 Arsalan Ahmed. All rights reserved.</p>
            </td>
        </tr>
    </table>
</body>

</html>
