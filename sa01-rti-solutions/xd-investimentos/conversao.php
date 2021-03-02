<?php

  if(!isset($_GET["monetario"])){

        //redirecionar o usuário para a tela index.php
        header("location: index.php");
  }

  $monetario = $_GET["monetario"];
  $euro = 5.41;
  $dolar = 6.57;


  $conversaoEuro = ($euro * $monetario);
  $conversaoDolar = ($dolar * $monetario);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles-global.css" />
  <title>Conversão</title>
</head>
<body>
  
  <?php
    if($monetario = $conversaoEuro){
      echo "<h1> Valor total em euro = $conversaoEuro</h1>";
    }
    if($monetario = $conversaoDolar){
        echo "<h1> Valor total em dolar = $conversaoDolar</h1>";
      }

  ?>
</body>
</html>