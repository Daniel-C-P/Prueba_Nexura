<?php
    require_once("c://xampp/htdocs/Prueba_Nexura/view/head/head.php");
    require_once("c://xampp/htdocs/Prueba_Nexura/controller/areasController.php");
    require_once("c://xampp/htdocs/Prueba_Nexura/controller/rolesController.php");
    
    $areasObj = new areasController();
    $areas = $areasObj->index();

    $rolesObj = new rolesController();
    $roles = $rolesObj->index();
?>


<div class="container-sm">
    <form action="store.php" method="POST" autocomplete="off">
        <!-- <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nombre del usuario</label>
        <input type="text" name="nombre" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
    <a class="btn btn-danger" href="index.php">Cancelar</a> -->


        <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Nombre Completo</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="staticEmail" name="nombre">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Correo Electronico</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="staticEmail" name="email">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Sexo</label>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="M" name="sexo" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Masculino
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="F" name="sexo" id="flexRadioDefault2">
                    <label class="form-check-label" for="flexRadioDefault2">
                        Femenino
                    </label>
                </div>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">
                Area
            </label>
            <div class="col-sm-10">
                <input type="hidden" name="area" id="areaHidden">
                <select class="form-select" id="area" aria-label="Default select example">
                    <?php if($areas): ?>
                    <?php foreach($areas as $area): ?>
                    <option value="<?=$area[0]?>"><?=$area[1]?></option>
                    <?php endforeach; ?>
                    <?php else: ?>

                    <?php endif; ?>

                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">
                Descripcion
            </label>
            <div class="col-sm-10">
                <textarea class="form-control" id="exampleFormControlTextarea1" name="descripcion" rows="3"></textarea>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="boletin" value="1" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Deseo Recibir Boletin informativo
                    </label>
                </div>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Correo Electronico</label>
            <div class="col-sm-10">
                <?php if($roles): ?>

                <?php foreach($roles as $rol): ?>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="<?=$rol[0]?>" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        <?=$rol[1]?>
                    </label>
                </div>
                <?php endforeach; ?>
                <?php else: ?>

                <?php endif; ?>


            </div>
        </div>
        <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a class="btn btn-danger" href="/Prueba_Nexura/index.php">Cancelar</a>
            </div>

    </form>

</div>

<?php
    require_once("c://xampp/htdocs/Prueba_Nexura/view/head/footer.php");
?>