<?php

    namespace Config;

    session_start();
    if(!(isset ($_SESSION['loggedUser']))){
          ?><script type="text/javascript">
          alert("Please log in");
          location="../index.php";
          </script><?php
    }
?>