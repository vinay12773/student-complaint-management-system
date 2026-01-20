<?php
include 'db.php';
$result = mysqli_query($conn, "SELECT * FROM complaints");
?>

<h2>Admin Dashboard</h2>

<table border="1">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Complaint</th>
    <th>Status</th>
    <th>Update</th>
</tr>

<?php while ($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['student_name']; ?></td>
<td><?php echo $row['complaint']; ?></td>
<td><?php echo $row['status']; ?></td>
<td>
<form action="update_status.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <select name="status">
        <option>Pending</option>
        <option>In Progress</option>
        <option>Resolved</option>
    </select>
    <input type="submit" value="Update">
</form>
</td>
</tr>
<?php } ?>
</table>
