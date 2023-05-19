<?php
    require_once("c://xampp/htdocs/Prueba_Nexura/controller/usernameController.php");
    $obj = new usernameController();
    $obj->update($_POST['id'],$_POST['nombre']);

?>