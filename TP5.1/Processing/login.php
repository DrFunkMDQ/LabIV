<?php
    namespace Models;

    require_once("../Config/Autoload.php");
    use Models\Client as Client;
    
    if($_POST['userName'] && $_POST['password']){
        if(isset($_POST['userName']) && isset($_POST['password'])){
        $userName = $_POST['userName'];
        $password = $_POST['password'];
        if($userName == '123' && $password == '456'){
            session_start();
            $client = new Client();
            $client-> setUserName ($_POST['userName'])-> setPassword($_POST['password']);
            $_SESSION['loggedUser'] = $client;
            header("location: ../nav.php");
        }else{
            ?><script type="text/javascript">
            alert("Wrong Username or Password");
            location="../index.php";
            </script><?php
        }      
    }
}


?>