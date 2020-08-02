<!--=====================================
	BARRA DE NAVEGACIÓN
	======================================-->
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    
    </ul>

    

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fas fa-user-times"></i>
          
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <?php 
          if($_SESSION['nombre']!=""){
            echo ' <span class="dropdown-item dropdown-header">'.$_SESSION["nombre"].'</span>';
          }else{
            echo '<span class="dropdown-item dropdown-header">Nombre de Usuario</span>';  
          }
          ?>
         
          <div class="dropdown-divider"></div>
          <a href="logout" class="dropdown-item">
            <i class="fas fa-user-times mr-2"></i> Cerrar Sesión
            <span class="float-right text-muted text-sm">Activa</span>
          </a>
         
      </li>
     
    </ul>
  </nav>
  <!-- /.navbar -->

