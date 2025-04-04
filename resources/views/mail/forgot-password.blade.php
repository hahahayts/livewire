<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Password Reset - PetCare.ph</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            background-color: #f4f4f4;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            max-width: 600px;
            width: 100%;
            margin: 0 auto;
            padding: 40px 20px;
            background-color: white;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            border-radius: 12px;
            text-align: center;
        }
        .logo {
            max-width: 180px;
            margin-bottom: 30px;
        }
        .welcome-title {
            color: #0f766e;
            font-size: 28px;
            margin-bottom: 20px;
        }
        .welcome-text {
            margin-bottom: 30px;
            color: #555;
            font-size: 16px;
            line-height: 1.7;
        }
        .email-btn {
            display: inline-block;
            padding: 14px 28px;
            background-color: #0f766e;
            color: #ffffff;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        .email-btn:hover {
            background-color: #0d5f56;
            transform: translateY(-2px);
            box-shadow: 0 6px 8px rgba(0,0,0,0.15);
        }
        .footer {
            margin-top: 40px;
            font-size: 12px;
            color: #888;
            border-top: 1px solid #e0e0e0;
            padding-top: 20px;
        }
        .security-note {
            font-size: 12px;
            color: #666;
            margin-top: 20px;
            font-style: italic;
        }
    </style>
</head>
<body>
    <div class="container">
        {{-- <img src="/api/placeholder/180/60" alt="PetCare.ph Logo" class="logo"> --}}
        
        <h1 class="welcome-title">Reset Your Password</h1>
        
        <p class="welcome-text">
            Hello {{ $user->firstname }} {{ $user->lastname }}, 
            we received a request to reset your PetCare.ph account password. 
            Click the button below to set a new password.
        </p>
        
        <a href="{{ url('/password-reset/' . $user->remember_token) }}" class="email-btn">Reset Password</a>
        
        <div class="security-note">
            If you did not request a password reset, please ignore this email or contact support.
        </div>
        
        <div class="footer">
            © 2024 PetCare.ph. All rights reserved.
            <br>
            Secure Password Reset Service
        </div>
    </div>
</body>
</html>