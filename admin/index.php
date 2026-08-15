<?php
// If already logged in, redirect to dashboard
session_start();
if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true) {
    header('Location: dashboard.php');
    exit;
}

// Handle login logic
 $error_message = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // For simplicity, we'll use a hardcoded username/password.
    // In a real-world scenario, this should be checked against a database.
    $username = 'admin';
    $password = 'Siddique@2026'; // CHANGE THIS PASSWORD!

    if ($_POST['username'] === $username && $_POST['password'] === $password) {
        $_SESSION['admin_logged_in'] = true;
        header('Location: dashboard.php');
        exit;
    } else {
        $error_message = 'Invalid username or password.';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | Al-Ansaar Schools</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f4; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .login-container { background-color: var(--clean-white); padding: 40px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); text-align: center; width: 90%; max-width: 400px; }
        .login-container h2 { color: var(--dark-teal); margin-bottom: 20px; }
        .login-container img { max-width: 150px; margin-bottom: 20px; }
        .form-group { margin-bottom: 20px; text-align: left; }
        .form-group label { display: block; margin-bottom: 5px; color: #555; }
        .form-group input { width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box; }
        .btn-login { background-color: var(--primary-blue); color: var(--clean-white); padding: 12px 20px; border: none; border-radius: 5px; cursor: pointer; width: 100%; font-size: 1em; font-weight: bold; }
        .btn-login:hover { background-color: var(--dark-teal); }
        .error-message { color: red; margin-top: 15px; }
    </style>
</head>
<body>

<div class="login-container">
    <img src="../assets/images/logo/logo.webp" alt="Al-Ansaar Schools Logo">
    <h2>Admin Login</h2>
    <form action="index.php" method="POST">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit" class="btn-login">Login</button>
    </form>
    <?php if ($error_message): ?>
        <p class="error-message"><?php echo $error_message; ?></p>
    <?php endif; ?>
</div>

</body>
</html>