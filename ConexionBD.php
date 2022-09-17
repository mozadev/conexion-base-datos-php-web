<?php
class ConexionBD
{
    private $pdo=null;

    public function getConexionBD()
    {
        try
        { $this->pdo = new PDO("mysql:host=localhost;dbname=ajax","root","");
            if($this->pdo)
            {
                echo "Se conecto EXITOSAMENTE!";
                
            }
 
        } catch (PDOException $e){
            echo $e->getMessage();
        }
        return $this->pdo;
    }
} 
?>