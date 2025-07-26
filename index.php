<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
include 'db.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Doctor Search</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
<h2>Welcome, <?php echo $_SESSION['user']; ?> | <a href="logout.php">Logout</a></h2>
<form method="GET">
    <input type="text" name="city" placeholder="City" required>
    <input type="text" name="specialization" placeholder="Specialization">
    <button type="submit">Search</button>
</form>
<?php
if (isset($_GET['city']) || isset($_GET['specialization'])) {
    $city = $_GET['city'];
    $specialization = $_GET['specialization'];
    $sql = "SELECT * FROM doctors WHERE city LIKE '%$city%' AND specialization LIKE '%$specialization%'";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
       echo "<p>
<strong>Name:</strong> {$row['name']} | <strong>Specialization:</strong> {$row['specialization']} |
<strong>Experience:</strong> {$row['experience']} years | <strong>Contact:</strong> {$row['contact_number']}
</p>";
       echo "<hr>";}
    if ($result->num_rows == 0) {
        echo "<p>No doctors found.</p>";
    }
} else {
    echo "<p>Please enter search criteria.</p>";
}
?>
</body>
</html>
