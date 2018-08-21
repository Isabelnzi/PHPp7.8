<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>Exercice8</title>
</head>
<body>
    <?php
     //Si option GET , l'empty = rien afficher.
  if(empty($_GET)){
    ?>
    <!--Création d'un formulaire qui redirige vers la page avec la méthode GET-->
    <form action="index.php" method="GET">
      <select name="civility">
        <option value="Mr">Mr</option>
        <option value="Mrs">Mme</option>
      </select>
      <p><label for="firstName">Prénom :</label><input type="text" name="firstName" id="firstName" /><br/></p>
      <p><label for="lastName">Nom :</label><input type="text" name="lastName" id="lastName" /></p>
      <p><label for="file">file: </label><input type="file" name="myfile"/>
      <input type="submit" />
    </form>
    <?php
 
    //on récupère et on écrit les valeurs
    if(isset($_GET['civility']) && isset($_GET['firstName']) && isset($_GET['lastName'])){
      echo $_GET['civility'] . ' ' . $_GET['firstName'] . ' ' . $_GET['lastName'];
     }
     if(isset($_GET['file'])){
         echo strtolower(pathinfo($_GET['file'],PATHINFO_FILENAME) && strtolower(pathinfo($_GET['file'],PATHINFO_EXTENSION)));
        //verification sur la nature de l'extension de fichier
         if ($fileExtension == 'pdf'){
          echo strtolower(pathinfo($_GET['file'],PATHINFO_FILENAME)) . ' & ' . strtolower(pathinfo($_GET['file'],PATHINFO_EXTENSION));
          //Récupération des information sur le fichier.
        }
         
     } else{
          echo 'Le fichier n\'est pas en format PDF';
          //Si le fichier n'est pas en format PDF , il l'indique.
        }
    }
    ?>
</body>
</html>