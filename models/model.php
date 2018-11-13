<?php

function co() {
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=espace_membre', 'root', '');
		return $bdd;
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}
}


function connectUser($mail, $mdp) {
	$bdd = co();
	$requser = $bdd->prepare("SELECT * FROM membres WHERE mail = :mail AND motdepasse = :mdp");
	$requser->bindParam(':mail', $mail, PDO::PARAM_STR);
	$requser->bindParam(':mdp', $mdp, PDO::PARAM_STR);
    $requser->execute();
    $requser->rowCount();
    return $requser->rowCount();
}

