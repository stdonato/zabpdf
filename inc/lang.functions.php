<?php

//functions from zabbix
require_once '../include/config.inc.php';

function get_userid($session) {

	$dbUser = DBselect( 'SELECT sessionid, userid, lastaccess FROM sessions WHERE sessionid ="'.$session.'"');
	$dbID = DBFetch($dbUser);	
	$userid = $dbID['userid'];

	return $userid;
}


function get_user_lang($userid) {

	$dbUser = DBselect( 'SELECT lang FROM users WHERE userid ="'.$userid.'"');
	$dbLang = DBFetch($dbUser);	
	
	if($dbLang['lang'] == 'pt_BR' ) {
		$userLang = $dbLang['lang'];
	}
	else {
		$userLang = 'en_US';
	}
	
	return $userLang;
}

?>