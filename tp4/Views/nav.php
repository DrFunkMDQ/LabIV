<?php 
     namespace Models;
     use Models\Client as Client;
     require_once("../Config/Autoload.php");

     include 'header.php';
     include 'footer.php';
     include '../Config/verifySession.php';
     //var_dump( $_SESSION);

    
     $userName = $_SESSION['loggedUser'];


?>
<nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
     <span class="navbar-text">
          <strong>Bienvenido</strong> <?php echo $userName->getUserName(); ?> !!
     </span>
     <ul class="navbar-nav ml-auto">
          <li class="nav-item">
               <a class="nav-link" href="#">Listar Facturas</a>
          </li>
          <li class="nav-item">
               <a class="nav-link" href="add-bill.php">Agregar Facturas</a>
          </li>
          <li class="nav-item">
               <a class="nav-link" href="#">Cerrar sesión</a>
          </li>
     </ul>
</nav>
