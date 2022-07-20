<?php 
include "../js/script.php";
?>
<?php 
include "../plantillas/header.php";
?>

  <!-- Header----------------------------------------------------- -->
  <div class="bg-img">
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
 $fechaTransplante= $_REQUEST['fechaTransplante'];
 $numeroBancada = $_REQUEST['bancada'];
 // Conexion y guardado automatico de los datos del cultivo en la base de datos
 require_once "../sql/conexion.php";
//==========================================================================>
// LECHUGAS

 if ($_REQUEST['cultivo'] == "lechugas") {
  
  echo "<strong >Tipo de cultivo: lechuga</strong><br>";
  echo "Número de plantas transplantadas: $cantidadPlantas<br>";
  echo "Fecha de transplante: $fechaTransplante <br>";
  echo "En la bancada No: $numeroBancada <br>";
  echo "Cantidad de litros de agua a dosificar: $volumenLitrosAgua <br>";
  
  echo "<hr>";
  echo " <div class='columns content has-text-justified' >";
  echo " <div class='column '>";
  
  /*Codigo para calcular y mostrar resultados */
   
  include_once "cultivos/lechugas.php";
 
}

//==========================================================================>
// BERROS
if ($_REQUEST['cultivo'] == "berros") {
  
  echo "<strong >Tipo de cultivo: Berros</strong><br>";
  echo "Número de plantas transplantadas: $cantidadPlantas<br>";
  echo "Fecha de transplante: $fechaTransplante <br>";
  echo "En la bancada No: $numeroBancada <br>";
  echo "Cantidad de litros de agua a dosificar: $volumenLitrosAgua <br>";
  
  echo "<hr>";
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
  echo "Fecha de transplante: $fechaTransplante <br>";
  echo "En la bancada No: $numeroBancada <br>";
  echo "Cantidad de litros de agua a dosificar: $volumenLitrosAgua <br>";
  
  echo "<hr>";
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














