<?php
    require_once("c://xampp/htdocs/Prueba_Nexura/controller/empleadoController.php");
    $obj = new empleadoController();
    $obj->delete($_GET['id']);

?>