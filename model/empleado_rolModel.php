<?php
    class empleado_rolModel{
        private $PDO;
        public function __construct()
        {
            require_once("c://xampp/htdocs/Prueba_Nexura/config/db.php");
            $con = new db();
            $this->PDO = $con->conexion();
        }
        public function insertar($empledo_id,$rol_id){
            $stament = $this->PDO->prepare("INSERT INTO empleado_rol VALUES(:empledo_id,:rol_id)");
            $stament->bindParam(":empledo_id",$empledo_id);
            $stament->bindParam(":rol_id",$rol_id);
            return ($stament->execute()) ? $this->PDO->lastInsertId() : false ;

        }
        public function show($id){
            $stament = $this->PDO->prepare("SELECT * FROM empleado_rol where id = :id limit 1");
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? $stament->fetch() : false ;
        }
        public function index(){
            $stament = $this->PDO->prepare("SELECT * FROM empleado_rol");
            return ($stament->execute()) ? $stament->fetchAll() : false;
        }
        public function update($id,$nombre){
            $stament = $this->PDO->prepare("UPDATE empleado_rol SET nombre = :nombre WHERE id = :id");
            $stament->bindParam(":nombre",$nombre);
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? $id : false;
        }
        public function delete($id){
            $stament = $this->PDO->prepare("DELETE FROM empleado_rol WHERE id = :id");
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? true : false;
        }
        public function obtenerColumnas(){
            $stament = $this->PDO->prepare(
            "SELECT COLUMN_NAME AS columna, COLUMN_TYPE AS tipo
            FROM information_schema.columns WHERE
            table_schema = 'prueba_tecnica_dev'
            AND table_name = 'empleado_rol'"
            );
            return ($stament->execute()) ? $stament->fetchAll(PDO::FETCH_OBJ) : false ;
        }
    }

?>