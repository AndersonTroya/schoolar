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
    
        <?php
            //code
            $sql = "
                select 
                    firstname,
                    lastname,
                    email,
                    case when status = true then 'active' else 'No active'end as status
                from
                users
            ";
            $res = pg_query($con,$sql);
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
                echo "<td>";
                echo "<img src = 'icons/editar.png' width='15'>";
                echo "<img src = 'icons/simbolo-de-bote-de-basura-negro.png' width='15'>";
                echo "<img src = 'icons/simbolo-de-interfaz-de-lupa-de-busqueda.png' width='15'>";
                echo "</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>