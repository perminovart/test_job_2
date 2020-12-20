<?php
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Expires: " . date("r"));
header("content-type:text/html;charset=utf-8");
ini_set("display_errors", 1);
error_reporting(E_ALL);
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">

  <title>Test</title>
 

  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <script src="/ajax.js"></script>

</head>

<body>
    <form method="post" id="ajax_form" action="" >
        <input type="text" name="name" placeholder="Имя" /><br>
        <input type="text" name="surname" placeholder="Фамилия" /><br>
        <input type="text" name="age" placeholder="Возвраст" /><br>
        <input type="button" id="btn_save" value="Сохранить" />
        <input type="button" id="btn_unload" value="Выгрузить" />
    </form>
    <br>
    <div id="result_form"></div> 
    <p>Для перехода к файлу GoogleSheets нажмите</p>
    <a href="https://docs.google.com/spreadsheets/d/1G0zVrGWQNGqtN8SX29X9KUKbVBs0nlhDQteq7GY4AXA/edit#gid=0">
        <button type="submit">
           Открыть файл             
        </button>
    </a>
</body>
</html>