<?php
	//inisialisation de la session
	session_start();
	//supprimer la session
	unset($_SESSION['user-group']);
	//ouvrir la page webmestre
	header('Location: login-group.html');

?>