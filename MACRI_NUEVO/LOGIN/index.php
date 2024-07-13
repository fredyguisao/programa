

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
          <a class="nav-link" aria-current="page" href="#">ESCRITORIO</a>
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
            <a href="#" class="d-block text-light p-3 border-0"><i class="icon ion-md-apps lead mr-2"></i>
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
                            <a class="btn btn-primary w-100 align-self-center" href="perfil.php" role="button">Ver más</a>
                          </div>
                      </div>
                  </div>
              </section>

              <section class="bg-mix py-3">
                <div class="container">
                    <div class="card rounded-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 d-flex stat my-3">
                                    <div class="mx-auto">                               
                                        <h6 class="text-success"><i class="icon ion-md-calendar"></i>  Clic para agendar</h6>
                                        <a class="btn btn-primary w-100 align-self-center" href="inicio.php" role="button">Agendar cita</a>
                                        <div>    
                                     </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 d-flex stat my-3">
                                    <div class="mx-auto">                            
                                        <h6 class="text-success"><i class="icon ion-md-calendar"></i> Clic para ver citas</h6>
                                        <a class="btn btn-primary w-100 align-self-center" href="inicio.php" role="button">Ver mis citas</a>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 d-flex stat my-3">
                                    <div class="mx-auto">                               
                                          <h6 class="text-success"> <i class="icon ion-logo-youtube"></i> Clic para ver videos</h6>
                                        <a class="btn btn-primary w-100 align-self-center" href="inicio.php" role="button">Videos</a>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 d-flex my-3">
                                    <div class="mx-auto">                  
                                    <h6 class="text-success"><i class="icon ion-md-mail"></i> Centro de ayuda</h6>
                                        <a class="btn btn-primary w-100 align-self-center" href="inicio.php" role="button">Contacto</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </section>

              <section>
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-6 my-3">
                              <div class="card rounded-0">
                                  <div class="card-header bg-light">
                                    <h6 class="font-weight-bold mb-0">Depresión en población colombiana</h6>
                                  </div>
                                  <div class="card-body">
                                    <canvas id="myChart" width="300" height="150"></canvas>
                                  </div>
                              </div>
                          </div>


                          <div class="col-lg-6 my-3">
                            <div class="card rounded-0">
                                <div class="card-header bg-light">
                                    <h6 class="font-weight-bold mb-0">Ansiedad en población colombiana</h6>
                                </div>
                          
                               <div class="card-body">
                                <canvas id="myChart2" width="300" height="150"></canvas>
                              </div>
                              
                                </div>
                            </div>
                          </div>
                      </div>
                  </div>
              </section>
        </div>
        </div>
    </div>





    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js" integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>
        <script>
            var ctx = document.getElementById('myChart').getContext('2d');
            var myChart = new Chart(ctx, { 
                type: 'bar',
                data: {
                    labels: ['Feb 2020', 'Mar 2020', 'Abr 2020', 'May 2020',"Jun 2020"],
                    datasets: [{
                        label: 'Depresión',
                        data: [50, 100, 150, 200, 170],
                        backgroundColor: [
                            '#12C9E5',  
                            '#12C9E5',
                            '#12C9E5',
                            '#12C9E5',
                            '#111B54'
                        ],
                        maxBarThickness: 30,
                        maxBarLength: 2
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });



            var ctx = document.getElementById('myChart2').getContext('2d');
            var myChart = new Chart(ctx, { 
                type: 'doughnut',
                data: {
                    labels: ['Feb 2020', 'Mar 2020', 'Abr 2020', 'May 2020',"Jun 2020"],
                    datasets: [{
                        label: 'Depresión',
                        data: [50, 100, 150, 200, 170],
                        backgroundColor: [
                            '#EF45D3',  
                            '#64F01A',
                            '#0D74F8',
                            '#12C9E5',
                            '#111B54'
                        ],
                        maxBarThickness: 30,
                        maxBarLength: 2
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });

</script>
 






</body>
</html>   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>