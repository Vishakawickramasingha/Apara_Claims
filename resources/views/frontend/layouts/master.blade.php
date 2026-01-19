<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Apara Claim Management System</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Segoe UI", sans-serif;
        }

        body {
            background: #f4f6f9;
        }

        /* ===== Hero Section ===== */
        .hero {
            min-height: 100vh;
            background: linear-gradient(to right, #670647ff, #f090d0ff);
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 20px;
        }

        .hero h1 {
            font-size: 42px;
            margin-bottom: 15px;
        }

        .hero p {
            font-size: 18px;
            max-width: 600px;
            margin-bottom: 30px;
        }

        .hero-buttons {
            display: flex;
            gap: 15px;
        }

        .hero-buttons button {
            padding: 14px 30px;
            font-size: 16px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            transition: 0.3s;
        }

        .hero-buttons .login {
            background: #ffffff;
            color: #0a2a66;
            font-weight: 600;
        }

        .hero-buttons .login:hover {
            background: #e6e6e6;
        }

        .hero-buttons .outline {
            background: transparent;
            border: 2px solid #ffffff;
            color: #ffffff;
        }

        .hero-buttons .outline:hover {
            background: rgba(255, 255, 255, 0.15);
        }

        /* ===== Footer ===== */
        .footer {
            background: #670647ff;
            color: white;
            text-align: center;
            padding: 15px;
        }
    </style>
</head>

<body>

<!-- ===== Hero Section ===== -->
<section class="hero">
    <h1>APARA Claim Management System</h1>
    <p>Secure, fast and automated claim processing platform under the APARA system.</p>

    <div class="hero-buttons">
        <button class="login" onclick="window.location.href='/login'">
            Login
        </button>
        <button class="outline">
            Learn More
        </button>
    </div>
</section>

<!-- ===== Footer ===== -->
<footer class="footer">
    <p>© 2026 APARA Claim Management System | Secure & Trusted</p>
</footer>

</body>
</html>
