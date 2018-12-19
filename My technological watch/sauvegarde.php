<?php
   require 'PDO/Function.php';
   
   $message = '';
   setlocale (LC_TIME, 'fr_FR.utf8','fra');
   
     if (isset($_POST['AjoutArticle'])){
   
       $article = array();
       $article['Titre'] = $_POST['Titre'];
       $article['Date'] = $_POST['Date'];
       $article['Provenance'] = $_POST['Provenance'];
       $article['Idee_generale'] = $_POST['Idee_generale'];
       $article['date_dajout'] = (int)date('yyyyy-mm-dd');
       insertArticle($article);
   
       $message = '<div class="alert alert-success alert-dismissible fade show" role="alert">
       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">&times;</span>
       </button>
       L&rsquo;article a été ajouté !
   </div>';
   
   }
   
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
               <li class="nav-item">
                  <a class="nav-link" href="veille_techno.php">Recherche d'articles</a>
               </li>
               <li class="nav-item active">
                  <a class="nav-link" href="sauvegarde.php">Articles sauvegardés <span class="sr-only">(current)</span></a>
               </li>
            </ul>
         </div>
      </nav>
      <?php echo $message; ?>
      <div style="margin: 30px">
      <h1 class="title-page">Articles sauvegardés</h1>
      <a class="link-modal" href="" data-toggle="modal" data-target="#Modal">
        Ajouter un article
      </a>
      <div class="table-responsive" style="margin-top: 1.0rem;">
         <table class="table table-striped">
            <thead>
               <tr>
                  <th scope="col">Date d'ajout</th>
                  <th scope="col">Titre</th>
                  <th scope="col">Date</th>
                  <th scope="col">Provenance</th>
                  <th scope="col">Idées générales</th>
               </tr>
            </thead>
            <tbody>
               <?php
                  $data = selectArticle();
                  foreach ($data as $tab){
                  ?>
               <tr>
                  <td><?php echo $tab['date_dajout'] ?></td>
                  <td><?php echo $tab['Titre'] ?></td>
                  <td><?php echo $tab['Date'] ?></td>
                  <td><a href="<?php echo $tab['Provenance']?>"><?php echo $tab['Provenance']?></a></td>
                  <td><?php echo $tab['idee_generale'] ?></td>
               </tr>
               <?php } ?>
            </tbody>
         </table>
      </div>
      <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="Modalinscription" aria-hidden="true">
         <form action="" method="post" name="AjoutArticle">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h3 id="modal-title" class="modal-title" style="margin-left: 30%;">Ajout d'article</h3>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <div class="form-group">
                     <input type="text" class="form-control" name="Titre" aria-describedby="Titre" placeholder="Titre" style="margin-bottom: 2%;"/>
                     <input type="date" class="form-control" name="Date" placeholder="Date" style="margin-bottom: 2%;"/>
                     <input type="text" class="form-control" name="Provenance" aria-describedby="Provenance" placeholder="Provenance" style="margin-bottom: 2%;"/>
                     <textarea class="form-control" rows="5" name="Idee_generale" id="comment" style="margin-bottom: 2%;">Idées générales</textarea>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="submit" name="AjoutArticle" class="btn btn-primary" style="margin: auto;">Valider</button>
               </div>
            </div>
         </div>
      </div>
   </body>
   <script type="text/javascript" src="plugins/jquery.min.js"></script>
   <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</html>