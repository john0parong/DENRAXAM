<?php
    try{
        include('../database.php');
        session_start();
        $firstname = (isset($_POST['firstname'])) ? $_POST['firstname'] : '';
        $lastname = (isset($_POST['lastname'])) ? $_POST['lastname'] : '';
        $isdeleted = (isset($_POST['isdeleted'])) ? $_POST['isdeleted'] : '';
        $isactive = (isset($_POST['isactive'])) ? $_POST['isactive'] : '';
        $firstname = removeSpecialChars($firstname);
        $lastname = removeSpecialChars($lastname);
        $isdeleted = removeSpecialChars($isdeleted);
        $isactive = removeSpecialChars($isactive);
        
        $option = (isset($_POST['option'])) ? $_POST['option'] : '';
        $id = (isset($_POST['id'])) ? $_POST['id'] : '';
        switch($option){
            case 1:
                $query = "SELECT * FROM employee WHERE isdeleted = 0";
                $statement = $connection->prepare($query);
                $statement->execute();
                $data = $statement->fetchAll(PDO::FETCH_ASSOC);
                echo json_encode($data, JSON_UNESCAPED_UNICODE);
                break;

            case 2:
                $isdeleted = 0;
                $isactive = 1;

                $query = "INSERT INTO employee (firstname, lastname, isactive, isdeleted) VALUES 
                        (:firstname, :lastname, :isactive, :isdeleted)";
                $statement = $connection->prepare($query);
                $statement->bindParam(':firstname', $firstname);
                $statement->bindParam(':lastname', $lastname);
                $statement->bindParam(':isactive', $isactive);
                $statement->bindParam(':isdeleted', $isdeleted);
                $statement->execute();
                break;
            
            case 3:
                $query = "UPDATE employee SET firstname = :firstname, 
                            lastname = :lastname WHERE id = :id";
                $statement = $connection->prepare($query);
                $statement->bindParam(':firstname', $firstname); 
                $statement->bindParam(':lastname', $lastname); 
                $statement->bindParam(':id', $id); 
                $statement->execute();
                break;

            case 4:
                $query = "SELECT * FROM employee WHERE id = :id";
                $statement = $connection->prepare($query);
                $statement->bindParam(':id', $id); 
                $statement->execute();
                $data = $statement->fetchAll(PDO::FETCH_ASSOC);
                echo json_encode($data, JSON_UNESCAPED_UNICODE);
                break;

            case 5:
                $isdeleted = 1;

                $query = "UPDATE employee SET isdeleted = :isdeleted WHERE id = :id";
                $statement = $connection->prepare($query);
                $statement->bindParam(':isdeleted', $isdeleted); 
                $statement->bindParam(':id', $id); 
                $statement->execute();
                break;
        }
    }catch(Exception $e){
        echo $e->getMessage();
    }

    die();

    function removeSpecialChars($string) {
        return preg_replace('/[^A-Za-z0-9\-]/', ' ', $string);
     }
?>