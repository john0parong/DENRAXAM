<?php 
    try{
        include('../database.php');

        $username = (isset($_POST['username'])) ? $_POST['username'] : '';
        $password = (isset($_POST['password'])) ? $_POST['password'] : '';
        
        $password = password_hash($password, PASSWORD_BCRYPT, ['cost' => 12]);

        $query = "SELECT * FROM logger WHERE username = :username";
        $statement = $connection->prepare($query);
        $statement->bindParam(':username', $username); 
        $statement->execute();
        $rowCount = $statement->rowCount();

        if($rowCount == 0){
            $query = "INSERT INTO logger(username, password) VALUES (:username, :password)";
            $statement = $connection->prepare($query);
            $statement->bindParam(':username', $username); 
            $statement->bindParam(':password', $password);
            $statement->execute();
            
            $_SESSION['logger_id'] = $last_id;
            echo true;
        }
    }catch(Exception $e){
        echo $e->getMessage();
    }

    die();
?>