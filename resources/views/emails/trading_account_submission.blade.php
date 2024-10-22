<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #3498db;
        }

        p {
            margin: 0 0 15px;
        }

        strong {
            color: #333;
        }

        .thank-you {
            font-weight: bold;
            color: #27ae60;
        }
    </style>
    <title>Email Template</title>
</head>
<body>
    <div class="container">
        <h1>{{ $formData['company_name'] }}</h1>

        <p><strong>Company Name:</strong> {{ $formData['company_name'] }}</p>
        <p><strong>Contact Name:</strong> {{ $formData['contact_name'] }}</p>
        <p><strong>Trading Address:</strong> {{ $formData['trading_address'] }}</p>
        <p><strong>Email:</strong> {{ $formData['email'] }}</p>
        <p><strong>Phone:</strong> {{ $formData['phone'] }}</p>
        <p><strong>Invoice Address:</strong> {{ $formData['invoice_address'] }}</p>
        <p><strong>Accounts Email:</strong> {{ $formData['account_email'] }}</p>
        <p><strong>Accounts Telephone:</strong> {{ $formData['account_phone'] }}</p>
        <p><strong>Company Number:</strong> {{ $formData['company_number'] }}</p>
        <p><strong>VAT Number:</strong> {{ $formData['vat_number'] }}</p>
        <p><strong>Payment Terms:</strong> {{ $formData['payment_terms'] }}</p>
        <p><strong>Date:</strong> {{ $formData['date'] }}</p>
        <p><strong>Name and Position:</strong> {{ $formData['name_position'] }}</p>

        <p class="thank-you">Thank you!</p>
    </div>
</body>
</html>
