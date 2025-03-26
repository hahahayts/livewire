<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome Email</title>
</head>
<body>
    <h1>Welcome to PetCare.ph, {{ $user->firstname }} {{ $user->lastname }}!</h1>

    <p>Click the link below to verify your email:</p>
    <a href="{{ url('/verified/' . $user->id) }}">Verify your email here</a>
</body>
</html>
