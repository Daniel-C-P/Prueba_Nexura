<?php
    require_once("c://xampp/htdocs/Prueba_Nexura/controller/empleadoController.php");
    require_once("c://xampp/htdocs/Prueba_Nexura/controller/empleado_rolController.php");

    $empleadoObj = new empleadoController();
    $empleado_rolObj = new empleado_rolController();
  
    $nombre =  $_POST['nombre'];
	$email =  $_POST['email'];
	$sexo = $_POST['sexo'];
    
    $area_id = $_POST['area'];
    $descripcion = $_POST['descripcion']; 

    if (!empty($_POST['boletin'])) {
        $boletin = 1;
    }else{
        $boletin = 0;
    }

    $empleadoId = $empleadoObj->guardar($nombre,$email,$sexo,$area_id,$boletin,$descripcion);


    if (!empty($_POST['1'])) {
        $rol1 =  1;
        $empleado_rolObj->guardar($empleadoId,$rol1);
        
    }if (!empty($_POST['2'])) {
        $rol2 =  2;
        $empleado_rolObj->guardar($empleadoId,$rol2);
        
    }if (!empty($_POST['3'])) {
        $rol3 =  3;
        $empleado_rolObj->guardar($empleadoId,$rol3);
        
    }if (!empty($_POST['4'])) {
        $rol4 =  4;
        $empleado_rolObj->guardar($empleadoId,$rol4);
        
    }if (!empty($_POST['5'])) {
        $rol5 =  5;
        $empleado_rolObj->guardar($empleadoId,$rol5);
        
    }if (!empty($_POST['6'])) {
        $rol6 =  6;
        $empleado_rolObj->guardar($empleadoId,$rol6);
        
    }if (!empty($_POST['7'])) {
        $rol7 =  7;
        $empleado_rolObj->guardar($empleadoId,$rol7);

        
    }if (!empty($_POST['8'])) {
        $rol8 =  $_POST['8'];
        $empleado_rolObj->guardar($empleadoId,$rol8);
    }

    header("Location:/Prueba_nexura/index.php");

?>