<?php

namespace Controller;

use Models\Cliente;
use Models\Usuario;

require_once $_SERVER['DOCUMENT_ROOT'] . '/Vendor/autoload.php';

class ClienteController
{
    //llamar todos los datos para cargar la tabla
    public function index()
    {
        $clientes = new Cliente;

        $data = $clientes->all();

        return $data;
    }

    // Mostrar un registro de la tabla
    public function show() // Omar
    {
    }

    // actializar un registro
    public function update() // David
    {
        $id = $_POST['id'];
        $correo = $_POST['correo'];
        $hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $rol_id = $_POST['rol_id'];

        $cliente = new Usuario;
        $cliente->update($id, $correo, $hash, $rol_id);
    }

    // Eliminar un registro de la tabla
    public function destroy() //Jairo
    {
    }
}
