<?php 
    require_once 'auth.php';
    if (!$userid = checkAuth()) {
        header("Location: login.php");
        exit;
    }
?>

<html>

  <?php 
    // Carico le informazioni dell'utente loggato per visualizzarle nella sidebar (mobile)
    $conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']);
    $userid = mysqli_real_escape_string($conn, $userid);
    $query = "SELECT * FROM users WHERE id = $userid";
    $res_1 = mysqli_query($conn, $query);
    $userinfo = mysqli_fetch_assoc($res_1);   
  ?>

  <head>
    <title>Art</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="home.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="home.js" defer="true"></script>
  </head>
  
  <body>
    <div id="overlay" class="hidden">
    </div>
    <header>
      <nav>
        <div id="logo">
          Art
        </div>
        <div id="links">
          <a href='profile.php'>PROFILO</a>
          <a href ='new_post.php' class='button'>NEW POST</a>
          <a href='logout.php' class='button'>LOGOUT</a>
        </div>
        <div id="menu">
          <div></div>
          <div></div>
          <div></div>
        </div>
      </nav>
      <div class="userInfo">
          <div class="avatar" style="background-image: url(<?php echo $userinfo['propic'] == null ? "assets/default_avatar.png" : $userinfo['propic'] ?>)">
          </div>
          <h1><?php echo $userinfo['name']." ".$userinfo['surname'] ?></h1>
      </div>     
      <h1>Alla scoperta dell'arte</h1>
      <a class="subtitle">
        Con Art puoi condividere opere ed eventi nel mondo
      </a>
    </header>
    <section id="new_post">
      
        
        
          
   
          
        
     <div id="modale" class="hidden"></div>
      
    </section>

    
    <section id="new_event">
      
        
        
          
   
          
        
     <div id="modale" class="hidden"></div>
      
    </section>



   
    <footer>
      <nav>
        <div class="footer-container">
          <div class="footer-col">
            <h1>Giorgia Grazia Mucciarella O46002075</h1>
          </div>
          
          
          
        </div>
      </nav>
    </footer>
  </body>
  </html>