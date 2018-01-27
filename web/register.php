<?php
session_start();

$success = False;
if ($_POST['password'] == $_POST['password2']) {
	$_SESSION['login'] = $_POST['login'];
	$_SESSION['password'] = $_POST['password'];
	$_SESSION['is_logged'] = True;
	$success = True;
}
?>


<!DOCTYPE html>
<html>
<body>

<?php
if ($success) {
	echo "<p>You have been registered successfully. <a href='login.html'>Try to log in!</a></p>";
} else {
	echo "<p>Registration failed. Please <a href='register.html'>retry</a></p>";
}
?>

</body>
</html>