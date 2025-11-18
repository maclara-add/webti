<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado IMC</title>
</head>
<body>
    <?php
    if(!isset($_POST['peso']) || isset($_POST[('altura')])){
        header("location: imc_formulario.php?error=faltando_dados");
        exit();
    }
    ?>
</body>
</html>