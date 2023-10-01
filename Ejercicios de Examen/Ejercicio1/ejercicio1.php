<?php
    if(isset($_COOKIE["nvisitas"])) {
        $nvisitas = $_COOKIE["nvisitas"];
        $nvisitas++;
    } else {
        $nvisitas = 1;
    }
    setcookie("nvisitas", $nvisitas, time()+3600);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="ejercicio1.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="images/usfx.png">
            <div class="title">
                <div style="color: red;">UNIVERSIDAD SAN FRANCISCO XAVIER</div>
                <div style="display: flex; justify-content: space-between; width: 100%;">
                    <div style="color: blue;">Facultad de tecnologia</div>
                    <div style="color: red;">Sucr<span style="color: yellow;">e-Bol</span><span
                            style="color: green;">ivia</span></div>
                </div>
                <div style="display: flex; justify-content: center;">Carrera Ing. Sistemas</div>
                <div style="display: flex; justify-content: center;">Semestre 2-2023</div>
            </div>
        </div>

        <div class="content">
            <div class="buttons">
                <div class="buttons_section">
                    <br>
                    <br>
                    <br>
                    <a class="button" href="E">Pregunta 1</a>
                    <a class="button" href="pregunta">Pregunta 2</a>
                    <a class="button" href="pregunta1">Pregunta 3</a>
                    <a class="button" href="pregunta1">Pregunta 4</a>


                </div>

            </div>
            
            
            <div class="main">
                Nombre de Estudiante: Hinojosa Yucra Samantha Mikaela
                <br>
                Ejercicios elegidos:
                <br>
                 <a href="Ejercicio3/ejercicio3.php">   - Ejercicio 3 Area de un triangulo </a> <br>
                 <a href="Ejercicio4/formulario.html">  - Ejercicio 4 Dias de la semana</a> <br>
                 <a href="Ejercicio5.1/form.html">  - Ejercicio 5 Par o Impar </a>  <br>
                 <a href="Ejercicio6.1/formulario.html">   - Ejercicio 6 Datos </a><br>
            </div>
        </div>
        <div class="footer1">
            Usted ingreso a esta pagina 
            <span style="padding: 0px 5px; border: 1px solid black; background-color: pink; height: 100%; margin: 0 10px;">
                <?php echo $nvisitas ?>
            </span> veces
        </div>
        <div class="footer2">
            Año 2023
        </div>

    </div>
    


</body>
</html>