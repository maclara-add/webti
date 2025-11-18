<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Formulario de Cadastro</h2>
    <?php
    if(isset($_GET["error"] && $_GET ["error"]=="faltando_dados")){
        echo("Erro");
    }
        ?>
    <form action="imc_resultado.php" method="get">
        <label for="ialtura">Altura</label>
        <input type="text" id="ialtura" name="altura" required>

        <label for="ipeso">Peso</label>
        <input type="text" id="ipeso" name="peso" required>
        

        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>