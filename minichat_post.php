<?php
// Effectuer ici la requête qui insère le message
// Puis rediriger vers minichat.php comme ceci :
header('Location: profil.php');
?>


<?php
			$bdd = new PDO('mysql:host=localhost;dbname=minichat;charset=utf8', 'root', '');
		if (isset($_POST['pseudo']) AND isset($_POST['messages']) AND !empty($_POST['pseudo']) AND !empty($_POST['messages']))
		{
			$pseudo = htmlspecialchars($_POST['pseudo']);
			$messages = htmlspecialchars($_POST['messages']);
			$insertmsg = $bdd -> prepare('INSERT INTO user(pseudo, messages) VALUES(?, ?)');
			$insertmsg -> execute(array($pseudo, $messages));
		}
?>