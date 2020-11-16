<?php
error_reporting(-1);
if (isset($_POST['send'])){
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
}


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lesson 19</title>
</head>
<body>

<form method="post" action="lesson_19.php">
    <p>
        <input type="text" name="name">
    </p>
    <p>
        <textarea name="text" id="" cols="30" rows="10"></textarea>
    </p>
    <p>
    <input type="checkbox" name="remember">
    </p>
    <p>
        <select name="lang">
            <option value="eng">English</option>
            <option value="ru">Russian</option>
            <option value="ua">Ukrainian</option>
        </select>
    </p>
    <p>
        <button type="submit" name="send" value="test">Send</button>
    </p>
</form>
<hr>

<p>Введене ім'я: <?php if (!empty($_POST['name'])) echo $_POST['name']; else echo 'форма не відплавлена'?></p>
<!--<p>Введений текст: <?php /*if (isset($_POST['text'])) echo nl2br($_POST['text']); else echo 'форма не відплавлена'*/?></p>-->
<p>Введений текст: <?php echo !empty($_POST['text']) ? nl2br($_POST['text']): 'форма не відплавлена'?></p>
<p>
    <?php if (isset($_POST['remember']) && $_POST['remember'] == 'on') echo 'Чекбокс відміченний'?>
</p>
</body>
</html>