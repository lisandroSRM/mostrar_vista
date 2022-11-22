<?php

include "conexion.php";
$conexion = conexion();
$sql = "SELECT * FROM mostrarPC";
$respuesta = mysqli_query($conexion, $sql)

?>

<html>
    <center>
<table border = "1">
    <thead>
        <tr>
            <th>Persona</th>
            <th>Equipo Hardware</th>
        </tr>
    </thead>
    <tbody>
        <?php while($ver = mysqli_fetch_array($respuesta)):?>
        <tr>
            <td><?php echo $ver ['persona'] ?></td>
            <td><?php echo $ver ['PC'] ?></td>
        </tr>

        <?php endwhile; ?>
    </tbody>

</table>
</center>

</html>