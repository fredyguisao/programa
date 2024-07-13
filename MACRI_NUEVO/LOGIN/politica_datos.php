

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
      <div class="col-md-12">
        <div class="card border-0">
          <div class="card-body">
            <h2 class="card-title text-center">POLÍTICA DE DATOS</h2>
            
            <p class="card-text ">Última actualización: 27 de mayo del 2024. <br>  <br>

            1. Introducción <br> <br>
En WWW.MACRI.COM, estamos comprometidos con la privacidad y seguridad de los datos de nuestros usuarios. Esta política de datos describe cómo recopilamos, utilizamos y protegemos la información personal que obtenemos a través de nuestro sitio web, de acuerdo con las leyes colombianas de protección de datos. <br> <br>

2. Información que Recopilamos
Recopilamos información personal de diversas formas, incluyendo, pero no limitado a:
   - Información proporcionada por los usuarios al registrarse en nuestro sitio web, como nombre, dirección de correo electrónico, fecha de nacimiento, género y número de teléfono.
   - Información recopilada automáticamente a través de cookies y tecnologías similares, como dirección IP, tipo de navegador, sistema operativo y páginas visitadas.
   - Información obtenida a través de formularios de contacto u otras interacciones directas con nuestros usuarios. <br> <br>

3. Uso de la Información
Utilizamos la información personal recopilada para los siguientes propósitos:
   - Proporcionar y personalizar nuestros servicios, incluyendo la entrega de contenido relevante y la comunicación con los usuarios.
   - Mejorar la funcionalidad y el rendimiento de nuestro sitio web.
   - Cumplir con nuestras obligaciones legales y regulatorias.
   - Proteger la seguridad y la integridad de nuestros usuarios y de nuestro sitio web.<br> <br>

4. Divulgación de la Información
No vendemos, alquilamos ni compartimos información personal con terceros no afiliados, excepto en los siguientes casos:
   - Cuando sea necesario para cumplir con una orden judicial o solicitud legal.
   - Con el consentimiento expreso del usuario.
   - En situaciones en las que sea necesario para proteger la seguridad de nuestros usuarios o de terceros. <br> <br>

5. Protección de la Información
Implementamos medidas de seguridad físicas, técnicas y administrativas para proteger la información personal contra el acceso no autorizado, la divulgación, la alteración o la destrucción. <br> <br>

6. Derechos de los Usuarios
Los usuarios tienen derechos sobre su información personal, incluyendo el derecho a acceder, corregir, eliminar y restringir el procesamiento de sus datos personales. También tienen derecho a retirar su consentimiento en cualquier momento, cuando el procesamiento se base en el consentimiento. <br> <br>

7. Cambios en la Política de Datos
Nos reservamos el derecho de modificar esta política de datos en cualquier momento. Se notificarán los cambios significativos a través de nuestro sitio web o por otros medios apropiados. <br> <br>

8. Contacto
Si tiene alguna pregunta o inquietud sobre nuestra política de datos o el manejo de la información personal, no dude en ponerse en contacto con nosotros a través de infomacri.com <br> <br>

Última actualización: 27 de mayo del 2024. <br> <br>

Esta política de datos es efectiva a partir de la fecha indicada anteriormente y se aplica a todas las interacciones de los usuarios con nuestro sitio web a partir de esa fecha.


            </p>

          </div>
        </div>
      </div>

      
      </div>
    </div>
    <div class="container mt-2">
    <div class="card text-center border-0">
      <div class="card-header">

      </div>
      <div class="card-body text-bg-info p-3">
        <h2 class="card-title">Equipo profesional enfocado
          al tratamiento y <br> permanencia de la Salud mental
        </h2>
  </div>

  </div>






</body>
</html>   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>