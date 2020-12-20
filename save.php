<?php

$name=isset($_POST["name"]) && !empty($_POST["name"])
    ? $_POST["name"]
    : NULL; 
$surname=isset($_POST["surname"]) && !empty($_POST["surname"])
    ? $_POST["surname"]
    : NULL;   
$age=isset($_POST["age"]) && !empty($_POST["age"])
    ? $_POST["age"]
    : NULL; 
if($name==NULL||$surname==NULL||$age==NULL){
    $result=array('message'=>'Заполните все поля!');
} else { 
include_once("/connect_db.php");
$query="INSERT INTO users (name, surname, age) VALUES ('$name', '$surname', '$age')"; 
$data=getSQL($query);  
    
    // Формируем массив для JSON ответа
    $result=array('message'=>'Данные успешно загружены в БД');
}    
    // Переводим массив в JSON
    print json_encode($result); 
?>