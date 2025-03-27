<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to PetCare.ph</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f4f4f4;
            color: #ffffff
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 40px 20px;
            background-color: white;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            text-align: center;
        }
        .logo {
            max-width: 150px;
            margin-bottom: 20px;
        }
        .welcome-title {
            color: #0f766e;
            font-size: 28px;
            margin-bottom: 20px;
        }
        .welcome-text {
            margin-bottom: 30px;
            color: #555;
        }
        .email-btn {
            display: inline-block;
            padding: 12px 24px;
            background-color: #0f766e;
            color: #ffffff;
            text-decoration: none;
            border-radius: 6px;
            font-weight: 600;
            transition: background-color 0.3s ease;
        }
        .email-btn:hover {
            background-color: #0d5f56;
        }
        .footer {
            margin-top: 30px;
            font-size: 12px;
            color: #888;
        }

    </style>
</head>
<body>
    <div class="container">
        <img src="/api/placeholder/150/50" alt="PetCare.ph Logo" class="logo">
        
        <h1 class="welcome-title">Welcome, {{ $user->firstname }} {{ $user->lastname }}!</h1>
        
        <p class="welcome-text">
            Thank you for joining PetCare.ph! We're excited to help you take the best care of your furry friends. 
            To get started, please verify your email address by clicking the button below.
        </p>
        
        <a href="{{ url('/verify/' . $user->remember_token) }}" class="email-btn">Verify Email Address</a>
        
        <div class="footer">
            © 2024 PetCare.ph. All rights reserved.
        </div>
    </div>
</body>
</html>