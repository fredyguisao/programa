<html>
<head>
  <title>Registro de profesionales de la salud</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>


<div class="section">
<div class="row">
  <div class="col-md-4"></div>

<!-- INICIA LA COLUMNA -->


  <div class="col-md-4">

    <center><h1>PROFESIONAL</h1></center>

    <form method="POST" action="registro_profesionales.php" >

    <div class="form-group">
      <label for="id_psicologo">Documento de identidad</label>
      <input type="text" name="id_psicologo" class="form-control" id="id_psicologo">
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
        <label for="especialidad">Especialidad </label>
        <input type="text" name="especialidad" class="form-control" id="especialidad" >
    </div>


 
    
    <center>
      <input type="submit" value="Registrar" class="btn btn-success" name="btn_registrar">
  
    </center>

  </form>





  <?php
    include("../CONEXION/abrir_conexion.php");
      
      $id_psicologo ="";
      $nombre ="";
      $apellido ="";
      $especialidad="";
      

                              

                           //INSERTAR

      
      if(isset($_POST['btn_registrar']))
      {
             $id_psicologo = $_POST['id_psicologo'];
             $nombre = $_POST['nombre'];
             $apellido = $_POST['apellido'];
             $especialidad = $_POST['especialidad'];
          
         
          
        
         if ($id_psicologo=="" ||  $nombre==""  ||  $apellido==""  ||   $especialidad=="")
          {
          echo "Los campos son obligatorios";
         }
         else 
          {
             //INSERTAR
            mysqli_query($conexion, "INSERT INTO $tabla_db3 
            (id_psicologo, nombre, apellido, especialidad) 
              values 
            ('$id_psicologo', '$nombre',  '$apellido',  '$especialidad')");  
             echo "Se registraron los datos con Exito";
            
                     
         } 
      }



    include("../CONEXION/cerrar_conexion.php");
  ?>

  </div>


<!-- TERMINA LA COLUMNA -->



  <div class="col-md-4"></div>
</div>


</div>
  
  
</body>
</html>