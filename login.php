<?php
session_start();

$is_invalid = false;

// --- Handle POST login request ---
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    require __DIR__ . "/database.php";

    $email = trim($_POST["email"]);
    $password = $_POST["password"];

    // Hardcoded admin credentials (you can move this to DB later)
    $admin_email = "admin@destination.com";
    $admin_pass = "admin123";

    // ✅ Check if admin login
    if ($email === $admin_email && $password === $admin_pass) {
        session_regenerate_id(true);
        $_SESSION["admin"] = $admin_email;
        header("Location: admin-panel.php");
        exit;
    }

    // ✅ Otherwise, check normal user login from database
    $sql = "SELECT * FROM authenti WHERE email = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();

    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user && password_verify($password, $user["password"])) {
        session_regenerate_id(true);
        $_SESSION["user_id"] = $user["id"];
        header("Location: booking.php");
        exit;
    } else {
        $is_invalid = "Invalid login credentials. Try Again!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom right, #e6f0ff, #ffffff);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background: #ffffff;
            width: 360px;
            padding: 35px 30px;
            border-radius: 14px;
            border: 1px solid #c7d8ff;
            box-shadow: 0 6px 20px rgba(0, 40, 120, 0.15);
            text-align: center;
        }

        h2 {
            color: #004aad;
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 25px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 13px;
            margin: 12px 0;
            border: 1px solid #b8c8e8;
            border-radius: 10px;
            background: #f7faff;
            font-size: 15px;
            outline: none;
            transition: 0.2s;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            border-color: #004aad;
            background: #ffffff;
        }

        button {
            width: 100%;
            padding: 13px;
            background: #004aad;
            color: #ffffff;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            cursor: pointer;
            font-weight: 600;
            margin-top: 8px;
            transition: 0.2s;
        }

        button:hover {
            background: #003580;
        }

        .link {
            display: block;
            margin-top: 12px;
            text-decoration: none;
            color: #004aad;
            font-size: 14px;
            font-weight: 500;
        }

        .link:hover {
            text-decoration: underline;
        }

        .footer-text {
            font-size: 12px;
            margin-top: 18px;
            color: #004aad;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h3>Destination Malawi</h3>
        <h2>Account Login</h2>

        <form method="POST" autocomplete="off">
            <input type="text" name="email" placeholder="email" required 
                value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">
            <input type="password" name="password" placeholder="Password" required />
            <button type="submit">Login</button>
            <?php if (!empty($is_invalid)): ?>
                <p style="color: red; text-align:center;">
                    <?= htmlspecialchars($is_invalid) ?>
                </p>
            <?php endif; ?>

            <a href="forgot_password.php" class="link">Forgot Password?</a>
            <a href="signup.php" class="link">Create Account</a>
        </form>

        <div class="footer-text">Secure Access Portal</div>
    </div>

</body>
</html>
