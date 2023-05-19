<?php
    class db{
        private $host= "localhost";
        private $dbname="prueba_tecnica_dev";
        private $user="root";
        private $password="";
        public function conexion(){
            try{
                $PDO = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname,$this->user,$this->password);
                return $PDO;
            }catch(PDOException $e){
                return $e->getMessage();
            }
        }
        function obtenerColumnasDeUnaTabla($nombreDeLaTabla)
        {
         try {
            $base_de_datos = new PDO("mysql:host=$host;dbname=$dbname",
            $user, $password);
            } catch (Exception $e) {
                echo "Ocurrió algo con la base de datos: " . $e->getMessage();
            }
        return $base_de_datos
            ->query("SELECT COLUMN_NAME AS columna, COLUMN_TYPE AS tipo
            FROM information_schema.columns WHERE
            table_schema = '$dbname'
            AND table_name = '$nombreDeLaTabla'")
            ->fetchAll(PDO::FETCH_OBJ);
        }
    }

?>