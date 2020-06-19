<?php
	echo "Hello world!";
$template = 'red.php';
if (isset($_COOKIE['TEMPLATE'])) {
    $template = $_COOKIE['TEMPLATE'];
}
include ("/etc/" . $template);
?>