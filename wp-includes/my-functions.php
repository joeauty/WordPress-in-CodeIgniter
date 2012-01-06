<?php
function get_virtual_user() {
	return preg_replace('/^www\./', '', $_SERVER['SERVER_NAME']);
}
?>
