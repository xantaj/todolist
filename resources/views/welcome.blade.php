<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login or Sign Up</title>
    
    <link rel="stylesheet" href="{{ asset('css/user_style.css') }}">

</head>
<body>
    <div class="container">
        <h1>Welcome</h1>
        <div class="buttons">
            <a href="{{ route('login') }}" class="button login-button">Giriş Yap</a>
            <a href="{{ route('register') }}" class="button signup-button">Kayıt Ol</a>
        </div>
    </div>
</body>
</html>
