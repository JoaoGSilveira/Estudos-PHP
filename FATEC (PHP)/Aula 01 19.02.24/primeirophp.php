<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 01 19/02/2024</title>
</head>

<body>

    <h1>Teste Formulário com PHP</h1>

    <form action="formsucess.php" method="post">
        <fieldset>
            <legend>Dados Pessoais</legend>
            <label for="nome">Nome:</label>
            <input type="text" id="nomein" name="nomein_user">
            <p></p>
            <label for="datanasc">Data de Nascimento:</label>
            <input type="date" id="datanascin" name="datanascin_user">
            <p></p>
            <label for="cpf">CPF:</label>
            <input type="number" id="cpfin" name="cpfin_user">
            <p></p>
            <label for="cidade">Cidade:</label>
            <input type="text" id="cidadein" name="cidadein_user">
            <p></p>
            <label for="numerocel">Telefone:</label>
            <input type="number" id="telin" name="telin_user">
            <br><br>
            <input type="submit" value="Enviar">
        </fieldset>
    </form>
</body>

</html>