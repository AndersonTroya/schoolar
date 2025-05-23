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
            <th>Firstname</th>
            <th>Lastname</th>
            <th>E-mail</th>
            <th>Status</th>
            <th>Photo</th>
            <th>...</th>
        </tr>    
        <?php
            //code
            $sql = "
                select
                    id, 
                    firstname,
                    lastname,
                    email,
                    case when status = true then 'active' else 'No active'end as status
                from
                    users
            ";
            $res = pg_query($conn,$sql);
            if(!$res){
                echo "Query error";
                exit;
            }

            while($row = pg_fetch_assoc($res)){
                echo "<tr>";
                echo "<td>". $row['firstname'] ."</td>";  
                echo "<td>". $row['lastname'] ."</td>";
                echo "<td>". $row['email'] ."</td>";
                echo "<td>". $row['status'] ."</td>";
                echo "<td alling='center'><img src='photo_users/photo_default.png' width='40'></td>";
                echo "<td>";
                echo "<a href=''><img src = 'icons/editar.png' width='20'></a>";
                echo "<a href=''><img src = 'icons/simbolo-de-bote-de-basura-negro.png' width='20'></a>";
                echo "<a href='http://localhost/schoolar/src/delete.php'><img src = 'icons/simbolo-de-interfaz-de-lupa-de-busqueda.png' width='20'></a>";
                echo "</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>