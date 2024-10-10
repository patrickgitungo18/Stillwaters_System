<?php
    include ("connection.php");
    include ("checklogin.php");
?>
<html>
    <head>
        <title>Display Users</title>
    </head>
    <body>
        <h2>Display Users</h2>
        <a href="add_user.php">Add User</a>
        <a href="logout.php">Logout</a>
        <table border="1">
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Username</th>
                <th>Password</th>
                <th>Action</th>
            </tr>
            <?php
                $query = "SELECT * FROM user";
                $result = mysqli_query($conn, $query);
                while($row = mysqli_fetch_array($result)){
            ?>
            <tr>
                <td><?php echo $row['first_name']; ?></td>
                <td><?php echo $row['last_name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['password']; ?></td>
                <td><a href="edit_user.php?id=<?php echo $row['user_id']; ?>">Edit</a> | <a href="delete_user.php?id=<?php echo $row['user_id']; ?>">Delete</a></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </body>