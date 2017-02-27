<?php
ob_start();
session_start();

require_once("db.php");
date_default_timezone_set('UTC');

$BasicHURL=str_replace('manage.php','',$_SERVER['PHP_SELF']);
$HURL="http://".$_SERVER['HTTP_HOST'].$BasicHURL;

if (isset($_SERVER['QUERY_STRING']) && !empty($_SERVER['QUERY_STRING'])) {
	$exp_data = explode("=",$_SERVER['QUERY_STRING']);
	$p = $exp_data[1];
}

if(!empty($p) && substr($p, -1)=='/'){
	$p_data = explode('/',$p);
	$p = $p_data[0];
}
	
	if (file_exists("action/".$p.".php") === true) {
            include("action/".$p.".php");
        } else {
        	include("view/404.php");
        }

?>