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
    <link rel="stylesheet" href="new_post.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="new_post.js" defer="true"></script>

        <title>Art - <?php echo $userinfo['name']." ".$userinfo['surname'] ?></title>
    </head>

    <body>
    <div id="overlay" class="hidden">
    </div>
        <header>
            <nav>
                <div class="nav-container">
                    <div id="logo">
                         Art
                    </div>
                    <div id="links">
                        <a href='home.php'>HOME</a>
                        <a href='logout.php' class='button'>LOGOUT</a>
                    </div>
                    <div id="menu">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
               
                    

            </nav>
        </header>



    <section id="search">
      <form autocomplete="off">
        <h1>Clicca sull'immagine per condividere un nuovo post</h1>
        </br>
        </br>
        <h1>Cerca contenuti dei musei e delle gallerie d'Europa inserendo il nome dell'artista</h1>
        <div class="search">
          <label for='search'>Cerca</label>
          <input type='text' name="search" class="searchBar" placeholder="Es.Caravaggio">
          <input type="submit" value="Cerca">
        </div>
      </form>
      
    </section>
    <section class="container">

            <div id="results">
                
            
            </div>

           
    </section>

    



    <section id="search_event">
      <form autocomplete="off">
        <h1>Cerca eventi inserendo la nazione</h1>
        <div class="search">
          <label for='search'>Cerca</label>
          <input type='text' name="search" class="searchBar" placeholder="Es.US">
          <input type="submit" value="Cerca">
        </div>
      </form>
      
    </section>





    <section class ="container2">

        <div id="result_event">


        </div>


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

