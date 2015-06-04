<?php
include_once('../config/init.php');
include_once ($BASE_DIR . '/database/db_util.php');

function search() {
	global $BASE_DIR;
	$pattern="'%" . $_GET['usersearch'] . "%'";
	$send="";
	$result=getUserByPattern($pattern);
	if($result==-1){
		$send="Não foram encontrados matches.";
	}
	else{

		$res=array();

		foreach($result as $row){
			$temp=array();

			foreach ($row as $col) {
				$temp[]=$col;
			}
			$res[]=$temp;

		}
	$send = json_encode($res);
	}
	
	echo $send;
}


search ();


?>

