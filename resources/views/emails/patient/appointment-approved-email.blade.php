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
            background: #4CAF50;
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
            background: #f1f1f1;
            padding: 10px;
            text-align: center;
            font-size: 12px;
            color: #666;
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
            <p>{{ $data['body'] }}</p>
            <a href="{{ $data['actionURL'] }}" style="display: inline-block; padding: 10px 20px; background: #4CAF50; color: #fff; text-decoration: none; border-radius: 4px;">{{ $data['actionText'] }}</a>
            <p style="margin-top: 20px;">{{ $data['thanks'] }}</p>
            <img src="{{ asset('assets/img/logo.png') }}" alt="Logo">
        </div>
        <div class="footer">
            &copy; {{ date('Y') }} Surna Health. All rights reserved.
          
        </div>
    </div>
</body>
</html>
