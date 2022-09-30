<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ITVentas | Inicio</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../public/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../public/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page-->
  <link rel="stylesheet" href="../public/dist/css/skins/skin-blue.min.css">
  

  <!--DATATABLES  -->
  <link rel="stylesheet" type="text/css" href="../public/datatables/jquery.dataTables.min.css">
  <link href="../public/datatables/buttons.dataTables.min.css" rel="stylesheet">
  <link href="../public/datatables/responsive.dataTables.min.css" rel="stylesheet">

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->

          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../public/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
              <span class="hidden-xs">Diego Aguja</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="../public/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Diego Aguja - Desarrollando software
                  <br><small>Miembro desde ayer</small>
                </p>
              </li>

              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Cerrar</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
     <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header"></li>

        <li><a href="#"><i class="fa fa-tasks"></i> <span>Escritorio</span>
          </a>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i> 
            <span>Almacén</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="articulo.php"><i class="fa fa-circle-o"></i>Artículos</a></li>
            <li><a href="categoria.php"><i class="fa fa-circle-o"></i>Categorías</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-th"></i> 
            <span>Compras</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="ingreso.php"><i class="fa fa-circle-o"></i>Ingresos</a></li>
            <li><a href="proveedor.php"><i class="fa fa-circle-o"></i>Proveedores</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-shopping-cart"></i> 
            <span>Ventas</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="venta.php"><i class="fa fa-circle-o"></i>Ventas</a></li>
            <li><a href="cliente.php"><i class="fa fa-circle-o"></i>Clientes</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> 
            <span>Acceso</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="usuario.php"><i class="fa fa-circle-o"></i>Usuarios</a></li>
            <li><a href="permiso.php"><i class="fa fa-circle-o"></i>Permisos</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-bar-chart"></i> 
            <span>Consulta Ventas</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="consultaventas.php"><i class="fa fa-circle-o"></i>Consulta Ventas</a></li>
          </ul>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-info-square"></i><span>Ayuda</span>
            <small class="label pull-right bg-red">PDF</small>
          </a>
        </li>        
        <li>
          <a href="#">
            <i class="fa fa-info-circle"></i><span>Acerca de...</span>
            <small class="label pull-right bg-yellow">IT</small>
          </a>
        </li>

      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
  