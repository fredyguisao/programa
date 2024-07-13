<html>
<head>
  <title>RegistroHc</title>
  

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
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












<div class="section">
<div class="row">
  <div class="col-md-4"></div>

<!-- INICIA LA COLUMNA -->


  <div class="col-md-4">

    <center><h1>PACIENTE</h1></center>

    <form method="POST" action="registro.php" >

    <div class="form-group">
      <label for="id_paciente">Documento de identidad</label>
      <input type="text" name="id_paciente" class="form-control" id="id_paciente">
    </div>

    <div class="form-group">
        <label for="nombre">Nombre </label>
        <input type="text" name="nombre" class="form-control" id="nombre" >
    </div>


    <div class="form-group">
        <label for="apellido">Apellido </label>
        <input type="text" name="apellido" class="form-control" id="apellido" >
    </div>


    <div class="form-group">
        <label for="edad">Edad </label>
        <input type="text" name="edad" class="form-control" id="edad" >
    </div>

    <div class="form-group">
        <label for="genero">Genero </label>
        <input type="text" name="genero" class="form-control" id="genero" >
    </div>

    <div class="form-group">
        <label for="direccion">Direccion </label>
        <input type="text" name="direccion" class="form-control" id="direccion" >  
    </div>

    <div class="form-group">
        <label for="telefono">Telefono </label>
        <input type="text" name="telefono" class="form-control" id="telefono" >  
    </div>

    <div class="form-group">
        <label for="correo_electronico">Correo electronico </label>
        <input type="text" name="correo_electronico" class="form-control" id="correo_electronico" >  
    </div>

 
    
    <center>
      <input type="submit" value="Registrar" class="btn btn-success" name="btn_registrar">
  
    </center>
    <br><br>
    <div class="text-center">
                    <a class="small" href="../login/index.php">REGRESAR AL INICIO</a>
                  </div><br><br>
  </form>

<br><br>



  <?php
    include("CONEXION/abrir_conexion.php");
      
      $id_paciente ="";
      $nombre ="";
      $apellido ="";
      $edad ="";
      $genero ="";
      $direccion ="";
      $telefono ="";
      $correo_electronico ="";

                              

                           //INSERTAR

      
      if(isset($_POST['btn_registrar']))
      {
             $id_paciente = $_POST['id_paciente'];
             $nombre = $_POST['nombre'];
             $apellido = $_POST['apellido'];
             $edad = $_POST['edad'];
             $genero = $_POST['genero'];
             $direccion = $_POST['direccion'];
             $telefono = $_POST['telefono'];
             $correo_electronico = $_POST['correo_electronico'];
         
          
        
         if ($id_paciente=="" ||  $nombre==""  ||  $apellido==""  || $telefono==""  ||  $correo_electronico=="")
          {
          echo "Los campos son obligatorios";
         }
         else 
          {
             //INSERTAR
            mysqli_query($conexion, "INSERT INTO $tabla_db1 
            (id_paciente, nombre, apellido, edad, genero, direccion, telefono, correo_electronico) 
              values 
            ('$id_paciente', '$nombre',  '$apellido',  '$edad',  '$genero',  '$direccion', 
            '$telefono',  '$correo_electronico')");  
             echo "Se registraron los datos con Exito";
          
                     
         } 
      }



    include("CONEXION/cerrar_conexion.php");
  ?>

  </div>


<!-- TERMINA LA COLUMNA -->



  <div class="col-md-4"></div>
</div>

<div class="container mt-2">
    <div class="card text-center border-0">
      <div class="card-header">

      </div>
      <div class="card-body  p-3">
        <h2 class="card-title">Equipo profesional enfocado
          al tratamiento y <br> permanencia de la Salud mental
        </h2>
    </div>
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  
</body>
</html>