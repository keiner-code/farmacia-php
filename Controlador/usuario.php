<?php
$dbhost ='localhost';
$dbname ='farmacia';
$usuario ='root';
$contra = '12345678.';

try{
  $pdo = new PDO("mysql:host=$dbhost;dbname=$dbname",$usuario,$contra);
  $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}catch(excepcion $e){
   echo $e->getMessage();
}

if(!empty($_POST)){
$correo = $_POST['email'];
$contra = $_POST['password'];
$nombre = $_POST['nombre'];
$apellido = $_POST['Apellido'];
$fecha = $_POST['fecha'];

$sql = "insert into agregarusuario(email,contrasena,nombre,apellido,fecha) values(:ema, :cont, :nom, :ape, :fec)";
    $query = $pdo->prepare($sql);
    $resul = $query->execute([
                   'ema'=>$correo,
                   'cont'=>$contra,
                   'nom'=>$nombre,
                   'ape'=>$apellido,
                   'fec'=>$fecha
    ]);

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <a class="text-muted" href="#"></a>
      </div>
      <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="#">AGREGAR USUARIO</a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        <a class="text-muted" href="#">
        </a>
        <a class="btn btn-sm btn-outline-secondary" href="#">ATRAS</a>
      </div>
    </div>
  </header>

  <nav>
         <ul class="nav" id="navprincipal">
             <li class="nav-item"><a class="nav-link" href="admin.php">Administrador</a></li>
             <li class="nav-item"><a class="nav-link" href="usuario.php">Usuario</a></li>
             <li class="nav-item"><a class="nav-link" href="productos.php">Productos</a></li>
         </ul>
     </nav>

  <form action="" method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Correo Electronico</label>
      <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Correo electronico">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Contraseña</label>
      <input type="password" class="form-control" name="password" id="inputPassword4" placeholder="Contraseña">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Nombre</label>
    <input type="text" class="form-control" id="inputAddress" name="nombre" placeholder="Nombre">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Apellido</label>
    <input type="text" class="form-control" id="inputAddress2" name="Apellido">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Fecha Nacimiento</label>
    <input type="text" class="form-control" id="inputAddress2" name="fecha">
  </div>
  <button type="submit" class="btn btn-primary" name="registrarse">Registrarse</button>
</form>
<?php
            if($resul){
                echo '<div class="alert alert-success">Registro Exitoso!!!</div>';
            }
        ?>
    
</body>
</html>