<?php
include '../Modelo/conexion.php';
 
if(!empty($_POST)){
$nom = $_POST["Usuario"];
$contr = $_POST["contrasena"];

if(!$nom =="" && !$contr ==""){
    try{
   $conexion =  new PDO("mysql:host=$dbhost;dbname=$dbname",$usuario,$contra);
   $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $consulta = $conexion->prepare('select * from agregarusuario where contrasena = :CONTRA and nombre = :USU');
    $consulta->execute(array('CONTRA' =>$contr,'USU' =>$nom));
    $resultado = $consulta->fetchAll();
    
        if($resultado){
           header('Location: ../Controlador/admin.php');
        }else{
            echo ("No Existe El Usuario");
        }
    }catch(PDOException $e){
        echo 'Se ha producido una excepción: '.$e->getMessage();

      die();
    }
}else{
    echo("No puede Tener el Nombre Vacio");
}

//echo"Nombre: ",$nom,"<br>Contrasena: ",$contr;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../Modelo/estilologin/estilo.css"></a>
    <title>Document</title>
</head>
<body>
    <div class="tabla">
      <h1 class="titulo">Login</h1>
      <form action="login.php" method="POST">
          <table class="division">
              <tr>
              <td >
          <label for="Usuario">Usuario:</label>
          </td>
          <td>
          <input type="text" name="Usuario" placeholder="Usuario123">
        </td>
    </tr>
    <tr>
        <td>
          <label for="Contrasena">Contraseña</label>
        </td>
        <td>
          <input type="password" name="contrasena" placeholder="****">
        </td>
    </tr>
    <tr>
      <td>
        <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" value="Admin" name="admin">
    <label class="form-check-label" for="exampleCheck1">Admin</label>
  </div></td>
  <td>
        <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" value="Users" name="users">
    <label class="form-check-label" for="exampleCheck1">Users</label>
  </div></td>
    </tr>
        <td colspan="2">
          <input type="submit" name="Ingresar" value="Ingresar">
        </td>
        </table>
      </form>
    </div>
</body>
</html>