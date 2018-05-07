<?php
	function auth($login, $passwd){
		if ($login != NULL && $passwd != NULL){
			$pwd = hash('whirlpool',$passwd);
			if (file_exists('./data') && file_exists('./data/users')
			&& file_get_contents('./data/users') != NULL)
				$rd = unserialize(file_get_contents('./data/users'));
			for($index = 0; $rd[$index]; $index++){
				if ($rd[$index]['uname'] == $login && $rd[$index]['passwd'] == $pwd)
					return(true);
			}
		}
		return(false);
	}

	function info($login){
		if ($login != NULL){
			if (file_exists('./data') && file_exists('./data/users')
			&& file_get_contents('./data/users') != NULL)
				$rd = unserialize(file_get_contents('./data/users'));
			for($index = 0; $rd[$index]; $index++){
				if ($rd[$index]['uname'] == $login)
					return($rd[$index]);
				}
		}
		return(NULL);
	}
?>
