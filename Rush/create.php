<?php
include("index.php");
$i = 0;
$log[0]['uname'] = $_POST['uname'];
$log[0]['passwd'] = $_POST['passwd'];
if ($log[0]['uname'] != NULL && $log[0]['passwd'] != NULL){
	$log[0]['passwd'] = hash('whirlpool', $log[0]['passwd']);
	if (!file_exists('./data')){
		mkdir('./data');}
	$data = serialize($log);
	if (!file_exists('./data/users') || file_get_contents('./data/users') == NULL){
		file_put_contents('./data/users', $data);
		}
	else{
		$rec = file_get_contents('./data/users');
		$log = unserialize($rec);
		for($key = 0; $log[$key]; $key++){
			if ($log[$key]['uname'] == $_POST['uname']){
					return;
					$i = 1;}
				}
		if ($i == 0){
		$log[$key]['uname'] = $_POST['uname'];
		$log[$key]['passwd'] = hash('whirlpool', $_POST['passwd']);
		$log[$key]['fname'] = $_POST['fname'];
		$log[$key]['lname'] = $_POST['lname'];
		$log[$key]['mail'] = $_POST['mail'];
		$log[$key]['status'] = "none";
		$log = serialize($log);
		file_put_contents('./data/users', $log);
		}
	}
}
else
	return;
?>
