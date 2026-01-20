<?php
include 'db.php';

$name = $_POST['name'];
$roll = $_POST['roll'];
$complaint = $_POST['complaint'];

$sql = "INSERT INTO complaints (name, roll_no, complaint)
        VALUES ('$name', '$roll', '$complaint')";


mysqli_query($conn, $sql);

echo "Complaint submitted successfully.<br>";
echo "<a href='index.php'>Go Back</a>";
?>
