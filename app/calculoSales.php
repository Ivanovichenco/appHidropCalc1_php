<!DOCTYPE html>
<html>

<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hidropcalc1</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
  <link rel="stylesheet" type="text/css" href="../css/estilos.css">
  <script type="text/javascript">
            function imprimir() {
                if (window.print) {
                    window.print();
                } else {
                    alert("La función de impresion no esta soportada por su navegador.");
                }
            }
        </script>
</head>

<body >
  <!-- Header----------------------------------------------------- -->
 
  <?php
  include_once "../plantillas/navbar2.php";
 ?>

  <!-- FinHeader----------------------------------------------------- -->

  <!-- Section----------------------------------------------------- -->
 

  <!-- FinSection----------------------------------------------------- -->
 
 <?php

echo " <div class='container content has-text-centered ' >";

/* Creamos las funciones que calculan el volumen de 
 una solución full de nutrientes par cada cultivo. La concentracion full
se aplica cuando las plantas tiene un mes de transplantadas.
A partir del full se calcula el .75full, el .50full y el .25full
 que es la solucion que se aplicac la primera semana al cultivo*/
 
 $volumenLitrosAgua= $_REQUEST['volumenLitrosAgua'];
 $cantidadPlantas= $_REQUEST['cantidadPlantas'];
 $fechatranplante= $_REQUEST['fechatranplante'];
 $numeroBancada = $_REQUEST['bancada'];
 
//==========================================================================>
// LECHUGAS

 if ($_REQUEST['cultivo'] == "lechugas") {
  
  echo "<strong >Tipo de cultivo: lechuga</strong><br>";
  echo "Número de plantas transplantadas: $cantidadPlantas<br>";
  echo "Fecha de transplante: $fechatranplante <br>";
  echo "En la bancada No: $numeroBancada <br>";
  echo "Cantidad de litros de agua a dosificar: $volumenLitrosAgua <br>";
  
  echo "<========================================================================>";
  echo " <div class='columns content has-text-justified' >";
  echo " <div class='column ' >";
  
  /*Codigo para calcular y mostrar resultados */
   
  include_once "cultivos/lechugas.php";
 
}

//==========================================================================>
// BERROS
if ($_REQUEST['cultivo'] == "berros") {
  
  echo "<strong >Tipo de cultivo: Berros</strong><br>";
  echo "Número de plantas transplantadas: $cantidadPlantas<br>";
  echo "Fecha de transplante: $fechatranplante <br>";
  echo "En la bancada No: $numeroBancada <br>";
  echo "Cantidad de litros de agua a dosificar: $volumenLitrosAgua <br>";
  
  echo "<========================================================================>";
  echo " <div class='columns content has-text-justified' >";
  echo " <div class='column ' >";
  
  /*Codigo para calcular y mostrar resultados */
   
  include_once "cultivos/berros.php";
 
}
//==========================================================================>
// ACELGAS

if ($_REQUEST['cultivo'] == "acelgas") {
  
  echo "<strong >Tipo de cultivo: Acelgas</strong><br>";
  echo "Número de plantas transplantadas: $cantidadPlantas<br>";
  echo "Fecha de transplante: $fechatranplante <br>";
  echo "En la bancada No: $numeroBancada <br>";
  echo "Cantidad de litros de agua a dosificar: $volumenLitrosAgua <br>";
  
  echo "<========================================================================>";
  echo " <div class='columns content has-text-justified' >";
  echo " <div class='column ' >";
  
  /*Codigo para calcular y mostrar resultados */
   
  include_once "cultivos/acelgas.php";
 
}
//==========================================================================>
// OTRO CULTIVO

//==========================================================================>
echo"</div>";
echo"</div>";

?>




  <!-- FinMain ------------------------------------------------------>
 
  <!-- Footer----------------------------------------------------- -->
 <?php
  include_once "../plantillas/footer.php";
 ?>
  <!-- FinFooter
    ----------------------------------------------------- -->
</body>

</html>














