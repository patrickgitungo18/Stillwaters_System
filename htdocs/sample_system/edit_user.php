<?php
 include ("connection.php");
?>
<html>
    <head>
        <title>Update User</title>
    </head>
    <body>
        <h2>Update User</h2>
        <a href="display_users.php">Display Users</a>

   
        <?php
         //retrieve data from the database
            $id = $_GET['id'];
            $query = "SELECT * FROM user WHERE user_id = '$id'";
            $result = mysqli_query($conn, $query);

            $row = mysqli_fetch_array($result);
            ?>
   
        <form method="post" action="">
            <table>
                <tr>
                    <td>First Name:</td>
                    <td><input type="text" name="firstname" placeholder="Enter your first name" value="<?php echo $row['first_name'];?>"></td>
                </tr>
                <tr>
                    <td>Last Name:</td>
                    <td><input type="text" name="lastname" placeholder="Enter your last name" value="<?php echo $row['last_name'];?>"></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="text" name="email" placeholder="Enter your email" value="<?php echo $row['email'];?>"></td>
                </tr>
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="username" placeholder="Create username" value="<?php echo $row['username'];?>"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="text" name="password" placeholder="Create your password" value="<?php echo $row['password'];?>"> </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="Update User"></td>
                </tr>
            </table>
        </form>
    <?php

        if(isset($_POST['submit'])){
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $username = $_POST['username'];
            $password = $_POST['password'];

            $query1 = "UPDATE user SET first_name = '$firstname', last_name = '$lastname', email = '$email', username = '$username', password = '$password' WHERE user_id = '$id'";
            
            //check the query if it is executed
            $result1 = mysqli_query($conn, $query1);

            if($result1==TRUE){
                echo "User Updated successfully";
            }else{
                echo "Failed to update user data!!!";
            }
        }

    ?>