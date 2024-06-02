<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Суперглобальні змінні PHP</h1>
    <table border="1">
        <tr>
            <th>Змінна</th>
            <th>Опис</th>
            <th>Значення</th>
        </tr>
        <tr>
            <td>$_GLOBALS</td>
            <td>Глобальні змінні</td>
            <td><?php echo htmlentities(substr(print_r($GLOBALS, true), 0, 100)); ?></td>
        </tr>
        <tr>
            <td>$_SERVER</td>
            <td>Інформація про сервер і оточення</td>
            <td><?php echo htmlentities(substr(print_r($_SERVER, true), 0, 100)); ?></td>
        </tr>
        <tr>
            <td>$_GET</td>
            <td>Змінні, передані методом GET</td>
            <td><?php echo htmlentities(print_r($_GET, true)); ?></td>
        </tr>
        <tr>
            <td>$_POST</td>
            <td>Змінні, передані методом POST</td>
            <td><?php echo htmlentities(print_r($_POST, true)); ?></td>
        </tr>
        <tr>
            <td>$_FILES</td>
            <td>Змінні для завантажених файлів</td>
            <td><?php echo htmlentities(print_r($_FILES, true)); ?></td>
        </tr>
        <tr>
            <td>$_COOKIE</td>
            <td>Асоціативний масив з HTTP Cookies</td>
            <td><?php echo htmlentities(print_r($_COOKIE, true)); ?></td>
        </tr>
        <tr>
            <td>$_REQUEST</td>
            <td>Змінні, які завжди доступні</td>
            <td><?php echo htmlentities(print_r($_REQUEST, true)); ?></td>
        </tr>
        <tr>
            <td>$_SESSION</td>
            <td>Змінні сеансу</td>
           <td><?php 
                session_start();
                echo htmlentities(print_r($_SESSION, true)); 
            ?></td>
        </tr>
        <tr>
            <td>$_ENV</td>
            <td>Змінні середовища</td>
            <td><?php echo htmlentities(print_r($_ENV, true)); ?></td>
        </tr>
    </table>
</body>

</html>