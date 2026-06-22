<?php
session_start();
if(isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true) {
    header('Location: dashboard.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - BZASA</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #FF6B00;
            --secondary-color: #333333;
            --tertiary-color: #0066CC;
            --white: #FFFFFF;
            --gray-light: #f5f5f5;
            --gray-medium: #ddd;
            --text-dark: #333333;
            --text-light: #666666;
            --danger-color: #dc3545;
            --success-color: #28a745;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, var(--secondary-color) 0%, #555555 100%);
            padding: 20px;
        }

        .login-container {
            width: 100%;
            max-width: 450px;
        }

        .login-card {
            background: var(--white);
            border-radius: 20px;
            box-shadow: 0 25px 50px rgba(0,0,0,0.3);
            overflow: hidden;
        }

        .login-header {
            background: linear-gradient(135deg, var(--primary-color), #ff8c33);
            padding: 40px 30px;
            text-align: center;
        }

        .login-header i {
            font-size: 3rem;
            color: var(--white);
            margin-bottom: 15px;
        }

        .login-header h1 {
            color: var(--white);
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .login-header p {
            color: rgba(255,255,255,0.9);
            font-size: 0.95rem;
        }

        .login-body {
            padding: 40px 30px;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--secondary-color);
        }

        .input-wrapper {
            position: relative;
        }

        .input-wrapper i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-light);
        }

        .form-control {
            width: 100%;
            padding: 15px 15px 15px 45px;
            border: 2px solid var(--gray-medium);
            border-radius: 10px;
            font-size: 1rem;
            font-family: 'Poppins', sans-serif;
            transition: var(--transition);
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary-color);
        }

        .btn-login {
            width: 100%;
            padding: 15px;
            background: var(--primary-color);
            color: var(--white);
            border: none;
            border-radius: 10px;
            font-size: 1rem;
            font-weight: 600;
            font-family: 'Poppins', sans-serif;
            cursor: pointer;
            transition: var(--transition);
        }

        .btn-login:hover {
            background: #e65c00;
            transform: translateY(-2px);
        }

        .error-message {
            background: #ffe6e6;
            color: var(--danger-color);
            padding: 12px 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            display: none;
        }

        .error-message.show {
            display: block;
        }

        .back-link {
            text-align: center;
            margin-top: 25px;
        }

        .back-link a {
            color: var(--tertiary-color);
            text-decoration: none;
            font-weight: 500;
        }

        .back-link a:hover {
            text-decoration: underline;
        }

        .footer-text {
            text-align: center;
            margin-top: 20px;
            color: rgba(255,255,255,0.7);
            font-size: 0.85rem;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-card">
            <div class="login-header">
                <i class="fas fa-user-shield"></i>
                <h1>BZASA Admin</h1>
                <p>Sign in to access the dashboard</p>
            </div>
            <div class="login-body">
                <div id="error-message" class="error-message">
                    <i class="fas fa-exclamation-circle"></i>
                    <span>Invalid username or password. Please try again.</span>
                </div>
                <form id="login-form">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <div class="input-wrapper">
                            <i class="fas fa-user"></i>
                            <input type="text" id="username" class="form-control" placeholder="Enter your username" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <div class="input-wrapper">
                            <i class="fas fa-lock"></i>
                            <input type="password" id="password" class="form-control" placeholder="Enter your password" required>
                        </div>
                    </div>
                    <button type="submit" class="btn-login">
                        <i class="fas fa-sign-in-alt"></i> Sign In
                    </button>
                </form>
                <div class="back-link">
                    <a href="../index.php">
                        <i class="fas fa-arrow-left"></i> Back to Website
                    </a>
                </div>
            </div>
        </div>
        <p class="footer-text">© 2024 Bendu Zinnah International School of Agriculture</p>
    </div>

    <script>
        document.getElementById('login-form').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;
            
            // Simple demo authentication (in production, use proper authentication)
            if(username === 'admin' && password === 'bzasa2024') {
                window.location.href = 'dashboard.php';
            } else {
                document.getElementById('error-message').classList.add('show');
                setTimeout(() => {
                    document.getElementById('error-message').classList.remove('show');
                }, 5000);
            }
        });
    </script>
</body>
</html>