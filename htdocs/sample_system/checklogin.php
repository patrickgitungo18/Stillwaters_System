<?php

    if(!isset($_SESSION['username'])){
        echo "<script>
        alert('You must login first');
        window.location.href='login.php';
        </script>";
    }

?>