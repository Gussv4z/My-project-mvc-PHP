<?php
    $responses = new ControllerFilmes($_POST);

    $responses->consultFilme();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Aba de filmes</h1>

    <div class="container">
        <div class="container-form">
            <form action="" method="POST">
                <input type="text" name="filmeName" placeholder="Busque por algum filme">
                <button>Buscar</button>
            </form>
        </div>
        <div class="container-filmes">
            <div class="card-filme">
                <div class="filme"></div>
            </div>
        </div>
    </div>
</body>
</html>

