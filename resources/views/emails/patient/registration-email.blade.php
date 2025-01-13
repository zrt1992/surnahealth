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
            <p>Here’s what you can look forward to as a member of Surna TeleHealth:</p>
            <ul>
                <li><strong>Access to Top Doctors:</strong> Book consultations with trusted healthcare professionals
                    anytime, anywhere.</li>
                <li><strong>Personalized Care:</strong> Receive tailored treatment plans designed specifically for your
                    needs.</li>
                <li><strong>Health Insights:</strong> Explore a wealth of health resources, including articles, blogs,
                    and AI-driven health analytics.</li>
                <li><strong>Convenient Pharmacy Services:</strong> Order medications with ease and enjoy seamless
                    delivery or pickup options.</li>
                <li><strong>Preventive Screenings:</strong> Stay ahead of your health with assessments for breast
                    cancer, prostate cancer, and cardiovascular risks.</li>
            </ul>
            <p>
                We’re here to support you every step of the way. If you have any questions or need assistance, feel free
                to reach out to our support team at
                <a href="mailto:info@surnatelehealth.com">info@surnatelehealth.com</a> or call us at
                <strong>781-752-0014</strong>.
            </p>
           
            <p style="margin-top: 20px;">Let’s take the first step together toward a healthier, happier you! </p>

            <div class="footer">
                <p><strong>The Surna TeleHealth Team</strong></p>
                <p>info@surnatelehealth.com</p>
                <p>781-752-0014</p>
                <a href="{{ $data['actionURL'] }}" class="cta-button">Visit Our Website</a>
               
            </div>
        </div>
</body>

</html>
