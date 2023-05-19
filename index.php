<?php
    require_once("c://xampp/htdocs/Prueba_Nexura/view/head/head.php");
    require_once("c://xampp/htdocs/Prueba_Nexura/controller/empleadoController.php");
    require_once("c://xampp/htdocs/Prueba_Nexura/controller/areasController.php");
    require_once("c://xampp/htdocs/Prueba_Nexura/controller/rolesController.php");

    $empleadoCObj = new empleadoController;
    $areasCObj = new areasController;
    $rolesCObj = new rolesController;

    


?>



<a href="/Prueba_Nexura/view/username/create.php" class="btn btn-primary">Agregar nuevo usuario</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">nombre</th>
      <th scope="col">Email</th>
      <th scope="col">sexo</th>
      <th scope="col">area</th>
      <th scope="col">roles</th>
      <th scope="col">modificar</th>
      <th scope="col">Eliminar</th>
    </tr>

  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>



<?php
    require_once("c://xampp/htdocs/Prueba_Nexura/view/head/footer.php");
?>