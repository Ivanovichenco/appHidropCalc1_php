<?php
  $conexion = mysqli_connect("localhost", "root", "", "hidropcalca1") or
    die("Problemas con la conexión");
/*
 $tipo=$_REQUEST['cultivo']
 $volumenLitrosAgua= $_REQUEST['volumenLitrosAgua'];
 $cantidadPlantas= $_REQUEST['cantidadPlantas'];
 $fechatranplante= $_REQUEST['fechatranplante'];
 $numeroBancada = $_REQUEST['bancada'];
*/
  mysqli_query($conexion, "insert into Cultivos(tipo,fechaTransplante,cantidadPlantas, formula) values 
                       ('$tipo',$numeroBancada,'$fechaTransplante',$cantidadPlantas,'$formula' )")
    or die("Problemas en el select" . mysqli_error($conexion));

  mysqli_close($conexion);

  echo "El alumno fue dado de alta.";
  ?>
