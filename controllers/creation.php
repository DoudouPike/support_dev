<?php
	if (empty($_SESSION)) {
		require('controllers/404.php');
	}
	else{
		require('views/creation.phtml');
	}
?>