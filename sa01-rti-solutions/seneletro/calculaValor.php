<?php

  if(!isset($_GET["cliente"]) 
      || !isset($_GET["endereco"])  
      || !isset($_GET["consumo"])){

        //redirecionar o usuário para a tela index.php
        header("location: index.php");
  }

  $cliente = $_GET["cliente"];
  $endereco = $_GET["endereco"];
  $consumo = $_GET["consumo"];

  $valorAcima =  ($consumo * 0.42);
  $valorAte = ($consumo * 0.32);

  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles-global.css" />
  <title>Calculo de Frete PHL</title>
</head>
<body>
  <!-- Se o valor do pedágio for maior que 100, exibir em vermelho -->
  <?php
    if($consumo > 120){
        echo "<h1>Conta de luz de $cliente</h1>";
        echo "<h1>Endereço: $endereco</h1>";
        echo "<h1>Consumo (kWh): $consumo</h1>";
        echo "<h1 style='color: red'>Valor a pagar: $valorAcima</h1>";
    }else {
        echo "<h1>Conta de luz de $cliente</h1>";
        echo "<h1>Endereço: $endreco</h1>";
        echo "<h1>Consumo (kWh): $consumo</h1>";
        echo "<h1>Valor a pagar: $valorAte</h1>";
    }

  ?>
</body>
</html>