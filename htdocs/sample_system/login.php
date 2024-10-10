<?php
    include ("connection.php");
?>
<html>
    <head>
        <title>Display Users</title>
    </head>
    <body>
        <h2>Please Login...</h2>
        <form method="POST" action=""> 
        <table>
            <tr>
                <td>Username:</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td><input type="submit" name="login" value="Login"></td>
            </tr>
        </table>
        </form>

        <?php
        if(isset($_POST['login'])){
            $username = $_POST['username'];
            $password = $_POST['password'];

            $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_array($result);

            if($row==true){
                echo "<script>window.location.href='display_users.php'</script>";
            }else{
                echo "Invalid username or password";
            }
        }

        ?>
      
    </body>