<?php
$time_init = microtime(true);
/* Creamos las funciones que calculan el volumen de 
 una solución full de nutrientes par cada cultivo. La concentracion full
se aplica cuando las plantas tiene un mes de transplantadas.
A partir del full se calcula el .75full, el .50full y el .25full
 que es la solucion que se aplicac la primera semana al cultivo*/
 /*-- funcion de prueba --*/
 $volumenLitrosAgua= $_REQUEST['volumenLitrosAgua'];
 $cantidadPlantas= $_REQUEST['cantidadPlantas'];
 $fechatranplante= $_REQUEST['fechatranplante'];


 if ($_REQUEST['cultivo'] == "lechuga") {
  echo "Tipo de cultivo: lechuga<br>";
  echo "Número de plantas transplantadas: $cantidadPlantas<br>";
  echo "Fecha de pransplante: $fechatranplante <br>";

  /*Codigo para calcular y mostrar resultados */

  /* para extaer los datos pr referencia */
function salesCultivoLechuga($volumenLitrosAgua, &$nitratoCalcio, &$nitratoPotasio, &$fosfatoMonoAmon, &$sulfatoMagnesio, &$cloratoPotasio )
{
  $nitratoCalcio = 1.2 * $volumenLitrosAgua;
  $nitratoPotasio = 0.28 * $volumenLitrosAgua;
  $fosfatoMonoAmon = 0.15 * $volumenLitrosAgua;
  $sulfatoMagnesio = 0.5 * $volumenLitrosAgua;
  $cloratoPotasio = 0.2 * $volumenLitrosAgua;
}

salesCultivoLechuga($volumenLitrosAgua, $s1, $s2, $s3, $s4, $s5);

echo "Cantidad de sales mayores para la solución full de " .$volumenLitrosAgua. " litros de agua el cultivo de lechuga:" . "<br><br>";
echo "El nitrato de calcio para " . $volumenLitrosAgua . " litros de agua son: " . $s1 . " gramos<br>";
echo "El nitrato de Potasio para " . $volumenLitrosAgua . " litros de agua son: " . $s2 . " gramos<br>";
echo "El fosfato de amonio para ". $volumenLitrosAgua . " litros de agua son: " . $s3 . " gramos<br>";
echo "El sulfato de magnesio para " . $volumenLitrosAgua . " litros de agua son: " . $s4 . " gramos<br>";
echo "El clorarto de potasio para " . $volumenLitrosAgua . " litros de agua son: " . $s5 . " gramos<br>";

 }

 /*-- funcion de prueba --*/
if ($_REQUEST['cultivo'] == "berros") {
  
  echo "elcultivo elejido es berros<br>";
}

/*-- funcion de prueba --*/
if ($_REQUEST['operacion'] == "acelga") {

  echo "elcultivo elejido es acelga<br>";;
}



function pesoSalesBerros($volumenLitros, &$nitratoCalcio, &$nitratoPotasio, &$forfatoMonoAmon, &$sulfatoMagnesio, &$cloratoPotasio)
{
    $nitratoCalcio = 0.7 * $volumenLitros;
    $nitratoPotasio = 0.5 * $volumenLitros;
    $forfatoMonoAmon = 0.12 * $volumenLitros;
    $sulfatoMagnesio = 0.4 * $volumenLitros;
    $cloratoPotasio = 0 * $volumenLitros;
    return pesoSalesBerros($volumenLitros, $sal1, $sal2, $sal3, $sal4, $sal5);
};

function pesoSalesAcelga($volumenLitros, &$nitratoCalcio, &$nitratoPotasio, &$forfatoMonoAmon, &$sulfatoMagnesio, &$cloratoPotasio)
{
    $nitratoCalcio = 0.24 * $volumenLitros;
    $nitratoPotasio = 0.4 * $volumenLitros;
    $forfatoMonoAmon = 0.05 * $volumenLitros;
    $sulfatoMagnesio = 0.15 * $volumenLitros;
    $cloratoPotasio = 0 * $volumenLitros;
    return pesoSalesAcelga($volumenLitros, $sal1, $sal2, $sal3, $sal4, $sal5);
};

   $time_end=microtime(true);
   $time= $time_end - $time_init;
   echo "tiempo de proceso: $time";
?>

function pesoSalesBerros($volumenLitros, &$nitratoCalcio, &$nitratoPotasio, &$forfatoMonoAmon, &$sulfatoMagnesio, &$cloratoPotasio)
{
    $nitratoCalcio = 0.7 * $volumenLitros;
    $nitratoPotasio = 0.5 * $volumenLitros;
    $forfatoMonoAmon = 0.12 * $volumenLitros;
    $sulfatoMagnesio = 0.4 * $volumenLitros;
    $cloratoPotasio = 0 * $volumenLitros;
    return pesoSalesBerros($volumenLitros, $sal1, $sal2, $sal3, $sal4, $sal5);
};*/
/*========================================================================================= */
/*function pesoSalesAcelga($volumenLitros, &$nitratoCalcio, &$nitratoPotasio, &$forfatoMonoAmon, &$sulfatoMagnesio, &$cloratoPotasio)
{
    $nitratoCalcio = 0.24 * $volumenLitros;
    $nitratoPotasio = 0.4 * $volumenLitros;
    $forfatoMonoAmon = 0.05 * $volumenLitros;
    $sulfatoMagnesio = 0.15 * $volumenLitros;
    $cloratoPotasio = 0 * $volumenLitros;
    return pesoSalesAcelga($volumenLitros, $sal1, $sal2, $sal3, $sal4, $sal5);
};*/