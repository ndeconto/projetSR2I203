<?php
session_start();

$secret_ressource = "./secret2/secret2.html";

if (isset($_SESSION['is_logged']) && $_SESSION['is_logged'] == True) {
	require($secret_ressource);
}
else if (isset($_SESSION['login']) && isset($_SESSION['password']) 
		&& $_SESSION['login'] == $_POST['login'] 
		&& $_SESSION['password'] == $_POST['password']) {
	$_SESSION['is_logged'] = True;
	require($secret_ressource);
} else {
  $_SESSION['is_logged'] = False;
  require("login.html");
}

?>