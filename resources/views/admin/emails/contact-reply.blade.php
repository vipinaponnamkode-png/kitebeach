<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Reply from KiteBeach</title>
</head>
<body>

    <h2>Hello {{ $contact->name }},</h2>

    <p>Thank you for contacting KiteBeach.</p>

    <p>{!! nl2br(e($replyMessage)) !!}</p>

    <br>

    <p>Best regards,</p>
    <p><strong>KiteBeach Team</strong></p>

</body>
</html>