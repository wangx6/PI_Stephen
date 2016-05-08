<?php
include_once '../sys/core/init.inc.php';
include_once '../sys/config/db-cred.inc.php';
foreach( $C as $name => $val ){ define($name, $val); }
$action = array(
	'event_edit' => array(
		'object' => 'Center',
		'method' => 'processForm',
		'header' => 'Location:page.php?page=calendar'
		)
	);
if ( $_POST['token'] == $_SESSION['token'] && isset($action[$_POST['action']]) )
{
	$use_array = $action[$_POST['action']];
	$obj = new $use_array['object']($db);
	if ( TRUE === $msg=$obj->$use_array['method']() )
	{
		header($use_array['header']);
		exit;
	}
	else{ die ($msg); }
}
else
{
	header("Location:index.php");
	exit;
}

?>