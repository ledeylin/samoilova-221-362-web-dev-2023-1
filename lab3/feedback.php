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
            <li>
                <a href="<?php
                    $name = 'Вход';
                    $link = 'auth.php';
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
    </ul>

    

<h1>ОБРАТНАЯ СВЯЗЬ</h1>

    <section>

      <form class="feedback-form" action="https://httpbin.org/post" method="POST">
        
        <p><label for="name">ФИО</label><br><input type="text" id="fio" name="name"></p>

        <p><label for="email">Почта</label><br><input type="text" id="name" name="email"></p>

        <label for="info-where">Откуда узнали о нас?</label>
        <div class="radio-class">
          <label>
            <input type="radio" id="source-internet" name="source" value="Интернет" required>
            Интернет
        </label>
        <label>
            <input type="radio" id="source-tv" name="source" value="Телевидение">
            Телевидение
        </label>
        <label>
            <input type="radio" id="source-friends" name="source" value="Друзья">
            Друзья
        </label>
        </div>

        <label for="selector">Тип обращения</label>
        <div class="type">
          <select id="selector">
            <option>Предложение</option>
            <option>Жалоба</option>
          </select>
        </div>

        <label for="message" class="mesage-label">Текст сообщения</label>
        <div class="message">
          <textarea id="message-text" cols="40" rows="10"></textarea>
        </div>

        <div class="files">
          <input type="file">
        </div>

        <div class="accept">
          <p class="accept-label">Даю согласие на обработку персональных данных</p>
          <input type="checkbox" />
        </div>
        
        <div>
          <input type="submit" value="Отправить" class="submit"/>
        </div>

      </form>

    </section>

<?php 
    include ('footer.php');
?>