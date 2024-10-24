<?php

        if(isset($_POST['email']) || isset($_POST['password'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            if($email == 'loni@admin.com' && $password == 'admin') {
                header("Location: ./../index.html");
        } else {
            echo "email atau password salah";

        }
    }

?>
