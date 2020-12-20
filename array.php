<?php
include_once('connect_db.php');
function getArray(){ 
    $query = "SELECT * FROM users WHERE age>18";
    $data=getSQL($query);
    while($result = mysqli_fetch_assoc($data)){    
        $array[]=$result; 
    }
    //var_dump ($array);
    return $array;
}
?>

