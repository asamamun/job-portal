<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Our Platform!</title>
</head>

<body style="font-family: Arial, sans-serif; line-height: 1.6; background-color: #f4f4f4; margin: 0; padding: 0;">

    <div style="max-width: 600px; margin: 20px auto; background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
        <h1 style="color: #333;">Welcome to Our Platform!</h1>
        <p style="color: #666;">Dear {{ $name }},</p>
        <p style="color: #666;">Thank you for creating an account with us. We are excited to have you on board!</p>
        <p style="color: #666;">To get started, please click the button below:</p>
        <a href="{{env('APP_URL')}}" style="display: inline-block; background-color: #007bff; color: #fff; text-decoration: none; padding: 10px 20px; border-radius: 5px;">Website</a>
        <p style="color: #666;">If the button doesn't work, you can also click or copy the link below into your browser:</p>
        <p style="color: #666;">Thank you,<br> The Example Team</p>
    </div>

</body>

</html>