<?php
// Database connection (assuming you have db_connect.php that contains connection code)
include_once 'connection.php';

// Query to fetch all records from rental table
$result = mysqli_query($con, "SELECT * FROM users");

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="adminstyle.css">
    <title>User Details</title>
    <style>
        table, th, td {
            border: 1px solid;
            max-width: 100%;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <td>Id</td>
        <td>Username</td>
        <td>Name</td>
        <td>Created At</td>
		
    </tr>
    <?php
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["username"]; ?></td>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["created_at"]; ?></td>
            </tr>
            <?php
        }
    } else {
        echo "<tr><td colspan='6'>No records found</td></tr>";
    }
    ?>
</table>
</body>
</html>