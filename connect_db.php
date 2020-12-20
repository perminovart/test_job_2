<?php
function getSQL($query){
	$host = 'mysql'; // адрес сервера 
	$database = "test_db"; // имя базы данных
	$user = 'root'; // имя пользователя
	$password = 'secret'; // пароль
    $link = mysqli_connect($host, $user, $password);
	if (!$link) {
		die("Ошибка соединения: ". mysqli_connect_errno());
    }
	mysqli_select_db( $link, $database);
	$data = mysqli_query($link, $query);
	mysqli_close($link);
	return $data;
}
?>
