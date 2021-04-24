<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="./cadastra.php" method="post">
        <input type="text" name="task">
        <input type="submit">
    </form>
    <h2>Tasks</h2>

    <a href="./excluir_tudo.php">apagar</a>

    <ul>
        <?php foreach ($todoList as $key => $value) : ?>
            <li> <?= $key  ?> - <?= $value  ?> <a href="excluir_tarefa.php?pos=<?= $key ?>"> (x) </a> </li>
        <?php endforeach; ?>
    </ul>

</body>

</html>