<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Billing - Welcome</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap">
    <style>
        /* Basic Styles */
        body {
            background-color: #121212; /* Dark background */
            color: #ffffff; /* Light text color */
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }

        h1 {
            margin-bottom: 20px;
        }

        .container {
            max-width: 500px;
            padding: 20px;
            background: #1e1e1e; /* Dark card background */
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5);
        }

        .btn {
            background: linear-gradient(45deg, #ff4081, #ff3d00);
            color: #ffffff;
            padding: 12px 20px;
            border: none;
            border-radius: 30px;
            margin: 10px;
            cursor: pointer;
            transition: background 0.3s;
            text-decoration: none;
            display: inline-block;
        }

        .btn:hover {
            background: linear-gradient(45deg, #ff3d00, #ff4081);
        }

        a {
            color: #ffffff;
            text-decoration: none;
            transition: color 0.3s;
        }

        a:hover {
            color: #ff4081;
            text-decoration: underline;
        }

        .footer {
            position: fixed;
            bottom: 10px;
            text-align: center;
            width: 100%;
            font-size: 14px;
            color: #ffffff;
        }

        /* Responsive Design */
        @media (max-width: 600px) {
            .container {
                width: 90%;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Welcome to Mobile Billing</h1>
        <p>Please login to your account or create a new one.</p>
        <a href="login.php" class="btn">Login</a>
        <a href="signup1.php" class="btn">Sign Up</a>
    </div>

    <div class="footer">
        &copy; 2024 Mobile Billing. All rights reserved.
    </div>

</body>
</html>
