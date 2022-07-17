<?php

require_once ('calculoSales.php');

/*
$volumenLitrosAgua= $_REQUEST['volumenLitrosAgua'];
$cantidadPlantas= $_REQUEST['cantidadPlantas'];
$fechatranplante= $_REQUEST['fechatranplante'];
*/


  
  echo "<strong>Tipo de cultivo: lechuga</strong><br>";
  echo "Número de plantas transplantadas: $cantidadPlantas<br>";
  echo "Fecha de pransplante: $fechatranplante <br>";
  echo $nitratoCalcio;
  /*Codigo para calcular y mostrar resultados */

  /* para extaer los datos pr referencia */
function salesCultivoLechugaTercio($volumenLitrosAgua, &$nitratoCalcio, &$nitratoPotasio, &$fosfatoMonoAmon, &$sulfatoMagnesio, &$cloratoPotasio )
{
  $nitratoCalcio = 1.2 * 0.30 *$volumenLitrosAgua;
  $nitratoPotasio = 0.28 * 0.30 *$volumenLitrosAgua;
  $fosfatoMonoAmon = 0.15 * 0.30 *$volumenLitrosAgua;
  $sulfatoMagnesio = 0.5 * 0.30 *$volumenLitrosAgua;
  $cloratoPotasio = 0.2 * 0.30 *$volumenLitrosAgua;
}

salesCultivoLechugaTercio($volumenLitrosAgua, $s1, $s2, $s3, $s4, $s5);
echo "<div class='column is-3'>";
echo "Sales mayores para aplicar desde el dia 1 al dia 10<br> despues del transplante: " . "<BR><br>";
echo "Nitrato de calcio:  $s1  gramos<br>";
echo "Nitrato de Potasio: $s2  gramos<br>";
echo "Fosfato de amonio: $s3  gramos<br>";
echo "Sulfato de magnesio: $s4 gramos<br>";
echo "Clorarto de potasio: $s5  gramos<br>";
echo "</div>";
//------------------------------------------------------------
echo "<div class='column is-3'>";
 

function salesCultivoLechugaDosT($volumenLitrosAgua, &$nitratoCalcio, &$nitratoPotasio, &$fosfatoMonoAmon, &$sulfatoMagnesio, &$cloratoPotasio )
{
  $nitratoCalcio = 1.2 * 0.60 *$volumenLitrosAgua;
  $nitratoPotasio = 0.28 * 0.60 *$volumenLitrosAgua;
  $fosfatoMonoAmon = 0.15 * 0.60 *$volumenLitrosAgua;
  $sulfatoMagnesio = 0.5 * 0.60 *$volumenLitrosAgua;
  $cloratoPotasio = 0.2 * 0.60 *$volumenLitrosAgua;
}

salesCultivoLechugaDosT($volumenLitrosAgua, $s1, $s2, $s3, $s4, $s5);

echo "Sales mayores para  aplicar desde el dia 11 al dia 20<br>";
echo "Nitrato de calcio:  $s1  gramos<br>";
echo "Nitrato de Potasio: $s2  gramos<br>";
echo "Fosfato de amonio: $s3  gramos<br>";
echo "Sulfato de magnesio: $s4 gramos<br>";
echo "Clorarto de potasio: $s5  gramos<br>";
echo "</div>";




?>