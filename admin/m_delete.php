<?php

require '../core/session.php';
require '../core/config.php';
require '../core/admin-key.php';

		$id = $_GET['id'];
		
		mysql_query("DELETE FROM `cmp_log` WHERE id='$id'")or die(mysql_error());
		// mysql_query("DELETE FROM `view_cmp` WHERE id='$id'")or die(mysql_error());
		header("Location:message.php");

?>
