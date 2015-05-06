<?
	//define the receiver of the email
	
	define('TO_NAME','Austin Barnes');
	define('TO_EMAIL','austin@austinbarnes.net');

	define('TEMPLATE_PATH','template/default.php');
 

	define('SMTP_HOST','mail.austinbarnes.net');
	define('SMTP_USERNAME','austin@austinbarnes.net');
	define('SMTP_PASSWORD','deutsch2');

	define('SUBJECT','Contact from your website');	
	
	// Messages
	define('MSG_INVALID_NAME','Please enter your name.');
	define('MSG_INVALID_EMAIL','Please enter valid e-mail.');
	define('MSG_INVALID_MESSAGE','Please enter your message.');
	define('MSG_SEND_ERROR','Sorry, we can\'t send this message.');

?>