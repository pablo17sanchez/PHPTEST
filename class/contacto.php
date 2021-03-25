<?php
class Contacto
{

    // Connection
    private $conn;

    // Table
    private $db_table = "contacto";

    // Columns
    public $id;
    public $nombres;
    public $apellidos;
    public $telefono;
    public $email;

    // Db connection
    public function __construct($db)
    {
        $this->conn = $db;
    }




   /* public function validateImput($imput)
    {

      echo !isset($imput) || !empty($imput);

        return !isset($imput) || !empty($imput);
    }*/
    
    // GET ALL
    public function getContactos()
    {
        $sqlQuery = "SELECT id, nombres, apellidos, telefono, email  FROM " . $this->db_table . "";
        $stmt = $this->conn->prepare($sqlQuery);
        $stmt->execute();
        return $stmt;
    }

    // CREATE
    public function createContacto()
    {
        $sqlQuery = "INSERT INTO
                        " . $this->db_table . "
                    SET
                        Nombres = :Nombres, 
                        Apellidos = :Apellidos, 
                        Telefono = :Telefono, 
                        email = :email";

        $stmt = $this->conn->prepare($sqlQuery);

        // sanitize
        $this->nombres = htmlspecialchars(strip_tags($this->nombres));
        $this->apellidos = htmlspecialchars(strip_tags($this->apellidos));
        $this->telefono = htmlspecialchars(strip_tags($this->telefono));
        $this->email = htmlspecialchars(strip_tags($this->email));


        // bind data
        $stmt->bindParam(":Nombres", $this->nombres);
        $stmt->bindParam(":Apellidos", $this->apellidos);
        $stmt->bindParam(":Telefono", $this->telefono);
        $stmt->bindParam(":email", $this->email);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    // GET ONE
    public function getSingleContacto()
    {
        $sqlQuery = "SELECT
                        id, 
                        Nombres, 
                        Apellidos, 
                        Telefono, 
                        email
                     
                      FROM
                        " . $this->db_table . "
                    WHERE 
                       id = ?
                    LIMIT 0,1";

        $stmt = $this->conn->prepare($sqlQuery);

        $stmt->bindParam(1, $this->id);

        $stmt->execute();

        $dataRow = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->nombres = $dataRow['Nombres'];
        $this->apellidos = $dataRow['Apellidos'];
        $this->telefono = $dataRow['Telefono'];
        $this->email = $dataRow['email'];
    }

    // UPDATE
    public function updateContacto()
    {
        $sqlQuery = "UPDATE
                        " . $this->db_table . "
                    SET
                       Nombres = :nombres, 
                       Apellidos = :apellidos, 
                       Telefono = :telefono, 
                        email = :email
                      
                    WHERE 
                        id = :id";

        $stmt = $this->conn->prepare($sqlQuery);

        $this->nombres = htmlspecialchars(strip_tags($this->nombres));
        $this->apellidos = htmlspecialchars(strip_tags($this->apellidos));
        $this->telefono = htmlspecialchars(strip_tags($this->telefono));
        $this->email = htmlspecialchars(strip_tags($this->email));
        $this->id = htmlspecialchars(strip_tags($this->id));

        // bind data
        $stmt->bindParam(":nombres", $this->nombres);
        $stmt->bindParam(":apellidos", $this->apellidos);
        $stmt->bindParam(":telefono", $this->telefono);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":id", $this->id);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    // DELETE
    function deleteContacto()
    {
        $sqlQuery = "DELETE FROM " . $this->db_table . " WHERE id = ?";
        $stmt = $this->conn->prepare($sqlQuery);

        $this->id = htmlspecialchars(strip_tags($this->id));

        $stmt->bindParam(1, $this->id);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
}
