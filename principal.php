<?php
require_once 'ConexionBD.php';
class conexion
{ public function ListarPersona()
    { try
        {
    $objc = new ConexionBD();
    $pdo= $objc->getConexionBD(); //obtengo la conexion
    $rs = $pdo->query('select * from persona;');

    $lista = array();
    while($fila = $rs->fetch())
    { $lista[] = $fila;

    }
}catch (Exception $ex)
{

}return $lista;
    }
}
$objPrincipal = new conexion();
$lista = $objPrincipal->ListarPersona();
foreach ($lista as $registro)
{echo "<br>".$registro["CODPERSO"]." ".$registro["NOMBPERSO"]."";

}


?>