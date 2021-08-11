<?php 
    try{
        include('../database.php');

        $username = (isset($_POST['username'])) ? $_POST['username'] : '';
        $password = (isset($_POST['password'])) ? $_POST['password'] : '';
        
        $query = "SELECT * FROM logger WHERE username = :username";
        $statement = $connection->prepare($query);
        $statement->bindParam(':username', $username); 
        $statement->execute();

        $data = $statement->fetchAll(PDO::FETCH_ASSOC);
        foreach($data as $row){
            if(password_verify($password, $row['password'])){
                $_SESSION['logger_id'] = $row['id'];
                echo true;
            }
        }
    }catch(Exception $e){
        echo $e->getMessage();
    }

    die();
?>