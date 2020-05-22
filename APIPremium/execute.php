<?php
if (isset($_GET['action'])) {
	if ($_GET['action'] == "hwid")
		echo "BFEBFBFF000306D436CD4E8A";
	if ($_GET['action'] == "accessAccount")
		echo "OK:LOGGED_IN";
	if ($_GET['action'] == "isPremium")
		echo "1";
	if ($_GET['action'] == "GETIP")
		echo "68.45.159.116";
	if ($_GET['action'] == "IP")
		echo "OK_APPROVED";
} else {
		echo "ERROR";
}
?>