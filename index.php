<?php

session_start();

require('models/model.php');


$erreur = "";
if(isset($_POST['formconnexion'])) {
      $userexist = connectUser($_POST['mailconnect'], $_POST['mdpconnect']);
      if($userexist == 1) {
         $userinfo = $requser->fetch();
         $_SESSION['id'] = $userinfo['id'];
         $_SESSION['pseudo'] = $userinfo['pseudo'];
         $_SESSION['mail'] = $userinfo['mail'];
         header("Location: profil.php?id=".$_SESSION['id']);
      } else {
         $erreur = "Mauvais mail ou mot de passe !";
      }
}


require('views/viewConnexion.php');



/*

$bdd = new PDO('mysql:host=localhost;dbname=espace_membre', 'root', '');

if(isset($_SESSION['id'])) {
   $getid = intval($_SESSION['id']);
   $requser = $bdd->prepare('SELECT * FROM membres WHERE id = ?');
   $requser->execute(array($getid));
   $userinfo = $requser->fetch();
?>







      
        <br />
         <a href="editionprofil.php">Editer mon profil</a>
         <a href="deconnexion.php">Se déconnecter</a>
   </body>
</html>
<?php   
}
?>


*/