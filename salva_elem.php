<?php

      

    require_once 'auth.php';
    if (!$userid = checkAuth()) exit;

     opera();

    function opera() {
        global $dbconfig, $userid;

        $conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']);
        
        $userid = mysqli_real_escape_string($conn, $userid);
        $image = mysqli_real_escape_string($conn, $_POST['immagine']);
        $title = mysqli_real_escape_string($conn, $_POST['titolo']);




       
        $query = "INSERT INTO opera4(user,content) VALUES('$userid',JSON_OBJECT('id','$id','immagine', '$image','titolo', '$title'))";
        error_log($query);
       
        if(mysqli_query($conn, $query) or die(mysqli_error($conn))) {
            echo json_encode(array('ok' => true));
            exit;
        }
        
        mysqli_close($conn);
        echo json_encode(array('ok' => false));
    }
?>