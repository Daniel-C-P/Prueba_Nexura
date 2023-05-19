<?php
    require_once("c://xampp/htdocs/Prueba_Nexura/view/head/head.php");
    require_once("c://xampp/htdocs/Prueba_Nexura/controller/empleadoController.php");
    require_once("c://xampp/htdocs/Prueba_Nexura/controller/areasController.php");
    require_once("c://xampp/htdocs/Prueba_Nexura/controller/rolesController.php");

    $empleadoCObj = new empleadoController;;
    $rolesCObj = new rolesController;

    $empleados = $empleadoCObj->obtenerAreaEmpleado();

?>


<div class="container-sm">
    <a href="/Prueba_Nexura/view/empleado/create.php" class="btn btn-primary">Agregar nuevo usuario</a>
    <br>
    <br>
    <table class="table table-bordered border-primary">
        <thead>
            <tr>
                <th scope="col">nombre</th>
                <th scope="col">Email</th>
                <th scope="col">sexo</th>
                <th scope="col">area</th>
                <th scope="col">roles</th>
                <th scope="col">boletin</th>
                <th scope="col">modificar</th>
                <th scope="col">Eliminar</th>
            </tr>

        </thead>
        <tbody>
            <?php if($empleados): ?>
            <?php foreach($empleados as $empleado): ?>
            <tr>
                <th scope="row"><?=$empleado[1]?></th>
                <td><?=$empleado[2]?></td>
                <td>
                    <?php if($empleado[3] == 'M'): ?>
                    Masculino
                    <?php else: ?>
                    Femenino
                    <?php endif; ?>
                </td>
                <td><?=$empleado[4]?></td>
                <td></td>
                <td><?php if($empleado[5] == '1'): ?>
                    si
                    <?php else: ?>
                    no
                    <?php endif; ?></td>
                <td>
                    <a href="/Prueba_Nexura/view/empleado/edit.php?id=<?= $empleado[0]?>" class="btn btn-success">
                        Modificar
                    </a>
                </td>
                <td>
                    <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#id<?=$empleado[0]?>">Eliminar</a>
                    <!-- Modal -->
                    <div class="modal fade" id="id<?=$empleado[0]?>" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">¿Desea eliminar el registro?</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Una vez eliminado no se podra recuperar el registro
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-success"
                                        data-bs-dismiss="modal">Cerrar</button>
                                    <a href="/Prueba_Nexura/view/empleado/delete.php?id=<?= $empleado[0]?>"
                                        class="btn btn-danger">Eliminar</a>
                                    <!-- <button type="button" >Eliminar</button> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <?php endforeach; ?>
            <?php else: ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>



<?php
    require_once("c://xampp/htdocs/Prueba_Nexura/view/head/footer.php");
?>