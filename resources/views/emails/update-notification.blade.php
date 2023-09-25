<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aktualisierungsbenachrichtigung</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 40px 0;
            background-color: #f7f9fc;
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px 40px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.05);
        }

        h2 {
            color: #2C3E50;
            margin-top: 0;
            border-bottom: 2px solid #3498DB;
            padding-bottom: 10px;
        }

        p {
            margin: 20px 0;
            line-height: 1.6;
        }

        .details {
            border: 1px solid #e1e1e1;
            padding: 15px;
            margin-top: 20px;
            border-radius: 5px;
            background-color: #ECF0F1;
        }

        .footer {
            margin-top: 40px;
            font-size: 0.9em;
            color: #7F8C8D;
        }
    </style>
</head>
<body>
    <div class="container">
        <p>Sehr geehrte Damen und Herren,</p>
        <p>Wir möchten Sie darüber informieren, dass für Ihre Anwendung eine neue Version verfügbar ist. Eine Aktualisierung wurde durchgeführt.</p>
        <h2>Aktualisierungsbenachrichtigung</h2>

        <div class="details">
            <p><strong>Server-ID:</strong> {{ $contendata['server_id'] }}</p>
            <p><strong>IP-Adresse:</strong> {{ $contendata['ip_address'] }}</p>
            <p><strong>Vorherige Version:</strong> {{ $contendata['version'] }}</p>
            <p><strong>Aktualisierte Version:</strong> {{ $contendata['new_version'] }}</p>
        </div>

        <p>Um die optimale Funktionalität und Sicherheit zu gewährleisten, empfehlen wir Ihnen, regelmäßige Aktualisierungen durchzuführen.</p>

        <p class="footer">Mit freundlichen Grüßen,<br>Ihr Team</p>
    </div>
</body>
</html>
