<?php
require_once('rsslib.php');
?>
<!DOCTYPE html>
<html lang="fr">
   <head>
      <meta charset="utf-8">
      <title>My Technological Watch</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" href="img/favicon.png">
      <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
   </head>
   <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
         <a href="index.php">
         <img src="img/logo.png" class="img-responsive" alt="">
         </a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNav" style="margin-left: 5%;">
            <ul class="navbar-nav">
               <li class="nav-item">
                  <a class="nav-link" href="index.php">Accueil</a>
               </li>
               <li class="nav-item active">
                  <a class="nav-link" href="veille_techno.php">Recherche d'articles <span class="sr-only">(current)</span></a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="sauvegarde.php">Articles sauvegardés</a>
               </li>
            </ul>
         </div>
      </nav>

      
     <!-- <div id="cse" style="width: 100%;">Loading</div>
<script src="http://www.google.com/jsapi" type="text/javascript"></script>
<script type="text/javascript">
  google.load('search', '1', {language : 'fr'});
  google.setOnLoadCallback(function(){
    var customSearchControl = new google.search.CustomSearchControl('011730044727175604084:afnx0qg_h0e');
    customSearchControl.setResultSetSize(google.search.Search.SMALL_RESULTSET);
    customSearchControl.draw('cse');
  }, true);
</script>
<link rel="stylesheet" href="http://www.google.com/cse/style/look/minimalist.css" type="text/css" /> -->


      <!-- SiteSearch Google <form action="http://www.votresiteinternet.fr/recherche.html" id="cse-search-box"> <div> <input type="hidden" name="cx" value="partner-pub-7251150894597704:nz8345-k1u9" /> <input type="hidden" name="cof" value="FORID:9" /> <input type="hidden" name="ie" value="ISO-8859-1" /> <input name="sitesearch" value="www.votresiteinternet.fr" type="hidden"> <input type="text" name="q" size="31" /> <input type="submit" name="sa" value="Rechercher" /> </div> <script type="text/javascript" src="http://www.google.com/coop/cse/brand?form=cse-search-box&amp;lang=fr"></script> </form> SiteSearch Google -->
      
      <form method="post" action="#">
         <div id="search" class="col-md-3" style="max-width: 300px; margin-bottom: 2%; margin-top: 2%; display: inline-block;">
            <div class="input-group">
               <input type="text" name="search" class="form-control" placeholder="Rechercher un thème...">
               <span class="input-group-btn">
               <button class="btn btn-secondary" name="ok" type="submit" style="margin-top: 20%;"><img class="fas fa-search" src="img/Search Icon White.png" style="width: 15px"></img></button>
               </span>
            </div>
         </div>
      </form>
    <?php
      if(isset($_POST['ok'])){
        echo RSS_Display("https://news.google.com/news/rss/search/section/q/".$_POST['search'], 100);
      } else {
                echo RSS_Display('https://news.google.com/news/rss/search/section/q/xamarin', 30);
      }
    ?>
   </body>
   <style>
      .form-control {
      margin:auto; 
      margin-top:3%;
      }
   </style>
   <script type="text/javascript" src="plugins/jquery.min.js"></script>
   <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</html>