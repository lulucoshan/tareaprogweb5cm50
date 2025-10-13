<?php
    $alumnos = ["pancho","pincho","poncho","pencho","thomasJ","Maria","Julia","Pancha","Amelia","Leonardo"];
    $califs = ["0","1","2","3","4","5","6","7","8","9","10","NP"];
?>

<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Lista de calificaciones</h1>
        <form method="POST" action="estadisticas.php">
            <table>
                <tr>
                    <th>Nombre</th>
                    <th>Calificaciones</th>
                </tr>
                <?php foreach($alumnos as $alumno): ?>
                    <tr>
                        <td>
                            <label>
                                <?php echo $alumno ?>
                            </label>
                        </td>
                        <td>
                            <select name="cbo<?php echo $alumno ?>">
                                <?php foreach($califs as $calif): ?>
                                    <option><?php echo $calif ?></option>
                                <?php endforeach ?>
                            </select>
                        </td>
                    </tr>
                <?php endforeach ?>    
            </table>
            <input type="submit">
        </form>
    </body>
</html>