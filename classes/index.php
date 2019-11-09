<body>
<?php
$g = new \Google\Authenticator\GoogleAuthenticator();
$salt = '7WAO342QFANY6IKBF7L7SWEUU79WL3VMT920VB5NQMW';
$secret = $username.$salt;echo '<img src="'.$g->getURL($username, 'example.com', $secret).'" />';
?>
</body>