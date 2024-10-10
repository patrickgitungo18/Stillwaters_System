<?php

    include ("connection.php");

    $id = $_GET['id'];

    $query = "DELETE FROM user WHERE user_id = '$id'";

    $result = mysqli_query($conn, $query);

    if($result){
        echo "<script>window.location.href='display_users.php'</script>";
    }else{
        echo "Failed to delete user";
    }
?>