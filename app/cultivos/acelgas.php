<?php


$salesCultivoAcelgas = [
  'Nitrato de Calcio' => 0.24,
  'Nitrato de Potasio'=> 0.40,
  'Fosfato Mono Amónico'=> 0.05,
  'Sulfato de Magnesio'=> 0.115,
  'Clorato de Potasio' => 0.0
];
echo '<div class="container columns">';
echo '<div class="column">';
echo "Para nutrir el cultivo del dia 1<br>  al 10 después del transplante.<br> Solución 1/3 de full :<br>";
echo "<br>";
//Parala solucion 1/3 de full
foreach ($salesCultivoAcelgas as $sal => $valor) {
  echo $sal . ": " . ($valor*0.33*$volumenLitrosAgua)." grs<br>";
}
echo '</div>';
echo '<div class="column">';
echo "Aplicar del dia 11 al 20  después<br> del transplante.<br> Solución 2/3 de full :<br>";
echo "<br>";
 //Parala solucion 2/3 de full
foreach ($salesCultivoAcelgas as $sal => $valor) {
  echo $sal . ": " . ($valor*0.66*$volumenLitrosAgua)." grs<br>";
}
echo '</div>';
echo '<div class="column">';
echo "Aplicar del dia 21  después<br> del transplante hasta cosecha.<br> Solución full :<br>";
echo "<br>";
foreach ($salesCultivoAcelgas as $sal => $valor) {
  echo $sal . ": " . ($valor*$volumenLitrosAgua)." grs<br>";
}
echo '</div>';
echo '</div>';
echo '</div>';
?>