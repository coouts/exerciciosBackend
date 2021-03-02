<?php

  if(!isset($_GET["usuario"]) 
      || !isset($_GET["salario"])){

        //redirecionar o usuário para a tela index.php
        header("location: form.php");
  }

  $usuario = $_GET["usuario"];
  $salario = $_GET["salario"];

  $salarioAcima = ($salario * 0.1) + $salario;
  $salarioAte = ($salario * 0.2) + $salario;

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles-global.css" />
  <title>Cálculo de salário</title>
</head>
<body>
  <!-- Se o valor do pedágio for maior que 100, exibir em vermelho -->
  <?php
    if($salario > 5000){
      echo "<h1> $usuario irá receber: R$ <em> $salarioAcima </em></h1>";
    }else{
      echo "<h1> $usuario irá receber: R$ <em> $salarioAte </em></h1>";
    }
  ?>
</body>
</html>