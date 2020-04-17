<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Censo</title>

  <link href="lib/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="lib/charts/Chart.min.css">
  <link href="css/login.css" rel="stylesheet" />
  <link href="css/general.css" rel="stylesheet" />
  <link href="css/accordion.css" rel="stylesheet" />
  <link rel="shortcut icon" type="image/png" href="img/sv.png" />
  <link href="css/simple-sidebar.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-dark border-right d-block" id="sidebar-wrapper">
      <div class="list-group list-group-flush d-block">
        <button class="list-group-item list-group-item-action bg-dark text-white" id="menu-toggle2">&lt;</button>
        <button class="list-group-item list-group-item-action bg-dark text-white" id="btCenso">Censo</a>
          <button class="list-group-item list-group-item-action bg-dark text-white" id="btInformacion">Información</a>
            <button class="list-group-item list-group-item-action bg-dark text-white" id="btEstadisticas">Estadísticas</a>
              <button class="list-group-item list-group-item-action bg-dark text-white" id="btFAQ">Preguntas frecuentes</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-light border-dark" id="menu-toggle">&gt;</button>


        <button id="btNav" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <button class="btn btn-light" id="btPrincipal0">Principal</a>
            </li>
            <li class="nav-item">
              <button class="btn btn-light" id="btEstadisticas0">Estadísticas</a>
            </li>
            <li>
              <button class="btn btn-light" id="btLogin">Iniciar sesion</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Opciones
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Perfil</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Cerrar sesion</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid loader" id="loader">

      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/charts/Chart.bundle.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Scripts -->
  <script>
    //incial
    $("#loader").load("principal.php");
    //Eventos
    //toggle sidebar
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
      $("#menu-toggle").css("visibility", "hidden")
    });
    $("#menu-toggle2").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
      $("#menu-toggle").css("visibility", "visible")
    });

    //principal
    $("#btPrincipal").click(function(e) {
      $("#loader").load("principal.php");
    });
    $("#btPrincipal0").click(function(e) {
      $("#loader").load("principal.php");
    });

    //estadisticas
    $("#btEstadisticas").click(function(e) {
      $("#loader").load("estadisticas.php");
    });
    $("#btEstadisticas0").click(function(e) {
      $("#loader").load("estadisticas.php");
    });

    //preguntas frecuentes
    $("#btFAQ").click(function(e) {
      $("#loader").load("preguntasFrecuentes.php");
    });

    //informacion
    $("#btInformacion").click(function(e) {
      $("#loader").load("informacion.php");
    });

    //censo
    $("#btCenso").click(function(e) {
      $("#loader").load("censo.php");
    });

    //login
    $("#btLogin").click(function(e) {
      $("#loader").load("login.php");
    });
  </script>

</body>

</html>