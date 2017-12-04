<?php 

	include_once 'session.php';

	$session->logout();
	header("Location: ../partner_login.php");

?>