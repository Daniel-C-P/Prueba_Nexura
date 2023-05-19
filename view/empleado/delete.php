<?php
    require_once("c://xampp/htdocs/Prueba_Nexura/controller/usernameController.php");
    $obj = new usernameController();
    $obj->delete($_GET['id']);

?>