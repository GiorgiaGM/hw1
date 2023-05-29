<?php


    require_once 'auth.php';
    if (!$userid = checkAuth()) exit;

     elimina_opera();

    function elimina_opera() {
        global $dbconfig, $userid;

        $conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']);
        $userid = mysqli_real_escape_string($conn, $userid);
        $id = mysqli_real_escape_string($conn, $_POST['id']);


       $query = "DELETE FROM opera4 WHERE id= $id";
        error_log($query);
       
        if(mysqli_query($conn, $query) or die(mysqli_error($conn))) {
            echo json_encode(array('ok' => true));
            exit;
        }
        
        mysqli_close($conn);
        echo json_encode(array('ok' => false));
    }


?>



    