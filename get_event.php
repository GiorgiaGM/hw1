<?php
      require_once 'auth.php';
      if (!$userid = checkAuth()) exit;
      
      $conn = mysqli_connect("localhost", "root", "", "hw1");
    
      $evento = array();
     
      global $userid;
      $userid = mysqli_real_escape_string($conn, $userid);
      $res = mysqli_query($conn, "SELECT * FROM evento where user=$userid");
      while($row = mysqli_fetch_assoc($res))
      {
        $row["content"] = json_decode($row["content"]);    
        $evento[] = $row;
      }
      
      mysqli_free_result($res);
      mysqli_close($conn);
      
      echo json_encode($evento);

?>