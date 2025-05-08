<?php
    include('../config/database.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" align="Center">
    <tr>
        <td>Firstname</td>  
        <td>Lastname</td>
        <td>E-mail</td>
        <td>Status</td>
        <td>...</td>
    </tr>
    <tr>
        <td>Anderson</td>  
        <td>Troya</td>
        <td>E-andavidtr@gmail.com</td>
        <td>TRUE</td>
        <td>
            <img src = "icons/editar.png" width="15">
            <img src = "icons/simbolo-de-bote-de-basura-negro.png" width="15">
            <img src = "icons/simbolo-de-interfaz-de-lupa-de-busqueda.png" width="15">
        </td>
    </tr>
    <?php
        //code
        $sql = "SELECT";
    ?>
    </table>
</body>
</html>