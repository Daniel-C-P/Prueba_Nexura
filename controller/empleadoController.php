<?php
    class empleadoController{
        private $model;
        public function __construct()
        {
            require_once("c://xampp/htdocs/Prueba_Nexura/model/empleadoModel.php");
            $this->model = new empleadoModel();
        }
        public function guardar($nombre,$email,$sexo,$area_id,$boletin,$descripcion){
            $id = $this->model->insertar($nombre,$email,$sexo,$area_id,$boletin,$descripcion);
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
        public function delete($id){
            return ($this->model->delete($id)) ? header("Location:index.php") : header("Location:show.php?id=".$id) ;
        }
        public function obtenerColumnas(){
            return ($this->model->obtenerColumnas()) ? $this->model->obtenerColumnas() : false;
        }
    }

?>