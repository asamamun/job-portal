<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $name }}</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; text-align: center; padding: 50px;">
    <div style="background-color: #ffffff; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); display: inline-block;">
        <img src="{{ asset('adminto/assets/images/users/user-1.jpg ') }}" alt="Company Logo" style="max-width: 100px; height: auto; display: block; margin: 0 auto 20px;">
        <h1 style="color: #333333;">{{Settings::get()->title}}</h1>
        <h2 style="color: #333333;">{{ $name }}</h2>
        <p>Click the button below to view my CV:</p>
        <a href="{{$cvlink}}" target="_blank" style="display: inline-block; margin-top: 20px; padding: 10px 20px; color: #ffffff; background-color: #007BFF; text-decoration: none; border-radius: 5px;">View CV</a>
    </div>
</body>
</html>