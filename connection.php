<?php

$dsn="mysql:host=localhost; port=3306; dbname=beginner_project;";
$db_user="root";
$db_pswd="";
// $port=3306;

try{

//create conection
$conn=new PDO($dsn,$db_user,$db_pswd);
//$conn->setAttribut(PDO::ATTR_ERRMODE, PDO::ERR_MODE_EXCEPTION);
//echo "connected";


}catch(PDOException $e){

echo "errrooorr" .$e->getMessage();

}



?>