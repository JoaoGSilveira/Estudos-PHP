<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 01 19/02/2024</title>
</head>

<body>
    <h1>Obrigado pelo envio!!</h1>
    <br><br>
    <p>Confirme seus dados:</p>
    <br>
    <?php
    echo "Nome:"; echo $_POST["nomein_user"];
    
    echo "Data de Nascimento:"; echo $_POST["datanascin_user"];
    
    echo "CPF:"; echo $_POST["cpfin_user"];
    
    echo "Cidade:"; echo $_POST["cidadein_user"];
    
    echo "Telefone:"; echo $_POST["telin_user"];

    ?>
</body>

</html>