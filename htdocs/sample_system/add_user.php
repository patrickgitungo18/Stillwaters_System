<?php
    include ("connection.php");
?>
<html>
    <head>
        <title>Add User</title>
    </head>
    <body>
        <h2>Add User</h2>
        <form method="post" action="">
            <table>
                <tr>
                    <td>First Name:</td>
                    <td><input type="text" name="firstname" placeholder="Enter your first name"></td>
                </tr>
                <tr>
                    <td>Last Name:</td>
                    <td><input type="text" name="lastname" placeholder="Enter your last name"></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="text" name="email" placeholder="Enter your email"></td>
                </tr>
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="username" placeholder="Create username"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="text" name="password" placeholder="Create your password"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="Add User"></td>
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

            $query = "INSERT INTO user (first_name, last_name, email, username, password) VALUES ('$firstname', '$lastname', '$email', '$username', '$password')";
            
            //check the query if it is executed
            $result = mysqli_query($conn, $query);

            if($result){
                echo "User added successfully";
            }else{
                echo "Failed to add user";
            }
        }

    ?>
    </body>