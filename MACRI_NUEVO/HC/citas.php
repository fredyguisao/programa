
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Citas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
          <a class="nav-link" aria-current="page" href="../LOGIN/index.php">ESCRITORIO</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link active "  href="../LOGIN/servidor/login/logout.php">SALIR DEL SISTEMA</a>
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


<div class="container mt-5">
   <form class="row g-3 "method="POST" action="citas.php">
    
   <div class="col-md-4">
    <label for="id_paciente" class="form-label">Documento de indentidad</label>
    <input type="text" name="id_paciente" class="form-control" id="id_paciente"> <br>
 
  </div>
  <div class="col-md-4">
    <label for="nombre" class="form-label">Nombre del paciente</label>
    <input type="text"  name="nombre" class="form-control" id="nombre">
  </div>
  
  <div class="col-md-4">
    <label for="fecha" class="form-label">Seleccione Fecha y Hora para su cita</label>
    <input type="datetime-local" name="fecha" class="form-control" id="fecha">   
  </div>
  
  <div class="col-md-12">
    <label for="nota" class="form-label">Enviar algun comentario.</label>
    <textarea type="text"  name="nota" class="form-control height: 100px; width: 100%;" id="nota"></textarea>
  </div>

  <input type="submit" value="Registrar" class="btn btn-success" name="btn_registrar">
</form>
</div>
  

<?php
    include("CONEXION/abrir_conexion.php");
    $id_paciente ="";
    $fecha ="";
    $nota ="";

     //INSERTAR
     if(isset($_POST['btn_registrar']))
     {
            $id_paciente = $_POST['id_paciente'];
            $fecha= $_POST['fecha'];
            $nota = $_POST['nota'];
        
            //INSERTAR
           mysqli_query($conexion, "INSERT INTO $tabla_db2
           (id_paciente,  fecha, nota) 
             values 
           ('$id_paciente', '$fecha', '$nota')");  
            echo "Se registraron los datos con Exito";  
     }

 


    include("CONEXION/cerrar_conexion.php");
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>