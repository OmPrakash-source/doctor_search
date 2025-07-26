<?php
session_start();
session_destroy();
header("Location: login.php");
exit();
?>

<!-- admin.php -->
<?php
session_start();
if (isset($_POST['admin_login'])) {
    $admin_user = $_POST['admin_user'];
    $admin_pass = $_POST['admin_pass'];
    if ($admin_user === "admin" && $admin_pass === "admin123") {
        $_SESSION['admin'] = $admin_user;
        header("Location: dashboard.php");
        exit();
    } else {
        echo "<script>alert('Invalid admin credentials');</script>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
<form method="POST">
    <input type="text" name="admin_user" placeholder="Username" required><br>
    <input type="password" name="admin_pass" placeholder="Password" required><br>
    <button type="submit" name="admin_login">Login</button>
</form>
</body>
</html>
