<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500&display=swap" rel="stylesheet"> 

    <link rel="stylesheet" href="style.css">
    <title>Test</title>
</head>
<body>
<?php require_once('db_connect.php'); ?>
    <section class="chatWind">
        <header class="chatWind__header"></header>
        <div class="chatWind__body">
            <?php require_once('add.php'); ?>
            <?php require_once('delete.php'); ?>
            <?php require_once('query.php'); ?>
        </div>
        <div class="chatWind__footer">
            <form action="" method="POST">
                <div class="form__input">
                    <label>Введите логин</label>
                    <input type="text" name="username">
                </div>
                <textarea name="comment" placeholder="Сообщение"></textarea>
                <input type="submit" value="">
            </form>
        </div>
    </section>
    <section class="chatInput">
        <div class="alert"><?php echo $alert; ?></div>
    </section>
    
</body>
</html>