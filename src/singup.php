<?php
    
    include('../config/database.php');

    $fname  = $_POST['f_name'];
    $lname  = $_POST['l_name'];
    $email  = $_POST['e_mail'];
    $passwd = $_POST['passw'];

    $enc_pass = md5($passwd);

    $sql = "INSERT INTO users (firstname, lastname, email, password)
        VALUES('$fname','$lname','$email','$enc_pass')
        ";

        $res = pg_query($conn, $sql);
        if($res){
            echo "Users has been created succesfully";
        }else{
            echo "Error";
        }
?>