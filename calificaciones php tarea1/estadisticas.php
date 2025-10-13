<h1>Estadisticas del grupo</h1>
<?php

    $alumnos = ["pancho","pincho","poncho","pencho","thomasJ","Maria","Julia","Pancha","Amelia","Leonardo"];

    if (count($_POST)>0){
        echo "recibiendo los datos de\t". count($_POST). "\t alumnos";
    }else{
        echo "Acceso no valido";
    }

    $arregloNoNP = array_filter($_POST, 'is_numeric');

    $niniosprodigio = count($_POST) - count($arregloNoNP);

   function promedio($Arreglo){
        return array_sum($Arreglo) / COUNT($Arreglo);
   }

   $promedio = promedio($arregloNoNP);

   $peorcal = min($arregloNoNP);

   $mejorcal = max($arregloNoNP);

   $reprobados = 0;

   $aprobados = 0;

   
   foreach ($_POST as $calif) {
    if ($calif >= 6){
        $aprobados++;
    }else{
        $reprobados++;
    }
   }

   $porcentajeaprob = $aprobados / count($arregloNoNP) * 100;

   $porcentajereprob = $reprobados / count($arregloNoNP) * 100;
?>

<table border="solid">
    <tr>
        <th>porcentaje aprobado</th>
        <th>Porcentaje reprobado</th>
        <th>Aprovechamiento general</th>
        <th>Peor calificación</th>
        <th>Mejor calificación</th>
        <th>NP totales<th>
    </tr>
    <tr>
        <td><?php echo $porcentajeaprob . "\t%" ?></td>
        <td><?php echo $porcentajereprob . "\t%" ?></td>
        <td>
            <?php echo $promedio ?>
        </td>
        <td>
            <?php echo $peorcal ?>
        </td>
        <td>
            <?php echo $mejorcal ?>
        </td>
        <td>
            <?php echo $niniosprodigio ?>
        </td>
    </tr>
</table>
<h1>Calificaciones finales del grupo </h1>
<table border="solid">
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
                            <?php echo $_POST["cbo". $alumno]; ?>
                        </td>
                    </tr>
                <?php endforeach ?>    
            </table>