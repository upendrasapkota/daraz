<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - McGregor Institute of Botanical Training</title>
    <link rel="stylesheet" href="styles.css">
</head>

<style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
    }

    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background: url('{{ asset('storage/images/currants-7312724.jpg') }}') no-repeat center center fixed;
        background-size: cover;
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 100%;
    }

    .login-box {
        background: rgba(255, 255, 255, 0.9);
        padding: 20px;
        border-radius: 10px;
        text-align: center;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        max-width: 400px;
        width: 90%;
    }

    .logo {
        width: 80px;
        margin-bottom: 20px;
    }

    h1 {
        font-size: 1.5em;
        margin-bottom: 10px;
    }

    p {
        margin-bottom: 20px;
        color: #555;
    }

    input[type="email"],
    input[type="password"] {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .btn {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: none;
        border-radius: 5px;
        background: #007BFF;
        color: white;
        cursor: pointer;
        font-size: 1em;
    }

    .btn.google {
        background: #DB4437;
    }

    .btn:hover {
        opacity: 0.9;
    }

    .links {
        margin-top: 20px;
    }

    .links a {
        color: #007BFF;
        text-decoration: none;
    }

    .links a:hover {
        text-decoration: underline;
    }

    @media (min-width: 768px) {
        .login-box {
            max-width: 400px;
        }
    }

    @media (max-width: 767px) {
        .login-box {
            padding: 15px;
        }
    }

</style>
<body>
<div class="container">
    <div class="login-box">
        {{--        background: url('{{ asset('storage/images/currants-7312724.jpg') }}') no-repeat center center fixed;--}}

        <img src="{{ asset('storage/images/Vector.png') }}" alt="McGregor Institute Logo" class="logo">
        <h1>McGregor Institute of Botanical Training</h1>
        <p>Login to continue</p>
        <form action="login.php" method="POST">
            <input type="email" name="email" placeholder="Email Address" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" class="btn">Sign In</button>
            <button type="button" class="btn google">Sign In With Google</button>
        </form>
        <div class="links">
            <p>Don't have an account? <a href="register.html">Click Register</a></p>
            <p>Forgot password? <a href="reset.html">Click Reset</a></p>
        </div>
    </div>
</div>
</body>
</html>
