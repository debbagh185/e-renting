<?php
	//inisialisation de la session
	session_start();
	//supprimer la session.
	unset($_SESSION['owner-id']);
	unset($_SESSION['owner-name']);

	//ouvrir la page webmestre
	header('Location: login-owner.html');

?>