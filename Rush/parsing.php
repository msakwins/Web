<?php
	function pars(){
		$i = 0;
		$j = 0;
		$fd = fopen("data/items.csv", "r");
		while($product[$i] = fgetcsv($fd, 0 ,",")){
				if ($product[$i] != NULL){
					if ((preg_match('/\d+/', $product[$i][0])) && preg_match('/\d+/', $product[$i][2]))
						$i++;
					}

		}
		return($product);
	}

?>
