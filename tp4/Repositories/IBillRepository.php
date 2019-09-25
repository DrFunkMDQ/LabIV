<?php 

    namespace Repositories; 

    require_once("../Config/Autoload.php");

    use Models\Item as Item;


    Interface IBillRepository{
        function add(Item $item);
        function remove();
        function getAll();
        function saveData();
        function retrieveData();
    }


?>