<?php
require_once('db.php');
include_once('header.php');

$page = 'home';
if(isset($_GET['page']) && !empty($_GET['page'])) {
	$page = $_GET['page'];
}

if (file_exists($page . '.php')) {
	include($page . '.php');
} else {
	echo 'Error 404';
}

include_once('footer.php');