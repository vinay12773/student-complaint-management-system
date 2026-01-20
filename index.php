<!DOCTYPE html>
<html>
<head>
    <title>Student Complaint System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Submit Complaint</h2>

    <form action="submit_complaint.php" method="post">
        Name:
        <input type="text" name="name" required>

        Roll No:
        <input type="text" name="roll" required>

        Complaint:
        <textarea name="complaint" required></textarea>

        <input type="submit" value="Submit Complaint">
    </form>

    <a href="view_status.php">View Complaint Status</a>
</div>

<a href="view_status.php">View Complaint Status</a>
</body>
</html>
