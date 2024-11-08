<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meeting Created</title>
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
            background-color: #f3f4f6;
        }

        /* Container */
        .container {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
            text-align: center;
            max-width: 400px;
            width: 100%;
        }

        /* Title */
        h1 {
            color: #333333;
            margin-bottom: 20px;
            font-size: 24px;
        }

        /* Meeting Link Button */
        .meet-button {
            background-color: #4285f4;
            color: #ffffff;
            padding: 12px 24px;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            text-decoration: none;
            display: inline-block;
        }

        .meet-button:hover {
            background-color: #357ae8;
        }

        /* Paragraph Styling */
        p {
            color: #555555;
            font-size: 16px;
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Google Meet Link</h1>
        <p>Meeting Title: {{ $event->getSummary() }}</p>
<p>Meeting Description: {{ $event->getDescription() }}</p>
<p>Start Time: {{ $event->getStart()->getDateTime() }}</p>
<p>End Time: {{ $event->getEnd()->getDateTime() }}</p>
        <!-- Button to Join the Meeting -->
        <a href="{{ $event->hangoutLink }}" target="_blank" class="meet-button">Join Meeting</a>
        
        <!-- Paragraph with link for extra accessibility -->
        <p>Or click this link to join: <a href="{{ $event->hangoutLink }}" target="_blank">{{ $event->hangoutLink }}</a></p>
    </div>
</body>
</html>