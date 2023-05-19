<?php
    class empleadoModel{
        private $PDO;
        public function __construct()
        {
            require_once("c://xampp/htdocs/Prueba_Nexura/config/db.php");
            $con = new db();
            $this->PDO = $con->conexion();
        }
        public function insertar($nombre,$email,$sexo,$area_id,$boletin,$descripcion){
            $stament = $this->PDO->prepare("INSERT INTO empleado VALUES(null,:nombre,:email,:sexo,:area_id,:boletin,:descripcion)");
            $stament->bindParam(":nombre",$nombre);
            $stament->bindParam(":email",$email);
            $stament->bindParam(":sexo",$sexo);
            $stament->bindParam(":area_id",$area_id);
            $stament->bindParam(":boletin",$boletin);
            $stament->bindParam(":descripcion",$descripcion);
            return ($stament->execute()) ? $this->PDO->lastInsertId() : false ;

        }
        public function show($id){
            $stament = $this->PDO->prepare("SELECT * FROM empleado where id = :id limit 1");
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? $stament->fetch() : false ;
        }
        public function index(){
            $stament = $this->PDO->prepare("SELECT * FROM empleado");
            return ($stament->execute()) ? $stament->fetchAll() : false;
        }
        public function update($id,$nombre){
            $stament = $this->PDO->prepare("UPDATE empleado SET nombre = :nombre WHERE id = :id");
            $stament->bindParam(":nombre",$nombre);
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? $id : false;
        }
        public function delete($id){
            $stament = $this->PDO->prepare("DELETE FROM empleado WHERE id = :id");
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? true : false;
        }
        public function obtenerColumnas(){
            $stament = $this->PDO->prepare(
            "SELECT COLUMN_NAME AS columna, COLUMN_TYPE AS tipo
            FROM information_schema.columns WHERE
            table_schema = 'prueba_tecnica_dev'
            AND table_name = 'empleado'"
            );
            return ($stament->execute()) ? $stament->fetchAll(PDO::FETCH_OBJ) : false ;
        }
    }

?>