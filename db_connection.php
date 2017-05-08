<?php
 $dsn = 'mysql:host=sql2.njit.edu;dbname=pb389';
 $username = 'pb389';
 $password = 'pb389';
 try{
   $db = new PDO($dsn,$username,$password);
 }catch (PDOException $e){
   $error_message = $e->getMessage();
   echo $error_message;
   exit();
 }
?>
