<?php
$template = 'red.php';
if (isset($_COOKIE['TEMPLATE'])) {
    $template = $_COOKIE['TEMPLATE'];
	echo "Hello world!";
}
include ("/etc/" . $template);
?>