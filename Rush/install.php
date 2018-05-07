<?php
	function create_csv_ex(){
		if (!file_exists('./data')){
			mkdir('./data');}
		if (!file_exists('./data/items.csv') || file_get_contents('./data/items.csv') == NULL){
			$data = "0,item1,1.50,tag1,tag2,tag3\n1,item2,2.50,tag1,tag2,tag3\n2,item3,0.50,tag0,,";
			file_put_contents('./data/items.csv', $data);}
		if (!file_exists('./data/users') || file_get_contents('./data/users') == NULL){
			$user[0]['uname'] = "myang";
			$user[0]['passwd'] = hash('whirlpool',"abcd");
			$user[0]['fname'] = "magalie";
			$user[0]['lname'] = "yang";
			$user[0]['mail'] = "myang@student.42.fr";
			$user[0]['status'] = "admin";
			$user[1]['uname'] = "msakwins";
			$user[1]['passwd'] = hash('whirlpool',"abcd");
			$user[1]['status'] = "admin";
			file_put_contents("./data/users", serialize($user));
		}
		return(true);
	}
	if (create_csv_ex())
	{
		header("HTTP/1.0 404 Not Found");
		exit;
	}
?>
