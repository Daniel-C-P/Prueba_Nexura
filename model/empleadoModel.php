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
        public function obtenerAreaEmpleado(){
            $stament = $this->PDO->prepare(
                "SELECT t1.id, t1.nombre, t1.email,t1.sexo, t2.nombre, t1.boletin FROM empleado t1 INNER JOIN areas t2 ON t1.area_id=t2.id"
            );
            return ($stament->execute()) ? $stament->fetchAll() : false ;
        }
    }

?>