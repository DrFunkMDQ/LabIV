<?php
    require_once("Autoload.php");

    use Model\Client as Client;

    session_start();

    if(!(isset ($_SESSION['loggedUser']))){
        $loggedUser = $_SESSION['loggedUser'];
          ?><script type="text/javascript">
          alert("Please log in");
          location="../index.php";
          </script><?php
    }
?>