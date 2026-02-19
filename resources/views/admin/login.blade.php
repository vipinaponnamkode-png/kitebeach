<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login | Kite Beach Park & Restaurant</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', sans-serif;
        }

        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #ffcc00, #6699ff);
        }

        .login-box {
            background: #fff;
            padding: 40px;
            width: 380px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            text-align: center;
        }

        .login-box h2 {
            margin-bottom: 10px;
            color: #0072ff;
        }

        .login-box p {
            font-size: 14px;
            color: #666;
            margin-bottom: 25px;
        }

        .input-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .input-group label {
            font-size: 14px;
            font-weight: 600;
        }

        .input-group input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 6px;
            border: 1px solid #ccc;
            outline: none;
        }

        .login-btn {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 6px;
            background: #0072ff;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        .login-btn:hover {
            background: #0056cc;
        }

        .footer-text {
            font-size: 12px;
            margin-top: 15px;
            color: #888;
        }
    </style>
</head>
<body>

    <div class="login-box">
        <h2>Kite Beach Park</h2>
        <p>Admin Login Panel</p>

        <form action="{{ route('admin.login.submit') }}" method="POST">

            @csrf
            <div class="input-group">
                <label>Email Address</label>
                <input type="email" name="email" required>
            </div>

            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password" required>
            </div>

            <button type="submit" class="login-btn">Login</button>
        </form>

        <div class="footer-text">
            © 2026 Kite Beach Park & Restaurant
        </div>
    </div>

</body>
</html>
