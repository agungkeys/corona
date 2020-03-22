<?php
  include_once "config.php";

  try{
    $db_con = new PDO("mysql:host={$db_host};dbname={$db_name}", $db_username, $db_password);
    $db_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
  catch(PDOException $e){
    echo $e->getMessage();
  }
?>