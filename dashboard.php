<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: admin.php");
    exit();
}
include 'db.php';
if (isset($_POST['add_doctor'])) {
    $stmt = $conn->prepare("INSERT INTO doctors (name, specialization, experience, contact_number, email, city) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssisss", $_POST['name'], $_POST['specialization'], $_POST['experience'], $_POST['contact'], $_POST['email'], $_POST['city']);
    $stmt->execute();
    $stmt->close();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
<h2>Admin Dashboard | <a href="logout.php">Logout</a></h2>
<form method="POST">
    <input type="text" name="name" placeholder="Name" required><br>
    <input type="text" name="specialization" placeholder="Specialization" required><br>
    <input type="number" name="experience" placeholder="Experience" required><br>
    <input type="text" name="contact" placeholder="Contact Number" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="text" name="city" placeholder="City" required><br>
    <button type="submit" name="add_doctor">Add Doctor</button>
</form>
<table border="1">
<tr><th>ID</th><th>Name</th><th>Specialization</th><th>Experience</th><th>Contact</th><th>Email</th><th>City</th></tr>
<?php
$result = $conn->query("SELECT * FROM doctors");
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['specialization']}</td><td>{$row['experience']}</td><td>{$row['contact_number']}</td><td>{$row['email']}</td><td>{$row['city']}</td></tr>";
}
?>
</table>
</body>
</html>
