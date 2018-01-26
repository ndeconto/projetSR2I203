<!DOCTYPE html>
<?php
session_start();
if (!isset($_SESSION['count'])) {
  $_SESSION['count'] = 0;
} else {
  $_SESSION['count']++;
}

$cookie_name = "user";
$cookie_value = "Timon est moche";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>
<body>

<?php
echo "You access this page for the ". $_SESSION['count']. "th time<br><br>";
//echo htmlspecialchars(SID); ---------> voir la fonction htmlspecialchars
if(!isset($_COOKIE[$cookie_name])) {
     echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
     echo "Cookie '" . $cookie_name . "' is set!<br>";
     echo "Value is: " . $_COOKIE[$cookie_name];
	 
	 echo "<br>deleting cookie...";
	 setcookie($cookie_name, $cookie_value, time() - 100, "/");
}
?>

<p><strong>Note:</strong> You might have to reload the page to see the value of the cookie.</p>

</body>
</html>