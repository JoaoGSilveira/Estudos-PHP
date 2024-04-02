<?php

if($_GET){
    echo "<pre>";
    var_dump($_GET["vet"]);
    echo "</pre>";
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média PHP</title>
</head>
<body>
    <h3>Entre com os dados dos alunos:</h3>
    <br><br>
    <form>
        <table border = "1">
            <thead>
                <tr>
                    <th></th>
                    <th>Nome</th>
                    <th>P1</th>
                    <th>P2</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <td><input type="text" name="vet[]"></td>
                        <td><input type="number" min = 0 max = 10 name="vet[]"></td>
                        <td><input type="number" min = 0 max = 10 name="vet[]"></td>
                    </td>
                </tr>
            </tbody>
        </table>
        <br><br>
        <input type="Submit" value="Enviar">
    </form>
</body>
</html>