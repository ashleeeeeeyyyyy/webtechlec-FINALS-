<?php
	session_start();

	if (!isset($_SESSION['wisher'])) {
		header('Location: index.php');
		return;
	}
