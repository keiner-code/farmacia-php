<?php
include '../Modelo/Conexion.php';

if(!empty($_POST['registrar'])){
$Nusu = $_POST['Nusuario'];
$contra = $_POST['contra'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$cedula = $_POST['cedula'];
$fecha = $_POST['fecha'];

$sql = "insert into admin(nombreUsuario,contrasena,nombre,apellido,cedula,fechanacimiento) values(:Nusu, :cont, :nom, :ape, :ced, :fec)";
    $query = $pdo->prepare($sql);
    $resul = $query->execute([
                   'Nusu'=>$Nusu,
                   'cont'=>$contra,
                   'nom'=>$nombre,
                   'ape'=>$apellido,
                   'ced'=>$cedula,
                   'fec'=>$fecha
    ]);

    if($resul==1){
      echo'<script>alert("Administrador Agregado");</script';
    }  

}elseif(!empty($_POST['modificar'])){
    $Nusu = $_POST['Nusuario'];
    $contra = $_POST['contra'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $cedula = $_POST['cedula'];
    $fecha = $_POST['fecha'];

     $sql = "UPDATE admin SET nombreUsuario= :nusu, contrasena= :cont, nombre= :nom, apellido= :ape, cedula= :ced, fechanacimiento = :fecha WHERE id = id";
     $query = $pdo->prepare($sql);
     $res = $query->execute([
              'nusu'=>$Nusu,
              'cont'=>$contra,
              'nom'=>$nombre,
              'ape'=>$apellido,
              'ced'=>$cedula,
              'fecha'=>$fecha
     ]);
}elseif(!empty($_POST['buscar'])){
    $cedula = $_POST['cedula'];

         $stmt = $pdo->prepare(
           'SELECT * FROM admin WHERE cedula like :ced'
         );
         $stmt->execute(array(':ced' => $cedula ));
       
         while( $datos = $stmt->fetch() ){
           $U = $datos[1];
           $C = $datos[2];
           $N = $datos[3];
           $A = $datos[4];
           $C = $datos[5];
           $F = $datos[6];
         }
}elseif(!empty($_POST['eliminar'])){
  $cedula = $_POST['cedula'];
     $sql = "DELETE FROM admin WHERE cedula= :ced";
     $stmt = $pdo->prepare($sql);
     $res = $stmt->execute(['ced'=>$cedula]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/estilo/estilo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
     <nav>
         <ul class="nav" id="navprincipal">
             <li class="nav-item"><a class="nav-link" href="admin.php">Administrador</a></li>
             <li class="nav-item"><a class="nav-link" href="usuario.php">Usuario</a></li>
             <li class="nav-item"><a class="nav-link" href="productos.php">Productos</a></li>
         </ul>
     </nav>
     <a class="btn btn-sm btn-outline-secondary" href="index.php">Salir del Administrador</a>
     <div class="row">
         <div class="col-md-6">

     <form method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nombre Usuario</label>
      <input value="<?php echo $U ?>" type="text" class="form-control" id="inputEmail4" placeholder="Nombre Usuario" name="Nusuario">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Contraseña</label>
      <input value="<?php echo $C ?>" type="password" class="form-control" id="inputPassword4" placeholder="Contraseña" name="contra">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Nombres</label>
    <input value="<?php echo $N ?>" type="text" class="form-control" id="inputAddress" placeholder="Nombres" name="nombre">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Apellido</label>
    <input value="<?php echo $A ?>" type="text" class="form-control" id="inputAddress2" placeholder="Apellido" name="apellido">
  </div>
  <div class="form-group">
        <label for="inputAddress2">Cedula</label>
        <input value="<?php echo $C ?>" type="text" class="form-control" id="inputAddress2" placeholder="Cedula" name="cedula">
      </div>
  <div class="form-group">
        <label for="inputAddress2">Fecha Nacimiento</label>
        <input value="<?php echo $F ?>" type="text" class="form-control" id="inputAddress2" placeholder="Fecha Nacimiento" name="fecha">
      </div>
  
  <button type="submit" class="btn btn-primary" value="Registrar" name="registrar">Registrar</button>
  <button type="submit" class="btn btn-primary" value="Modificar" name="modificar">Modificar</button>
  <button type="submit" class="btn btn-primary" value="Eliminar" name="eliminar">eliminar</button>
  <button type="submit" class="btn btn-primary" value="Buscar" name="buscar">Buscar</button>
</form>
         </div>
     </div>
    </div>
    
</body>
</html>