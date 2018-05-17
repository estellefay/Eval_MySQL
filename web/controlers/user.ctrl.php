<?php
function redirect_login() {
	if(!isset($_SESSION['user'])) {
		header('Location: http://192.168.57.10/');
		exit();
	}
}