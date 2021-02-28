<?php
$dbhost ='localhost';
$dbname ='farmacia';
$usuario ='root';
$contra = '';

try{
  $pdo = new PDO("mysql:host=$dbhost;dbname=$dbname",$usuario,$contra);
  $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}catch(excepcion $e){
   echo $e->getMessage();
}
?>