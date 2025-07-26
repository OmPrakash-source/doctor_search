
<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
<div class="container">
    <h2>Admin Login</h2>
    <form method="POST">
        <input type="text" name="admin_user" placeholder="Username" required>
        <input type="password" name="admin_pass" placeholder="Password" required>
        <button type="submit" name="admin_login">Login</button>
    </form>
</div>

<?php
if (isset($_POST['admin_login'])) {
    $admin_user = $_POST['admin_user'];
    $admin_pass = $_POST['admin_pass'];

    if ($admin_user === "admin" && $admin_pass === "admin123") {
        session_start();
        $_SESSION['admin'] = $admin_user;
        echo "<script>alert('Admin login successful'); window.location='dashboard.php';</script>";
    } else {
        echo "<script>alert('Invalid admin credentials');</script>";
    }
}
?>
</body>
</html>