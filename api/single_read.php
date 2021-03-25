<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    include_once '../config/database.php';
    include_once '../class/contacto.php';

    $database = new Database();
    $db = $database->getConnection();

    $item = new Contacto($db);

    $item->id = isset($_GET['id']) ? $_GET['id'] : die();
  
    $item->getSingleContacto();

    if($item->nombres != null){
        // create array
        $emp_arr = array(
            "id" =>  $item->id,
            "nombres" => $item->nombres,
            "apellidos" => $item->apellidos,
            "telefono" => $item->telefono,
            "email" => $item->email
          
        );
      
        http_response_code(200);
        echo json_encode($emp_arr);
    }
      
    else{
        http_response_code(404);
        echo json_encode("Contacto no encontrado.");
    }
?>