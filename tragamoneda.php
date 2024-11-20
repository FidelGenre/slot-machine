<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>TRAGAMONEDAS</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
<header>
    <div class="encabezado">
        
        <h1>Bievenido al Casino Santa Fe</h1>
        
        <img src="tragamonedas/logo.png" alt="logo" id="logo">

    </div>
</header>
<div class="container">

    <h1 id="titulo">TRAGAMONEDAS</h1>
    <div class="juego">
        <div class="tiradas">

            <?php

                $x = rand(1,6);
                $x2 = rand(1,6);
                $x3 = rand(1,6);

                echo "<img src='tragamonedas/img$x.png' border='1' alt='Slot1'>";

                echo "<img src='tragamonedas/img$x2.png' border='1' alt='Slot2'>";

                echo "<img src='tragamonedas/img$x3.png' border='1' alt ='Slot3'>";
            ?>
        </div>
        <div class="boton">
        
            <a href="javascript:document.location.reload();"><img src='tragamonedas/palanca.png'></a><br>
    
        </div>
    </div>    
    <div class="mensajes">

        <?php

        echo "Resultado: ";

        if ($x == $x2 && $x2 == $x3) {
            echo "¡GANASTE EL PREMIO MAYOR!";
            echo "<img src='tragamonedas/premio1.png' alt='ORO' width='200px'>";

        } elseif ($x == $x2 && $x2 != $x3) {

            echo "Ganaste el premio menor.";
            echo "<img src='tragamonedas/premio2.png' alt='PLATA' width='200px'>";

        } elseif($x2 == $x3 && $x != $x2){

            echo "Ganaste el premio menor.";
            echo "<img src='tragamonedas/premio2.png' alt='PLATA' width='200px'>";

        }elseif($x == $x3 && $x2 != $x){

            echo "Ganaste el ultimo premio.";
            echo "<img src='tragamonedas/premio3.png' alt='BRONCE' width='200px'>";

        } else {
            echo "Intentalo de nuevo";
            echo "<img src='tragamonedas/premio4.png' alt='BAR' width='200px'>";
        }

        ?>

    </div>
    
    
    
</div>

</body>
</html>