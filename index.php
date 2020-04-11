<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Censo</title>

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-dark border-right d-block" id="sidebar-wrapper">
      <div class="sidebar-heading text-white">SV-SV</div>
      <div class="list-group list-group-flush d-block">
        <button class="list-group-item list-group-item-action bg-dark text-white" id="btPrincipal">Principal</a>
        <button class="list-group-item list-group-item-action bg-dark text-white" id="btEstadisticas">Estadísticas</a>
        <button class="list-group-item list-group-item-action bg-dark text-white" id="btResumen">Resumen</a>
        <button class="list-group-item list-group-item-action bg-dark text-white" id="btCenso">Censo</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-light border-dark" id="menu-toggle" >&gt;</button>
        <button class="btn btn-light border-dark" id="menu-toggle2" >&lt;</button>

        <button  class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Opciones
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Iniciar sesion</a>
                <a class="dropdown-item" href="#">Perfil</a>
                <div class="dropdown-divider"></div>               
                <a class="dropdown-item" href="#">Cerrar sesion</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid" id="loader">
       
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Scripts -->
    <script>
    //incial
      $("#menu-toggle2").hide(); 
      $("#loader").load("principal.php");

    //Eventos
    //toggle sidebar
      $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
        $("#menu-toggle").hide();
        $("#menu-toggle2").show();         
      });
      $("#menu-toggle2").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
        $("#menu-toggle").show();
        $("#menu-toggle2").hide(); 
      });

      //principal
      $("#btPrincipal").click(function(e)
      {
        $("#loader").load("principal.php");
      });
      $("#btPrincipal0").click(function(e)
      {
        $("#loader").load("principal.php");
      });

      //estadisticas
      $("#btEstadisticas").click(function(e)
      {
        $("#loader").load("estadisticas.php");
      });
      $("#btEstadisticas0").click(function(e)
      {
        $("#loader").load("estadisticas.php");
      });

      //censo
      $("#btCenso").click(function(e)
      {
        $("#loader").load("censo.php");
      });
    </script>

</body>

</html>
