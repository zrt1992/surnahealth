<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $data['subject'] }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        .email-container {
            max-width: 600px;
            margin: 20px auto;
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .header {
            background: #1b63ff;
            padding: 20px;
            color: #fff;
            text-align: center;
            font-size: 24px;
        }

        .content {
            padding: 20px;
            line-height: 1.6;
        }

        .footer {

            padding: 10px;
            text-align: start;
            font-size: 12px;
            position: relative;
        }

        .footer img {
            position: absolute;
            left: 10px;
            bottom: 10px;
            width: 100px;
        }
    </style>
</head>

<body>
    <div class="email-container">
        <div class="header">
            {{ $data['subject'] }}
        </div>
        <div class="content">
            <p>{{ $data['greeting'] }}</p>
            <p>
                Welcome to <strong>Surna TeleHealth</strong>, where your health and well-being are our top priorities!
            </p>
            <p>Your Reset Password OTP Is:</p>
            <h2 style="text-align: center; font-size: 32px; letter-spacing: 2px; color: #1b63ff;">
               {{ $data['otp'] ?? 'N/A' }}
            </h2>

            <div class="footer">
                <p><strong>The Surna TeleHealth Team</strong></p>
                <p>info@surnatelehealth.com</p>
                <p>781-752-0014</p>
                <a href="{{ $data['actionURL'] }}" class="cta-button">Visit Our Website</a>

            </div>
        </div>
</body>

</html>
