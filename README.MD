penser � raconter dans le rapport :
 - cr�ation du fichier de mot de passe : htpasswd -c path/to/the/password/file username
 - en cas de bug, on r�cup�re (sous wamp) les logs d'erreur avec: tail logs/apache_error.log
 - main config file: wamp64/adminer.conf
	- dedans, pour autoriser les .htaccess � override la config, mettre un 
		<Directory "c:/Users/Nicolas/wamp64/www/"""
			AllowOverride AuthConfig
		</Directory>
	- ne pas oublier de reboot !
	
- pour la faille XSS :
	exemple de username:  <script>alert("Your cookies " + document.cookie + " have been sent to www.evil.com");</script>
	