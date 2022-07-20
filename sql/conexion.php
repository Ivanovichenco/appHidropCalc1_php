<?php
  $conexion = mysqli_connect("localhost", "root", "1234", "hidropcalc1") or
    die("Problemas con la conexión");
    $formula= "Lorem ipsum lorem molum";
  mysqli_query($conexion, "insert into Cultivos(cultivo,bancada,volumenLitrosAgua,cantidadPlantas,fechaTransplante, formula) values 
                       ('$_REQUEST[cultivo]',$_REQUEST[bancada],$_REQUEST[volumenLitrosAgua],$_REQUEST[cantidadPlantas],'$_REQUEST[fechaTransplante]','$formula')")
    or die("Problemas en el select" . mysqli_error($conexion));

  mysqli_close($conexion);

  echo "El cultivo fue dado de alta.<br>";
  ?>