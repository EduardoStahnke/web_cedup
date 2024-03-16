<?php

$mensagem = "Bem vindo";
$nome_digitado = $_POST['nome'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <?php

    echo "<h1>$mensagem</h1>";
    echo "<h2>$nome_digitado</h2>";

    ?>
    <form action = "#" method = "post">
    <div class="mb-3">
      <div class="col">
        <label for="text" class="form-label">Nome:</label>
        <input type="text" class="form-control" placeholder="Nome" aria-label="nome" name="nome">
      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
  </form>
</body>

</body>

</html>
