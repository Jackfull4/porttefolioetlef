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
               <li class="nav-item active">
                  <a class="nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="veille_techno.php">Recherche d'articles</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="sauvegarde.php">Articles sauvegardés</a>
               </li>
            </ul>
         </div>
      </nav>
      <video autoplay loop poster="polina.jpg" id="bgvid">
         <source src="mp4/camera.mp4" type="video/mp4">
      </video>
      <h1 style="color: white; text-align: center; margin-top: 20%; font-size: 300%;">MA VEILLE TEHNOLOGIQUE</h1>
      <h1 style="color: white; text-align: center; margin-top: 2%; font-size: 250%;">Loïc Duhamel</h1>
   </body>
   <style>
      video#bgvid {
      position: fixed; right: 0; bottom: 0;
      min-width: 100%; min-height: 100%;
      width: auto; height: auto; z-index: -100;
      background: url(polina.jpg) no-repeat;
      background-size: cover;
      }
   </style>
   <script type="text/javascript" src="plugins/jquery.min.js"></script>
   <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</html>