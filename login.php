<?php

    include "koneksi.php";
    if (isset($_POST["submit"])) {
        session_start ();
        $_SESSION["id_admin"]=$_POST["id_admin"];
        $_SESSION["username"]=$_POST["username"];
        $_SESSION["password"]=$_POST["password"];

        $id_admin=$_SESSION["id_admin"];
        $username=$_SESSION["username"];
        $password=$_SESSION["password"];
        $login=mysqli_query ($koneksi,"SELECT*FROM kasir where 
        id_admin='$id_admin'username=$_username AND password='$password'");
        $cek=mysqli_num_rows($login);
        
        if ($cek==1) {
            header('location:logout.php');
        }else {
            echo "<div class='alert alert-danger'> Anda bukan admin! </div>";
        }
    }
    ?>
