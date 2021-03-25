<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: PUT");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    include_once '../config/database.php';
    include_once '../class/contacto.php';

    $database = new Database();
    $db = $database->getConnection();

    $item = new Contacto($db);

    $data = json_decode(file_get_contents("php://input"));

    $item->nombres = $data->nombres;
    $item->apellidos = $data->apellidos;
    $item->telefono = $data->telefono;
    $item->email = $data->email;
   
    
    if($item->createContacto()){
        echo json_encode("Creado.");
    } else{
        echo json_encode("No pudo ser creado.");
    }
?>