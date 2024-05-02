<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retro Hacking</title>
    <style>
        body {
            background-color: #f3f4f6; /* Light gray background */
            color: #333; /* Dark text color */
            font-family: Arial, sans-serif; /* Modern sans-serif font */
            text-align: center;
            padding: 40px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff; /* White background for container */
            border-radius: 8px; /* Rounded corners */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Shadow effect */
        }
        h1 {
            font-size: 2.5em;
            margin-bottom: 20px;
            color: #333; /* Dark text color */
        }
        p {
            font-size: 1.2em;
            margin-bottom: 20px;
            color: #666; /* Medium gray text color */
        }
        .terminal {
            background-color: #000; /* Black background for terminal */
            color: #0f0; /* Green text color */
            border: 2px solid #0f0; /* Green border */
            padding: 20px;
            margin-top: 20px;
            font-family: 'Courier New', Courier, monospace;
            font-size: 1.2em;
            line-height: 1.5em;
            white-space: pre-wrap;
            overflow-x: auto;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff; /* Blue button color */
            color: #fff; /* White text color */
            text-decoration: none;
            border: none;
            border-radius: 4px; /* Rounded corners */
            margin-right: 10px;
            font-size: 1.2em;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #0056b3; /* Darker blue on hover */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to Vigenere Cipher</h1>
        <p>This is a Final laboratory task for Information Assurance and Technology.</p>
       
        <a href="{{ route('login') }}" class="btn">Login</a>
        <a href="{{ route('register') }}" class="btn">Register</a>
    </div>
</body>
</html>
