<head>
  <title>Problema</title>
</head>

<body>


<?php

$volumenLitrosAgua= 200;
$salesCultivoLechuga = [
  'nitratoCalcio' => 1.2,
  'nitratoPotasio'=> 0.28,
  'fosfatoMonoAmon'=> 0.15,
  'sulfatoMagnesio'=> 0.5,
  'cloratoPotasio' => 0.2
];
echo "Disolver en el tanque una  a una las sales.<br> Para nutrir el cultivo del dia 1 al 10 despues<br> del transplante. Solucion 1/3 de full :<br>";
echo "<br>";
//Parala solucion 1/3 de full
foreach ($salesCultivoLechuga as $sal => $valor) {
  echo $sal . ": " . ($valor*0.33*$volumenLitrosAgua)."<br>";
}
echo "<br>";
echo "Aplicar del dia 11 al 20  despues<br> del transplante. Solucion 2/3 de full :<br>";
echo "<br>";
 //Parala solucion 2/3 de full
foreach ($salesCultivoLechuga as $sal => $valor) {
  echo $sal . ": " . ($valor*0.66*$volumenLitrosAgua)."<br>";
}
echo "<br>";
echo "Aplicar del dia 21  despues<br> del transplante hasta cosecha.<br> Solucion full :<br>";
echo "<br>";
foreach ($salesCultivoLechuga as $sal => $valor) {
  echo $sal . ": " . ($valor*$volumenLitrosAgua)."<br>";
}