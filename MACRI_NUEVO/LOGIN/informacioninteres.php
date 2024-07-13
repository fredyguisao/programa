

<!doctype html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,700&display=swap" rel="stylesheet">
    <!-- Ionic icons -->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>María crisitna Fernández </title>
  </head>


  <body>
  
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
  <div class="container">

    <a class="navbar-brand" href="#">
      <img src="https://placeholder.pics/svg/150x50/888888/EEE/Logo" alt="..." height="36">
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">ESCRITORIO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="perfil.php">PERFIL</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="informacioninteres.php">INFORMACIÓN DE INTERÉS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">ALIADOS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="mision_vision.php">MISIÓN Y VISIÓN</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="terminosycondiciones.php">TÉRMINOS Y CONDICIONES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="politica_datos.php">POLÍTICA DE DATOS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active "  href="inicio.php">INGRESAR AL SISTEMA</a>
        </li>

      <!--  <li class="nav-item dropdown">
          <a style="color:white" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php echo $_SESSION['usuario']; ?>
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="servidor/login/logout.php">Salir del sistema</a></li>
          </ul>
        </li>-->
      </ul>
    </div>
  </div>
</nav>

<!-- Page Content -->

    <div class="d-flex" id="content-wrapper">
   
        <!-- Sidebar -->
        <div id="sidebar-container" class="bg-primary">
            <div class="logo">
                <h4 class="text-light font-weight-bold mb-0">MACRI</h4>
            </div>
            <div class="menu">
            <a href="index.php" class="d-block text-light p-3 border-0"><i class="icon ion-md-apps lead mr-2"></i>
                         Escritorio</a>
            <a href="perfil.php" class="d-block text-light p-3 border-0"><i class="icon ion-md-person lead mr-2"></i>
                          Perfil</a>           
             <a href="informacioninteres.php" class="d-block text-light p-3 border-0"><i class="icon ion-md-stats lead mr-2"></i>
                         Informacion de interes</a>
              <a href="#" class="d-block text-light p-3 border-0"><i class="icon ion-md-contacts mr-2"></i>
                          Aliados</a>
              <a href="mision_vision.php" class="d-block text-light p-3 border-0"><i class="icon ion-md-heart mr-2"></i>
                        Misión-Visión</a> 
              <a href="terminosycondiciones.php" class="d-block text-light p-3 border-0"><i class="icon ion-md-list mr-2"></i>
                          Terminos y condiciones</a>  
            </div>
        </div>
        <!-- Fin sidebar -->

        <div class="w-100">

         

        <!-- Page Content -->
        <div id="content" class="bg-grey w-100">

              <section class="bg-light py-3">
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-9 col-md-8">
                            <h1 class="font-weight-bold mb-0">María Cristina Fernández.</h1>
                            <p class="lead text-muted">Psicóloga Especialista</p>
                                <div>
                                    <?php 
                                    date_default_timezone_set("America/Bogota");
                                     $mes= array("enero", "febrero",  "marzo",  "abril",  "mayo",  "junio",  "julio",  "agosto",  "septiembre",  "octubre",  "noviembre","diciembre");
                                    echo date("l"). " ". date("d"). " de " . $mes[date("m")-1]. " de " .date("y"). "<br>";
                                    echo " Hora " . date("h:i:sa");
                                    ?>
                                 </div>
                          </div>
                          <div class="col-lg-3 col-md-4 d-flex">   
                            <a class="btn btn-primary w-100 align-self-center" href="perfil.html" role="button">Ver más</a>
                          </div>
                      </div>
                  </div>
              </section>

               <!-- MACRI-->

  <div class="container mt-5 ">
    <div class="row">
      <div class="col-md-6">
        <div class="card border-0">
          <div class="card-body">
            <h2 class="card-title">NOTICIA 4</h2>
            
            <p class="card-text">What is Lorem Ipsum?
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been 
the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and 
scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic 
typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing 
Lorem Ipsum passages, and more recently with desktop publishing 
software like Aldus PageMaker including versions of Lorem Ipsum..
            </p>

          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card border-0">
          
          <div class="card-body">
          <h2 class="card-title">NOTICIA 3</h2>
            <p class="card-text">What is Lorem Ipsum?
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been 
the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and 
scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic 
typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing 
Lorem Ipsum passages, and more recently with desktop publishing 
software like Aldus PageMaker including versions of Lorem Ipsum..
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>


<!--  bloque de noticias 2 -->

<div class="container mt-5 ">
    <div class="row">
      <div class="col-md-6">
        <div class="card border-0">
          <div class="card-body">
            <h2 class="card-title">NOTICIA 2</h2>
            
            <p class="card-text">What is Lorem Ipsum?
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been 
the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and 
scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic 
typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing 
Lorem Ipsum passages, and more recently with desktop publishing 
software like Aldus PageMaker including versions of Lorem Ipsum..
            </p>

          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card border-0">
          
          <div class="card-body">
          <h2 class="card-title">NOTICIA 1</h2>
            <p class="card-text">What is Lorem Ipsum?
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been 
the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and 
scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic 
typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing 
Lorem Ipsum passages, and more recently with desktop publishing 
software like Aldus PageMaker including versions of Lorem Ipsum..
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

<!--  termina bloque de noticias 2 -->


  <!--  detalle de los servicios-->

  <div class="container mt-2">
    <div class="card text-center border-0">
      <div class="card-header">

      </div>
      <div class="card-body text-bg-info p-3">
        <h2 class="card-title">Equipo profesional enfocado
          al tratamiento y <br> permanencia de la Salud mental
        </h2>

   </div>



</body>
</html>   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>