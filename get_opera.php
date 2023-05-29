<?php
      require_once 'auth.php';
      if (!$userid = checkAuth()) exit;
      // Connessione al database
      $conn = mysqli_connect("localhost", "root", "", "hw1");
    
      $opera = array();
      // Leggi eventi
      global $userid;
      $userid = mysqli_real_escape_string($conn, $userid);
      $res = mysqli_query($conn, "SELECT * FROM opera4 where user=$userid");
      while($row = mysqli_fetch_assoc($res))
      {
        $row["content"] = json_decode($row["content"]);    
        $opera[] = $row;
      }
      // Chiudi
      mysqli_free_result($res);
      mysqli_close($conn);
      // Ritorna
      echo json_encode($opera);

?>