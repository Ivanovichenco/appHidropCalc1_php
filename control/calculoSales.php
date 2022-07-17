<!DOCTYPE html>
<html>

<head>
  <!-- Fotografia de fondo by jcomp en freepick -->
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
 
  <div class="header">
    <nav class="navbar is-success">
      <div class="navbar-brand">
        <h2 class="navbar-item subtitle">
          HIDROPCALC1
        </h2>
        
      </div>
      <div id="" class="navbar-menu is-hoverable">
        <div class="navbar-start">
          <a class="navbar-item" href="../index.html">
            Inicio
          </a>
          <div class="navbar-start  is-hoverable">
            <a class="navbar-item" href="../documentacion.html">
              Documentacion
            </a>
          </div>
        </div>
      </div>
      <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
         
          <a class="button is-light" onclick="imprimir();">
            Imprimir/Guardar Reporte
          </a>
        </div>
      </div>
    </div>
    </nav>
    
  </div>

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
 /*-- funcion de prueba --*/
 $volumenLitrosAgua= $_REQUEST['volumenLitrosAgua'];
 $cantidadPlantas= $_REQUEST['cantidadPlantas'];
 $fechatranplante= $_REQUEST['fechatranplante'];
 $numeroBancada = $_REQUEST['bancada'];
 

 if ($_REQUEST['cultivo'] == "lechugas") {
  
  echo "<strong >Tipo de cultivo: lechuga</strong><br>";
  echo "Número de plantas transplantadas: $cantidadPlantas<br>";
  echo "Fecha de transplante: $fechatranplante <br>";
  echo "En la bancada No: $numeroBancada <br>";
  echo "Cantidad de litros de agua a dosificar: $volumenLitrosAgua <br>";
  
  echo "<========================================================================>";
  echo " <div class='columns content has-text-centered' >";
  echo " <div class='column ' >";
  
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

echo "Sales mayores para aplicar desde <br>el dia 1 al dia 10 despues del transplante: " . "<BR><br>";
echo "Nitrato de calcio:  $s1  gramos<br>";
echo "Nitrato de Potasio: $s2  gramos<br>";
echo "Fosfato de amonio: $s3  gramos<br>";
echo "Sulfato de magnesio: $s4 gramos<br>";
echo "Clorarto de potasio: $s5  gramos<br>";
echo "</div>";
//------------------------------------------------------------

echo " <div class='column' >";

function salesCultivoLechugaDosT($volumenLitrosAgua, &$nitratoCalcio, &$nitratoPotasio, &$fosfatoMonoAmon, &$sulfatoMagnesio, &$cloratoPotasio )
{
  $nitratoCalcio = 1.2 * 0.60 *$volumenLitrosAgua;
  $nitratoPotasio = 0.28 * 0.60 *$volumenLitrosAgua;
  $fosfatoMonoAmon = 0.15 * 0.60 *$volumenLitrosAgua;
  $sulfatoMagnesio = 0.5 * 0.60 *$volumenLitrosAgua;
  $cloratoPotasio = 0.2 * 0.60 *$volumenLitrosAgua;
}

salesCultivoLechugaDosT($volumenLitrosAgua, $s1, $s2, $s3, $s4, $s5);

echo "Sales mayores para  aplicar desde<br> el dia 11 al dia 20 despues del transplante: " . "<BR><br>";
echo "Nitrato de calcio:  $s1  gramos<br>";
echo "Nitrato de Potasio: $s2  gramos<br>";
echo "Fosfato de amonio: $s3  gramos<br>";
echo "Sulfato de magnesio: $s4 gramos<br>";
echo "Clorarto de potasio: $s5  gramos<br>";
echo "</div>";

 

 //_____________________________________________

 echo " <div class='column ' >";

function salesCultivoLechugaFull($volumenLitrosAgua, &$nitratoCalcio, &$nitratoPotasio, &$fosfatoMonoAmon, &$sulfatoMagnesio, &$cloratoPotasio )
{
  $nitratoCalcio = 1.2 *$volumenLitrosAgua;
  $nitratoPotasio = 0.28 *$volumenLitrosAgua;
  $fosfatoMonoAmon = 0.15 * $volumenLitrosAgua;
  $sulfatoMagnesio = 0.5 * $volumenLitrosAgua;
  $cloratoPotasio = 0.2 * $volumenLitrosAgua;
}

salesCultivoLechugaFull($volumenLitrosAgua, $s1, $s2, $s3, $s4, $s5);

echo "Sales mayores para  aplicar desde<br> el dia 20 en adelante despues del transplante: " . "<BR><br>";
echo "Nitrato de calcio:  $s1  gramos<br>";
echo "Nitrato de Potasio: $s2  gramos<br>";
echo "Fosfato de amonio: $s3  gramos<br>";
echo "Sulfato de magnesio: $s4 gramos<br>";
echo "Clorarto de potasio: $s5  gramos<br>";
echo "</div>";
}

//==========================================================================>
// BERROS
if ($_REQUEST['cultivo'] == "berros") {
  
  echo "<strong >Tipo de cultivo: Berros</strong><br>";
  echo "Número de plantas transplantadas: $cantidadPlantas<br>";
  echo "Fecha de pransplante: $fechatranplante <br>";
  echo "En la bancada No: $numeroBancada <br>";
  echo "Cantidad de litros de agua a dosificar: $volumenLitrosAgua <br>";
  echo "<========================================================================>";
  echo " <div class='columns content has-text-centered' >";
  echo " <div class='column ' >";
  
  /*Codigo para calcular y mostrar resultados */

  /* para extaer los datos pr referencia */
function salesCultivoBerrosTercio($volumenLitrosAgua, &$nitratoCalcio, &$nitratoPotasio, &$fosfatoMonoAmon, &$sulfatoMagnesio, &$cloratoPotasio )
{
    $nitratoCalcio = 0.7 * 0.3* $volumenLitrosAgua;
    $nitratoPotasio = 0.5 * 0.3* $volumenLitrosAgua;
    $fosfatoMonoAmon = 0.12 * 0.3* $volumenLitrosAgua;
    $sulfatoMagnesio = 0.4 * 0.3* $volumenLitrosAgua;
    $cloratoPotasio = 0 * 0.3* $volumenLitrosAgua;
}

salesCultivoBerrosTercio($volumenLitrosAgua, $s1, $s2, $s3, $s4, $s5);

echo "Sales mayores para aplicar desde <br>el dia 1 al dia 10 despues del transplante: <br><br>";
echo "Nitrato de calcio:  $s1  gramos<br>";
echo "Nitrato de Potasio: $s2  gramos<br>";
echo "Fosfato de amonio: $s3  gramos<br>";
echo "Sulfato de magnesio: $s4 gramos<br>";
echo "Clorarto de potasio: $s5  gramos<br>";
echo "</div>";
//------------------------------------------------------------

echo " <div class='column' >";

function salesCultivoBerrosDosT($volumenLitrosAgua, &$nitratoCalcio, &$nitratoPotasio, &$fosfatoMonoAmon, &$sulfatoMagnesio, &$cloratoPotasio )
{
    $nitratoCalcio = 0.7 * 0.6* $volumenLitrosAgua;
    $nitratoPotasio = 0.5 * 0.6* $volumenLitrosAgua;
    $fosfatoMonoAmon = 0.12 * 0.6* $volumenLitrosAgua;
    $sulfatoMagnesio = 0.4 * 0.6* $volumenLitrosAgua;
    $cloratoPotasio = 0 * 0.6* $volumenLitrosAgua;
}

salesCultivoBerrosDosT($volumenLitrosAgua, $s1, $s2, $s3, $s4, $s5);

echo "Sales mayores para  aplicar desde <br>el dia 11 al dia 20 despues del transplante: " . "<BR><br>";
echo "Nitrato de calcio:  $s1  gramos<br>";
echo "Nitrato de Potasio: $s2  gramos<br>";
echo "Fosfato de amonio: $s3  gramos<br>";
echo "Sulfato de magnesio: $s4 gramos<br>";
echo "Clorarto de potasio: $s5  gramos<br>";
echo "</div>";

 

 //_____________________________________________

 echo " <div class='column ' >";

function salesCultivoBerrosFull($volumenLitrosAgua, &$nitratoCalcio, &$nitratoPotasio, &$fosfatoMonoAmon, &$sulfatoMagnesio, &$cloratoPotasio )
{
    $nitratoCalcio = 0.7 *  $volumenLitrosAgua;
    $nitratoPotasio = 0.5 * $volumenLitrosAgua;
    $fosfatoMonoAmon = 0.12 * $volumenLitrosAgua;
    $sulfatoMagnesio = 0.4 * $volumenLitrosAgua;
    $cloratoPotasio = 0 *$volumenLitrosAgua;
}

salesCultivoBerrosFull($volumenLitrosAgua, $s1, $s2, $s3, $s4, $s5);

echo "Sales mayores para  aplicar desde<br> el dia 21 hasta cosecha: " . "<BR><br>";
echo "Nitrato de calcio:  $s1  gramos<br>";
echo "Nitrato de Potasio: $s2  gramos<br>";
echo "Fosfato de amonio: $s3  gramos<br>";
echo "Sulfato de magnesio: $s4 gramos<br>";
echo "Clorarto de potasio: $s5  gramos<br>";
echo "</div>";
}
//==========================================================================>
// ACELGAS

if ($_REQUEST['cultivo'] == "acelgas") {
  
  echo "<strong >Tipo de cultivo: Acelga</strong><br>";
  echo "Número de plantas transplantadas: $cantidadPlantas<br>";
  echo "Fecha de pransplante: $fechatranplante <br>";
  echo "En la bancada No: $numeroBancada <br>";
  echo "Cantidad de litros de agua a dosificar: $volumenLitrosAgua <br>";
  echo "<=============================================================================>";
  echo " <div class='columns content has-text-centered' >";
  echo " <div class='column ' >";
  
  /*Codigo para calcular y mostrar resultados */

  /* para extaer los datos pr referencia */
function salesCultivoBerrosTercio($volumenLitrosAgua, &$nitratoCalcio, &$nitratoPotasio, &$fosfatoMonoAmon, &$sulfatoMagnesio, &$cloratoPotasio )
{
  $nitratoCalcio = 0.24 * 0.30 * $volumenLitrosAgua;
  $nitratoPotasio = 0.4 * 0.30 * $volumenLitrosAgua;
  $fosfatoMonoAmon = 0.05 * 0.30 * $volumenLitrosAgua;
  $sulfatoMagnesio = 0.115 * 0.30 * $volumenLitrosAgua;
  $cloratoPotasio = 0.2 * 0.30 * $volumenLitrosAgua;
}

salesCultivoBerrosTercio($volumenLitrosAgua, $s1, $s2, $s3, $s4, $s5);

echo "Sales mayores para aplicar desde<br> el dia 1 al dia 10 despues del transplante: " . "<BR><br>";
echo "Nitrato de calcio:  $s1  gramos<br>";
echo "Nitrato de Potasio: $s2  gramos<br>";
echo "Fosfato de amonio: $s3  gramos<br>";
echo "Sulfato de magnesio: $s4 gramos<br>";
echo "Clorarto de potasio: $s5  gramos<br>";
echo "</div>";
//------------------------------------------------------------

echo " <div class='column' >";

function salesCultivoBerrosDosT($volumenLitrosAgua, &$nitratoCalcio, &$nitratoPotasio, &$fosfatoMonoAmon, &$sulfatoMagnesio, &$cloratoPotasio )
{
  $nitratoCalcio = 0.24 * 0.60 * $volumenLitrosAgua;
  $nitratoPotasio = 0.4 * 0.60 * $volumenLitrosAgua;
  $fosfatoMonoAmon = 0.05 * 0.60 * $volumenLitrosAgua;
  $sulfatoMagnesio = 0.115 * 0.60 * $volumenLitrosAgua;
  $cloratoPotasio = 0.2 * 0.60 * $volumenLitrosAgua;
}

salesCultivoBerrosDosT($volumenLitrosAgua, $s1, $s2, $s3, $s4, $s5);

echo "Sales mayores para  aplicar desde el dia 11 al dia 20<br> despues del transplante: " . "<BR><br>";
echo "Nitrato de calcio:  $s1  gramos<br>";
echo "Nitrato de Potasio: $s2  gramos<br>";
echo "Fosfato de amonio: $s3  gramos<br>";
echo "Sulfato de magnesio: $s4 gramos<br>";
echo "Clorarto de potasio: $s5  gramos<br>";
echo "</div>";

 

 //_____________________________________________

 echo " <div class='column ' >";

function salesCultivoBerrosFull($volumenLitrosAgua, &$nitratoCalcio, &$nitratoPotasio, &$fosfatoMonoAmon, &$sulfatoMagnesio, &$cloratoPotasio )
{
  $nitratoCalcio = 0.24 *  $volumenLitrosAgua;
  $nitratoPotasio = 0.4 * $volumenLitrosAgua;
  $fosfatoMonoAmon = 0.05 * $volumenLitrosAgua;
  $sulfatoMagnesio = 0.115 * $volumenLitrosAgua;
  $cloratoPotasio = 0.2 * $volumenLitrosAgua;
}

salesCultivoBerrosFull($volumenLitrosAgua, $s1, $s2, $s3, $s4, $s5);

echo "Sales mayores para  aplicar desde el dia 21 <br> hasta cosecha:<br>";
echo "Nitrato de calcio:  $s1  gramos<br>";
echo "Nitrato de Potasio: $s2  gramos<br>";
echo "Fosfato de amonio: $s3  gramos<br>";
echo "Sulfato de magnesio: $s4 gramos<br>";
echo "Clorarto de potasio: $s5  gramos<br>";
echo "</div>";
}

echo"</div>";
echo"</div>";

?>




  <!-- FinMain ------------------------------------------------------>
 
  <!-- Footer----------------------------------------------------- -->
  <footer class="footer hero is-success">
    <div class="content has-text-centered">
      <p>
        <strong>HIDROPCALC1</strong> by Iván Adolfo Calderón</a>. The source code is licensed
        <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. The website content
        is licensed <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC BY NC SA 4.0</a>.
      </p>
    </div>
  </footer>
  <!-- FinFooter
    ----------------------------------------------------- -->
</body>

</html>














