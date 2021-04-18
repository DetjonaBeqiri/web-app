<?php

if(isset($_POST['update-submit'])) {
    require 'dbh.inc.php';

    $id = $_POST['update-id'];
    $new_email = $_POST['update-email'];
    $new_password = $_POST['update-password'];
    
    $query = "UPDATE `users` SET `uidUsers`='" . $new_username."',`emailusers`='".$new_email."',`password`= $new_password WHERE `idUsers` = $id";

    $result = mysqli_query($conn, $query);
    mysqli_close($conn);

    header("Location: ../log_in.php?updatesuccesful");
    exit();
}

?>