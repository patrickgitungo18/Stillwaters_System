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
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="text" name="password"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="Add User"></td>
                </tr>
            </table>
        </form>
    </body>