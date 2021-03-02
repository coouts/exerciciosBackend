<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles-global.css" />
</head>
<body>
    <form method="GET" action="conversao.php">
        <h1>Conversão</h1>

        <div class="input-group">
            <label for="monetario">Valor monetário (R$):</label>
            <input type="number" name="monetario" id="monetario" required/>
        </div> 

        <div class="euro">
            <label for="euro">Euro</label>
            <input type="radio" name="valor" id="euro" required/>
        </div> 

        <div class="dolar">
            <label for="dolar">Dólar</label>
            <input type="radio" name="valor" id="dolar" required/>
        </div> 
        
        <button>Enviar</button>
    </form>     
</body>
</html>