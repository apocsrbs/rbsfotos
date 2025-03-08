<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            font-size: 24px;
            margin-bottom: 20px;
            color: #2d3748;
        }
        .content {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 5px;
        }
        .field {
            margin-bottom: 15px;
        }
        .label {
            font-weight: bold;
            color: #4a5568;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            Ny henvendelse fra hjemmesiden
        </div>
        <div class="content">
            <div class="field">
                <div class="label">Navn:</div>
                <div>{{ $name }}</div>
            </div>
            <div class="field">
                <div class="label">Email:</div>
                <div>{{ $email }}</div>
            </div>
            <div class="field">
                <div class="label">Telefon:</div>
                <div>{{ $phone }}</div>
            </div>
            <div class="field">
                <div class="label">Besked:</div>
                <div>{{ $messageContent }}</div>
            </div>
        </div>
    </div>
</body>
</html> 