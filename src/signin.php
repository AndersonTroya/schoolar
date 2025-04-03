<?php
    include('../config/database.php');

    $email = $_POST['e_mail'];
    $passw  = $_POST['p_sswd'];

    $sql = "
        select 
        --id,
        --email,
        --password

    from
        users
    where
        email = '$email' and 
        password = '$passw' and 
        status = true
    GROUP BY
        id;
	"
    $res = pg_query($conn, $sql);

    if($res){
        $row = pg_fetch_assoc($res);
        if($row['total'] > 0){
            echo "Login OK";
        }else{
            echo "Login failed";
        }
    }
?>