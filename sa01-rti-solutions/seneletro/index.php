<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHL Fretes</title>
  <link rel="stylesheet" href="../styles-global.css" />
</head>

<body>
  <form method="GET" action="calculaValor.php">
    <h1>Cálculo da conta de luz</h1>
    
    <div class="input-group">
      <label for="cliente">Nome:</label>
      <input type="text" name="cliente" id="cliente" required/>
    </div>

    <div class="input-group">
      <label for="endereco">Endereço:</label>
      <input type="text" name="endereco" id="endereco" required/>
    </div>

    <div class="input-group">
      <label for="consumo">Consumo (em kWh):</label>
      <input type="number" name="consumo" id="consumo" required/>
    </div>

    <button>Enviar</button>
  </form>
</body>

</html>