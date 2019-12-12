<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>IntroPhp7 Grupo XD</title>
    <link rel="stylesheet" href="css/estilos.css"/>
    <link rel="stylesheet" href="css/menu.css"/>
    <link rel="stylesheet" href="css/problema.css"/>
    <link href="https://fonts.googleapis.com/css?family=Rambla" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
   <section class="wrapper">
    <header>
      <h1 class="logo"><a href="index.php">IntroPHP7</a></h1>
      <nav>
      <ul>
        <li><a href="index.php" class="current">Inicio</a></li>
        <li><a href="#">Otros Ejemplos Php7</a></li>
      </ul>
      </nav>
    </header>
<section id="contenedor">
<section  class="problema">
  <h2>a) ¿Qué magnitud de desplazamiento angular tiene a los 11 segundos?<br>
   b) ¿Qué magnitud de velocidad angular lleva a los 11 segundos? </h2>
  <p>Descripción:</p>
  <p>Una rueda de bicicleta gira con una magnitud de velocidad angular inicial de 23.4 rad/s experimentando una aceleración angular cuya magnitud es de 6 rad/s² que dura 11 segundos</p>
</section>
<section class="formulas">
<h2>Fórmulas</h2>
Vox = Vo*cos()°<br>
Voy = Vo-sen ()°<br>
a. = Vox*t<br>
b. = Voy-g*t<br>
</section>
<section class="datos">
<h2>Datos:</h2>
Datos:
wo=23.4 rad/s<br>
a=6 rad/s
t=11 s

</section>
</section>
<section class="calculos">
<h2>Solución</h2>
<p>El dezplazamiento angular y la magnitud de la velocidad a los 11 segundos son:<br>
a<br>
o=wo*t+a*t^2/2<br>
b<br>
wf=wo+a*t<br>
</p>
</section>
<?php
    function solucion(){
        $wo=23.4;
        $a=6;
        $t=11;
        $a=$wo*$t+$a*$t*$t/2;

        return $a;

     }
     function solucion2(){
         $wo=23.4;
        $a=6;
        $t=11;
       $b=$wo+($a*$t);
       return $b;
     }
?>
<section class="resultado">
<h2>Resultado:</h2>
<div id="resultadoA"></div>
<?php

 print "<h1> resultado: b = ".solucion(). " rad </h1>";

 print "<h1> resultado: a = ".solucion2(). " rad </h1>";
?>
</section>
</section>
    <footer class="pie">
     Creative Commons versión 3.0 SciSoft 2019
    </footer>
   </section>
</body>
</html>
