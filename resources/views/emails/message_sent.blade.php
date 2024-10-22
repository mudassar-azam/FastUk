<!DOCTYPE html>
<html>
<head>
    <title>New Message Received</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            font-size: 28px;
            margin-bottom: 20px;
            color: #007BFF;
        }

        p {
            margin-bottom: 10px;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            margin-bottom: 5px;
        }

        .message-container {
            background-color: #f3f3f3;
            padding: 20px;
            border-radius: 5px;
        }

        .thank-you {
            margin-top: 20px;
            text-align: center;
        }

        .button {
            display: inline-block;
            background-color: #007BFF;
            color: #ffffff;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
        }

        .button:hover {
            background-color: #0056b3;
        }

        @media only screen and (max-width: 500px) {
            body {
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="message-container">
        <h1>New Message Received</h1>
        <p>Hello,</p>
        <p>You have received a new message with the following details:</p>
        <ul>
            <li><strong>Name:</strong> {{ $emailMessage->name }}</li>
            <li><strong>Email:</strong> {{ $emailMessage->email }}</li>
            @if ($emailMessage->phone)
                <li><strong>Phone:</strong> {{ $emailMessage->phone }}</li>
            @endif
        </ul>
        <p><strong>Message:</strong></p>
        <p>{{ $emailMessage->message }}</p>
    </div>
    <p class="thank-you">Thank you!</p>
    <p class="thank-you"><a class="button" href="#">Visit Our Website</a></p>
</body>
</html>
