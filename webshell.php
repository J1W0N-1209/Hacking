<?php
if($_GET['Submit']) {
	$ip = $_GET["ip"];
	if( stristr( php_uname( 's' ), 'Windows NT' ) ) {
		$cmd = shell_exec( 'ping  ' . $ip );
	}
	else {
		$cmd = shell_exec( 'ping  -c 4 ' . $ip );
	}
	echo"<script>alert{$cmd}</script>";
	echo "<pre>{$cmd}</pre>";
}
?>
