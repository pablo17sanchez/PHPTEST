<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    
    include_once '../config/database.php';
    include_once '../class/contacto.php';

    $database = new Database();
    $db = $database->getConnection();

    $items = new Contacto($db);

    $stmt = $items->getContactos();
    $itemCount = $stmt->rowCount();


    echo json_encode($itemCount);

    if($itemCount > 0){
        
        $contactoArr = array();
        $contactoArr["body"] = array();
        $contactoArr["itemCount"] = $itemCount;

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);
            $e = array(
                "id" => $id,
                "nombres" => $nombres,
                "apellidos" => $apellidos,
                "telefono" => $telefono,
                "email" => $email
              
            );

            array_push($contactoArr["body"], $e);
        }
        echo json_encode($contactoArr);
    }

    else{
        http_response_code(404);
        echo json_encode(
            array("message" => "Ningun record encontrado.")
        );
    }
?>