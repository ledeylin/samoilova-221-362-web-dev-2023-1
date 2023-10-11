<?php
$title = 'Самойлова Валерия 221-362 работа 3';
?>

<!DOCTYPE html>
<html lang="ru">

  <head>
    <meta charset="utf-8">
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@600&display=swap" rel="stylesheet">
  </head>

  <body>

    <ul class="menu-main">
    <li class="menu-item"> 
    <a href="<?php
                    $name = 'Главная';
                    $link = 'index.php';
                    $current_page = false;

                    echo $link;

                    ?>">
                    <?php
                    if ($current_page) {
                        echo '<span class="selected_menu">' . $name . '</span>';
                    } else {
                        echo $name;
                    }
                    ?>
                </a>
            </li>
           
            <li>
                <a href="<?php
                    $name = 'Обратная связь';
                    $link = 'feedback.php';
                    $current_page = false;

                    echo $link;

                    ?>">
                    <?php
                    if ($current_page) {
                        echo '<span class="selected_menu">' . $name . '</span>';
                    } else {
                        echo $name;
                    }
                    ?>
                </a>
            </li>
            <li>
                <a href="<?php
                    $name = 'Вход';
                    $link = 'auth.php';
                    $current_page = true;

                    echo $link;

                    ?>">
                    <?php
                    if ($current_page) {
                        echo '<span class="selected_menu">' . $name . '</span>';
                    } else {
                        echo $name;
                    }
                    ?>
                </a>

  </li>
    </ul>

<section>
        <form class="auth-form" action="https://httpbin.org/post" method="post">
            <fieldset>
                <legend>Авторизация</legend>
                <p><label for="login">Логин</label><br><input type="text" id="login" name="login"></p>
                <p><label for="password">Пароль</label><br><input type="password" id="password" name="pass"></p>
            </fieldset>
            <p><input type="submit" value="Отправить"></p>
        </form>
    </section>

<?php 
    include ('footer.php');
?>