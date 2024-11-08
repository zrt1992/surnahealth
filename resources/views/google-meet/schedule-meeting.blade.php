<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule Google Meet</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f5f5f5;
        }
        
        .container {
            background-color: #ffffff;
            padding: 2em;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 100%;
        }
        
        h1 {
            text-align: center;
            font-size: 1.8em;
            color: #333;
            margin-bottom: 1em;
        }
        
        label {
            font-weight: bold;
            display: block;
            margin-bottom: 0.5em;
            color: #555;
        }
        
        input[type="text"],
        input[type="email"],
        input[type="date"],
        input[type="time"] {
            width: 100%;
            padding: 0.7em;
            margin-bottom: 1.5em;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1em;
            box-sizing: border-box;
        }
        
        button {
            width: 100%;
            padding: 0.8em;
            font-size: 1em;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Schedule a Google Meet</h1>

        <form action="{{ route('google.meet.create') }}" method="POST">
            @csrf
            <label for="title">Meeting Title:</label>
            <input type="text" id="title" name="title" placeholder="Enter meeting title" required>

            <label for="email">Email (to send invite):</label>
            <input type="email" id="email" name="email" placeholder="Enter attendee email" required>

            <label for="date">Date:</label>
            <input type="date" id="date" name="date" required>

            <label for="time">Time:</label>
            <input type="time" id="time" name="time" required>

            <button type="submit">Create Meeting</button>
        </form>
    </div>
</body>
</html>