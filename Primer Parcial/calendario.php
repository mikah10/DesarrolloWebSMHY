<?php
    $mes = isset($_POST['mes']) ? intval($_POST['mes']) : null;
    $anio = isset($_POST['anio']) ? intval($_POST['anio']) : null;

    if($mes === null || $anio === null) {
        die("Por favor, seleccione un mes y un año.");
    }

    $fecha = "$anio-$mes-01"; 
    $numeroDiaSemana = date("w", strtotime($fecha));
    $diasDelMes = date("t", strtotime($fecha));

    $numeroDiaSemana = ($numeroDiaSemana == 0) ? 7 : $numeroDiaSemana; 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calendario</title>
    <style>
        table {
            width: 100%;
        }
        td {
            height: 150px;
            vertical-align: middle;
            text-align: center;
            border: 1px solid #000;
        }
        tr:nth-child(odd) {
            background-color: #FDE9D9;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <td>Lunes</td>
            <td>Martes</td>
            <td>Miércoles</td>
            <td>Jueves</td>
            <td>Viernes</td>
            <td>Sábado</td>
            <td>Domingo</td>
        </tr>
        <?php
            echo '<tr>';

            for ($i = 1; $i < $numeroDiaSemana; $i++) {
                echo '<td></td>';
            }

            for ($i = 1; $i <= $diasDelMes; $i++) {
                if ($numeroDiaSemana > 7) {
                    echo '</tr><tr>';
                    $numeroDiaSemana = 1;
                }

                echo '<td>' . $i . '</td>';
                $numeroDiaSemana++;
            }

            while ($numeroDiaSemana <= 7) {
                echo '<td></td>';
                $numeroDiaSemana++;
            }

            echo '</tr>';
        ?>
    </table>
</body>
</html>
