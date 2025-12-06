<?php
// signup.php — original PHP preserved
// Place your original PHP logic here
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js" defer></script>
    <script src="/js/validation.js" defer></script>
    <title>Sign Up</title>

    <style>
        /* BLUE & WHITE THEME */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #e9f1ff; /* light blue */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .signup-container {
            background: #ffffff;
            width: 380px;
            padding: 35px;
            border-radius: 12px;
            border: 1px solid #c9d8ff;
            box-shadow: 0 6px 18px rgba(0, 40, 120, 0.15);
            text-align: center;
        }

        h2 {
            color: #004aad;
            margin-bottom: 20px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #b8c8e8;
            border-radius: 8px;
            background: #f7faff;
            font-size: 14px;
            outline: none;
            transition: 0.2s;
        }

        input:focus {
            border-color: #004aad;
            background: #ffffff;
        }

        button {
            width: 100%;
            padding: 12px;
            background: #004aad;
            color: #ffffff;
            border: none;
            border-radius: 8px;
            font-size: 15px;
            cursor: pointer;
            margin-top: 10px;
            transition: 0.2s;
        }

        button:hover {
            background: #00357a;
        }

        .link {
            display: block;
            margin-top: 12px;
            text-decoration: none;
            color: #004aad;
            font-size: 14px;
        }

        .link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="signup-container">
    <h2>Create Account</h2>

    <form action="process-signup.php" method="post" id="signup" novalidate>
        <input type="text" name="name" id="name" placeholder="Full Name" required>
        <input type="email" name="email" id="email" placeholder="Email Address" required>
        <input type="password" name="password" id="password" placeholder="Password" required>
        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" required>

        <button type="submit">Sign Up</button>
    </form>

    <a href="login.php" class="link">Already have an account? Login</a>
</div>
<script src="js/validation.js" defer></script>

</body>
</html>
