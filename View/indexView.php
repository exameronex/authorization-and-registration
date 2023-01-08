<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if ($auth) :?>
        <p>Пользователь авторизован</p>
    <?php endif; ?>    
    <?php if (isset($login)) :?>
        <p>Пользователь <?= $login ?></p>
        <a href="logout.php">Выход</a> 
    <?php else: ?>
        <a href="../login.php">Авторизуйтесь</a> 
    <?php endif; ?> 
</body>
</html>