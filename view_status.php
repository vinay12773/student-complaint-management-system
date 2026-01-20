<?php
include 'db.php';

$result = mysqli_query($conn, "SELECT * FROM complaints");
?>

<h2>Complaint Status</h2>

<table border="1">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Roll No</th>
    <th>Complaint</th>
    <th>Status</th>
</tr>

<?php while ($row = mysqli_fetch_assoc($result)) { ?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['student_name']; ?></td>
    <td><?php echo $row['roll_no']; ?></td>
    <td><?php echo $row['complaint']; ?></td>
    <td class="<?php 
    if ($row['status'] == 'Pending') echo 'status-pending';
    elseif ($row['status'] == 'In Progress') echo 'status-progress';
    else echo 'status-resolved';
?>">
<?php echo $row['status']; ?>
</td>

</tr>
<?php } ?>
</table>
