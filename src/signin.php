<?php
    include('../config/database.php');

    session_start();

    if(isset($_SESSION['user_id'])){
        header('Refresh: 0; URL=http://localhost/schoolar/src/home.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="src/icons/education.png">
    <title>Schoolar - Sign up</title>
</head>
<body>
    <center><img src="icons/user.png" width="50"></center><br>
    <form name="login form" action="signin.php" method="post">       
        <table border="0" align="center">
            <tr><td><input type="email" name="e_mail" placeholder="mail@.com" required></td></tr>
            <tr><td><input type="password" name="p_sswd" placeholder="*******" required></td></tr>
            <tr></tr>
            <tr><td align="center"><button>Login</button></td></tr>
        </table>
    </form>
</body>
</html>

<?php
    if(!empty($_POST['e_mail']) && !empty($_POST['p_sswd'])){   //valida que se halla enviado form
        $email = $_POST['e_mail'];
        $passw = $_POST['p_sswd'];

        $enc_pass = sha1($passw);
        
        $sql = "
        select 
            id,
            COUNT(id) as total
        from
            users
        where
            email = '$email' and 
            password = '$enc_pass' and 
            status = true
        GROUP BY 
            id
        ";

        $res = pg_query($conn, $sql);

        if($res){
            $row = pg_fetch_assoc($res);
            if($row && $row['total'] > 0){  //para evitar errores cuando la consulta no devuelve resultados
                $_SESSION['user_id'] = $row['id'];
                header('Refresh: 0; URL=http://localhost/schoolar/src/home.php');
            }else{
                echo "Login failed";
            }
        }
    }
?>
