<?php

if (isset($_POST['signup-submit'])) {
    
    require 'dbh.inc.php';

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($username) || empty($email) || empty($password)) {
        header("Location: ../log_in.php?error=emptyFields&username=".$username . "&emailTaken=".$email);
        exit();
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../log_in.php?error=invalidUserName");
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../log_in.php?error=invalidEmail&username=".$username);
        exit();
    }
    else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../log_in.php?error=invalidUsername&username=".$email);
        exit();
    }
    else {
        $sql = "SELECT uidUsers FROM users WHERE uidUsers=?";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../log_in.php?error=sqlerror");
            exit();
            var_dump($conn);
        } else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);

            if($resultCheck > 0) {
                header("Location: ../log_in.php?error=usertaken&email=" . $email);
                exit();
            }
            else {
                $sql = "INSERT INTO users (uidUsers, emailUsers, pwdUsers, usergroup) VALUES (?,?,?, 0)";
                $stmt = mysqli_stmt_init($conn);

                if(!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../log_in.php?error=sqlerror");
                    exit();
                    echo var_dump($conn);
                } else {
                    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPassword);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../log_in.php?connectionsuccesful");
                    exit();
                    
                }
            }
        }


    }
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
}

else {
    header("Location: ../log_in.php?connectionsuccesful");
    exit();
}
    
 ?>