<html>

<head>
  <title>Problema</title>
</head>

<body>
  <?php

  /*-- funcion de prueba --*/
 if ($_REQUEST['cultivo'] == "lechuga") {
  echo "elcultivo elegido es lechuga";
 }
 /*-- funcion de prueba --*/
if ($_REQUEST['cultivo'] == "berros") {
  
  echo "elcultivo elegido es berros";
} /*-- funcion de prueba --*/
if ($_REQUEST['operacion'] == "acelga") {

  echo "elcultivo elegido es acelga<br>";;
}
  $volumenLitrosAgua = $_REQUEST['volumenLitrosAgua'];
 
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
  
   
  ?>
</body>

</html> 