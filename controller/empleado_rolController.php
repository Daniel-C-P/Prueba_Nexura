<?php
    class empleado_rolController{
        private $model;
        public function __construct()
        {
            require_once("c://xampp/htdocs/Prueba_Nexura/model/empleado_rolModel.php");
            $this->model = new empleado_rolModel();
        }
        public function guardar($empledo_id,$rol_id){
            $id = $this->model->insertar($empledo_id,$rol_id);
            return ($id!=false) ? $id : header("Location:create.php");
        }
        public function show($id){
            return ($this->model->show($id) != false) ? $this->model->show($id) : header("Location:index.php");
        }
        public function index(){
            return ($this->model->index()) ? $this->model->index() : false;
        }
        public function update($id, $nombre){
            return ($this->model->update($id,$nombre) != false) ? header("Location:show.php?id=".$id) : header("Location:index.php");
        }

        public function obtenerColumnas(){
            return ($this->model->obtenerColumnas()) ? $this->model->obtenerColumnas() : false;
        }
    }

?>