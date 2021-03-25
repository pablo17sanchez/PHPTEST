<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: DELETE");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once '../config/database.php';
include_once '../class/contacto.php';

$database = new Database();
$db = $database->getConnection();

$item = new Contacto($db);

$data = json_decode(file_get_contents("php://input"));



if (!isset($data->id)) {
    echo json_encode("El campo id es requerido.");
} else {
    $item->id = $data->id;

    if ($item->deleteContacto()) {
        echo json_encode("Contacto borrado.");
    } else {
        echo json_encode("El contacto no pudo ser borrado");
    }
}
