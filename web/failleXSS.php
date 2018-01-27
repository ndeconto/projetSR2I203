<?php session_start(); ?>

<!DOCTYPE html>
<html>
<body>

<?php
if (isset($_SESSION['is_logged']) && $_SESSION['is_logged'] == True) {
	echo "<p>Hello " . $_SESSION['login'] . "</p>";
}
else {
	echo "<p>You must be <a href=login.html>logged in</a> to access this page</p>";
}
?>

<p><a href="register.html">Register</a> a new user to insert evil code!</p>

</body>
</html>