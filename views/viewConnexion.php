<html>
   <head>
      <title>TUTO PHP</title>
      <meta charset="utf-8">
   </head>
   <body>
<?php

   var_dump($_SESSION);

?>


      <div align="center">
         <h2>Connexion</h2>
         <br /><br />
         <form method="POST" action="">
            <input type="email" name="mailconnect" placeholder="Mail" />
            <input type="password" name="mdpconnect" placeholder="Mot de passe" />
            <br /><br />
            <input type="submit" value="Se connecter !" />
         </form>
         <?php
         if(isset($erreur)) {
            echo '<font color="red">' . $erreur . "</font>";
         }
         ?>
     </div>
		<div align="center">
         <h2>Bienvenue  <?= $_SESSION['pseudo']; ?></h2>
         <br /><br />
         Pseudo = <?= $_SESSION['pseudo']; ?>
         <br />
         Mail = <?= $_SESSION['mail']; ?>
         <br />
         <form action="minichat_post.php "  method="POST">
            <input type="text" name="messages" placeholder="MESSAGE" /><br>

         <div>
               <button type="button" >
                     <input  type="submit" value="envoyer" />
               </button>

         </div>
         </form>
         <?php
         if(isset($_SESSION['id'])) {
         ?>
       
         <?php
         }

            $allmsg = $bdd->Query('SELECT * FROM message ORDER BY ID DESC LIMIT 0,25');
            while($msg = $allmsg->Fetch())
            {
            ?>
            <b><?php echo $msg['userId'] ?> :</b><?php echo $msg['message'] ?> <br />

            <?php
            }
        ?>
      </div>
   </body>
</html>