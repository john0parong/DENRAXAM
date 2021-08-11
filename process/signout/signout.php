<?php 
    try{
        session_start();
        session_destroy();
        header('Location: ../../index.php');
    }catch(Exception $e){
        echo $e->getMessage();
    }
    die();
?>