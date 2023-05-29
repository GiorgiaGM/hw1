<?php


    require_once 'auth.php';
    if (!$userid = checkAuth()) exit;

    evento();

    function evento() {
        global $dbconfig, $userid;

        $conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']);
        # Costruisco la query
        $userid = mysqli_real_escape_string($conn, $userid);
        $image = mysqli_real_escape_string($conn, $_POST['immagine']);
        $nome = mysqli_real_escape_string($conn, $_POST['nome']);
        $data = mysqli_real_escape_string($conn, $_POST['data']);
        $luogo = mysqli_real_escape_string($conn, $_POST['luogo']);



        $query = "INSERT INTO evento(user,content) VALUES('$userid',JSON_OBJECT('immagine','$image','nome','$nome','data','$data','luogo', '$luogo'))";
        error_log($query);
   
        if(mysqli_query($conn, $query) or die(mysqli_error($conn))) {
            echo json_encode(array('ok' => true));
            exit;
        }
        
        mysqli_close($conn);
        echo json_encode(array('ok' => false));
    }
?>