<?php

namespace Models;

use Models\Database;

require_once $_SERVER['DOCUMENT_ROOT'] . '/Vendor/autoload.php';

class Auth
{

    private $conexion;
    public function __construct()
    {
        $database = new Database;
        $this->conexion = $database->getConn();
    }

    public function select($correo)
    {
        $query = "SELECT * FROM usuarios WHERE correo = ?";

        try {
            $stm = $this->conexion->prepare($query);
            $stm->execute([$correo]);

            $rs = $stm->fetch(\PDO::FETCH_ASSOC);

            return $rs;
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function register($correo, $password, $rol_id)
    {
        $query = "INSERT INTO usuarios(`correo`, `password`, `rol_id`) VALUES (?,?,?)";
        
        try {
            $stm = $this->conexion->prepare($query);
            $stm->execute([$correo, $password, $rol_id]);

            return true;
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }
}
 
 