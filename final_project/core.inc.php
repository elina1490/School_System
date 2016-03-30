<?php
// location of the form

ob_start();
session_start();
$current_file = $_SERVER['SCRIPT_NAME'];

function loggedin() {

		if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
		    return true;
	}   else {
	        return false;
	}
	}
function confirm_logged_in() {
		if (!loggedin()) {
			redirect_to("index.php");
		}
	}

?>