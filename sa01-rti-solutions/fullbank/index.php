<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles-global.css" />
</head>
<body>
    <form method="GET" action="calcula-salario.php">
        <h1>Cálculo salário</h1>
    
        <div class="input-group">
            <label for="usuario">Nome:</label>
            <input type="text" name="usuario" id="usuario" required/>
         </div>

        <div class="input-group">
            <label for="salario">Salário:</label>
            <input type="number" name="salario" id="salario" required/>
        </div> 
        <button>Enviar</button>
    </form>     
</body>
</html>