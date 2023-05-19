<?php
if (isset($_POST['submit'])) {
    if (empty($_POST['nombre'])) {
        echo"<div class='alert alert-warning' role='alert'>
        falta el nombre
      </div>";
    }
}

?>