<?php

    $exists = false;

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        include('config.php');

        $username = $_POST["username"];
        $password = $_POST["password"];
        $cpassword = $_POST["cpassword"];

        $sql = "SELECT * FROM users WHERE username='$username'";

        $result = mysqli_query($conn, $sql);

        $num = mysqli_num_rows($result);

        if($num == 0) {
  
            if(($password == $cpassword) && $exists == false) {
  
                $hash = password_hash($password, PASSWORD_DEFAULT);
                
                $sql = "INSERT INTO `users`(`username`, `password`) VALUES('$username',
                        '$hash')";

                $result = mysqli_query($conn, $sql);

                if($result) {
                    $showAlert = true;
                }
            }else {
                echo "Password do not match";
            }
        }

        if($num>0){
            $exists = "Username not available";
        }

    }

?>