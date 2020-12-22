<?php
    // A simple block of code to force HTTPS (if present) on your web page.
	if (!(isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) || isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https'))
	{
		// If the server supports HTTPS and if the server has the HTTPS protocol enabled and it is fully supported, then the redirect happens.
		$redirect = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; // We make a variable with the link in HTTPS.
		header('HTTP/1.1 301 Moved Permanently'); // We put a header to say that the page has moved permanently to another.
		header('Location: ' . $redirect); // And we change the location of the page to the new page (the HTTPS page) where we need to redirect.
		die(); // Exit from the current page. Use the "die();" function to prevent anti direct extensions/plugins/...
	}
?>