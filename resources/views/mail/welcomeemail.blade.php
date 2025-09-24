<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome to {{ config('app.name') }}</title>
</head>

<body style="margin:0; padding:0; background-color:#f8fafc; font-family: Arial, sans-serif;">

    <table width="100%" cellpadding="0" cellspacing="0" style="background-color:#f8fafc; padding:40px 0;">
        <tr>
            <td align="center">
                <table width="600" cellpadding="0" cellspacing="0"
                    style="background-color:#ffffff; border-radius:8px; overflow:hidden; box-shadow:0 2px 6px rgba(0,0,0,0.1);">

                    <!-- Header -->
                    <tr>
                        <td align="center" style="background-color:#4f46e5; padding:20px;">
                            <h1 style="color:#ffffff; margin:0; font-size:24px;">
                                Welcome to {{ config('app.name') }} 🎉
                            </h1>
                        </td>
                    </tr>

                    <!-- Body -->
                    <tr>
                        <td style="padding:30px; color:#374151; font-size:16px; line-height:1.6;">
                            <p>Hi LaraDev,</p>

                            <p>We’re excited to have you join <strong>{{ config('app.name') }}</strong>!
                                Your account has been successfully created and you’re all set to get started.</p>

                            <p>Click below to log in and explore your dashboard:</p>

                            <p style="text-align:center; margin:30px 0;">
                                <a href="{{ url('/login') }}"
                                    style="background-color:#4f46e5; color:#ffffff; text-decoration:none; padding:12px 24px; border-radius:6px; font-weight:bold; display:inline-block;">
                                    Get Started
                                </a>
                            </p>

                            <p>If you have any questions, just reply to this email — we’re always happy to help.</p>

                            <p>Cheers,<br>The {{ config('app.name') }} Team</p>
                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td align="center"
                            style="background-color:#f3f4f6; padding:15px; font-size:12px; color:#6b7280;">
                            © {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>

</body>

</html>
