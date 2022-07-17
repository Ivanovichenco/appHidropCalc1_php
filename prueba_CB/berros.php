<?php
echo "Hello desde berros";

    echo "Tipo de cultivo: Berros<br>";
    echo "Número de plantas transplantadas: $cantidadPlantas<br>";
    echo "Fecha de pransplante: $fechatranplante <br>";
  
    /*Codigo para calcular y mostrar resultados */
  
    /* para extaer los datos pr referencia */
  function salesCultivoBerros($volumenLitrosAgua, &$nitratoCalcio, &$nitratoPotasio, &$fosfatoMonoAmon, &$sulfatoMagnesio, &$cloratoPotasio )
  {
    $nitratoCalcio = 0.7 * $volumenLitrosAgua;
    $nitratoPotasio = 0.5 * $volumenLitrosAgua;
    $fosfatoMonoAmon = 0.12 * $volumenLitrosAgua;
    $sulfatoMagnesio = 0.4 * $volumenLitrosAgua;
    $cloratoPotasio = 0 * $volumenLitrosAgua;
  }
  
  salesCultivoBerros($volumenLitrosAgua, $s1, $s2, $s3, $s4, $s5);
  
  echo "Cantidad de sales mayores para la solución full de " .$volumenLitrosAgua. " litros de agua el cultivo de lechuga:" . "<br><br>";
  echo "El nitrato de calcio:  $s1  gramos<br>";
  echo "El nitrato de Potasio: $s2  gramos<br>";
  echo "El fosfato de amonio: $s3  gramos<br>";
  echo "El sulfato de magnesio: $s4 gramos<br>";
  echo "El clorarto de potasio: $s5  gramos<br>";
  
 
?>