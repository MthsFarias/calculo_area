<html lang="pt-br"> 
  <head>
  <!--Calcule a área de um quadrado,retangulo e uma circuferência! -->
  </head>
  <body>
    <h1> CALCULO  </h1>
	<?php
	  $calculo_quadrado = $_POST["lateral"];
	  $calculo_quadrado = ($calculo_quadrado**2); //Alterando o operador pow
	  $raio = $_POST["raio"];
	  $circuferencia = (2*pi()*$raio);
	  
	  echo "<p> Calculo da área do quadrado: $calculo_quadrado  </p>";
	  echo "<p> Calculo da cincunferência: $circuferencia </p>";
	?>
  </body>
  </html>