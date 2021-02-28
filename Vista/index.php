<?php
include_once '../Modelo/Conexion.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Farmacia</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../Modelo/estilo/estilo.css">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
  </head>
  <body>
    <div class="container">
  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <a class="text-muted" href="#"></a>
      </div>
      <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="#">Farmacia  Jesús de Nazaret</a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        <a class="text-muted" href="#">
        </a>
        <a class="btn btn-sm btn-outline-secondary" href="../Vista/login.php">Iniciar Sesion</a>
      </div>
    </div>
  </header>

  <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
      <a class="p-2 text-muted" href="index.php">Inicio</a>
      <a class="p-2 text-muted" href="#">Medicamentos Naturales</a>
      <a class="p-2 text-muted" href="#">Pedidos</a>
      <a class="p-2 text-muted" href="#">Acerca De Nosotroa</a>
      <a class="p-2 text-muted" href="#">Politicas</a>
    </nav>
  </div>

  <div class="jumbotron">  <!--p-4 p-md-5 text-white rounded bg-light"-->
    <div class="col-md-6 px-0">
      <h1 class="display-4 font-italic">Donde puedes encontrar la cura de tus males</h1>
      <p class="lead my-3">Aqui encontraras medicamento de toda clase a la orde solo mira nuestro catalogo y registrate para que puedas realizar tus compras .</p>
      <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continuar Leyendo...</a></p>
    </div>
  </div>

  <div class="row mb-2">
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        
      <?php
      $resulquery = $pdo->query('SELECT * FROM productos WHERE codigo = 3333');
         
         while($row = $resulquery->fetch()){
           echo '<div class="col p-4 d-flex flex-column position-static">';
           echo '<strong class="d-inline-block mb-2 text-primary">'.$row['nombre'].'</strong>';
           echo '<h3 class="mb-0">Codigo: '.$row['codigo'].'</h3>';
           echo '<p class="card-text mb-auto">'.$row['descripcion'].'</p>';
           echo '<a href="#" class="stretched-link">Continuar Leyendo</a>';
           echo '</div>';
         }
      ?>
        <div class="col-auto d-none d-lg-block">
            <img class="img" src="../Modelo/img/img2.jpg" alt="" srcset="">
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
       
      <?php
      $resulquery = $pdo->query('SELECT * FROM productos WHERE codigo = 4444');
         
         while($row = $resulquery->fetch()){
           echo '<div class="col p-4 d-flex flex-column position-static">';
           echo '<strong class="d-inline-block mb-2 text-primary">'.$row['nombre'].'</strong>';
           echo '<h3 class="mb-0">Codigo: '.$row['codigo'].'</h3>';
           echo '<p class="card-text mb-auto">'.$row['descripcion'].'</p>';
           echo '<a href="#" class="stretched-link">Continuar Leyendo</a>';
           echo '</div>';
         }
      ?>


        <div class="col-auto d-none d-lg-block">
            <img class="img" src="../Modelo/img/img3.jpg" alt="" srcset="">
        </div>
      </div>
    </div>
  </div>

  <div class="row mb-2">
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">World</strong>
          <h3 class="mb-0">Featured post</h3>
          <div class="mb-1 text-muted">Nov 12</div>
          <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
            <img class="img" src="../Modelo/img/img4.jpg" alt="" srcset="">
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">Design</strong>
          <h3 class="mb-0">Post title</h3>
          <div class="mb-1 text-muted">Nov 11</div>
          <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
            <img class="img" src="../Modelo/img/img5.jpg" alt="" srcset="">
        </div>
      </div>
    </div>
  </div>

  <div class="row mb-2">
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">World</strong>
          <h3 class="mb-0">Featured post</h3>
          <div class="mb-1 text-muted">Nov 12</div>
          <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img class="img" src="../Modelo/img/img1.jpg" alt="" srcset="">
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">Design</strong>
          <h3 class="mb-0">Post title</h3>
          <div class="mb-1 text-muted">Nov 11</div>
          <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
            <img class="img" src="../Modelo/img/img6.jpg" alt="" srcset="">
        </div>
      </div>
    </div>
  </div>

  <div class="row mb-2">
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">World</strong>
          <h3 class="mb-0">Featured post</h3>
          <div class="mb-1 text-muted">Nov 12</div>
          <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
            <img class="img" src="../Modelo/img/img7.jpg" alt="" srcset="">
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">Design</strong>
          <h3 class="mb-0">Post title</h3>
          <div class="mb-1 text-muted">Nov 11</div>
          <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
            <img class="img" src="../Modelo/img/img8.jpg" alt="" srcset="">
        </div>
      </div>
    </div>
  </div>

</div>

<main role="main" class="container">
  <div class="row">
    <div class="col-md-8 blog-main">
      <h3 class="pb-4 mb-4 font-italic border-bottom">
        From the Firehose
      </h3>


      <div class="p-4">
        <h4 class="font-italic">Elsewhere</h4>
        <ol class="list-unstyled">
          <li><a href="#">GitHub</a></li>
          <li><a href="#">Twitter</a></li>
          <li><a href="#">Facebook</a></li>
        </ol>
      </div>
    </aside><!-- /.blog-sidebar -->

  </div><!-- /.row -->

</main><!-- /.container -->

<footer class="blog-footer">
  <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
  <p>
    <a href="#">Back to top</a>
  </p>
</footer>
</body>
</html>
