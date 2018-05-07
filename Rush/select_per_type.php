<?php
	include("index.php");
	function select_per_type($prod, $type){
		foreach($prod as $elem => $t){
			if ($t){
				foreach($type as $select){
					if (preg_match($select, $t[1]))
					{
						$res[] = $t;
						break ;
					}
					if (preg_match($select, $t[3]))
					{
						$res[] = $t;
						break ;
					}
					else if (preg_match($select, $t[4]))
					{
						$res[] = $t;
						break ;
					}
					else if (preg_match($select, $t[5]))
					{
						$res[] = $t;
						break ;
					}
				}
			}
		}
		return($res);
	}
	Include("parsing.php");
	$prod = pars();
	if (isset($_GET)){
		$search = explode(' ', $_GET['search']);
		foreach($search as $elem)
			$type[] = "/^" . preg_quote($elem, "/")."/";
	}
	$res = select_per_type($prod, $type);
	if ($res){
		foreach($res as $elem){
			echo ("<form method=\"post\" action=\"cart.php\">");
			echo ("<div class='actif'><img class=article-img src='". $elem[3]  . "'><input type='hidden' name=\"name\" value=\"$elem[1]\">" .$elem[1]."</div>");
			echo ("<span class='info1'><input type='hidden' name=\"price\" value=\"$elem[2]\">".$elem[2]."</span>");
			echo ("<a style='text-decoration:none' href='select_per_type.php?search=" . $elem[4] . "'><input type='hidden' name=\"tag1\" value=\"$elem[3]\"><span class='info2'>".$elem[4]."</span></a>");
			echo ("<a style='text-decoration:none' href='select_per_type.php?search=" . $elem[5] . "'><span class='info2'><input type='hidden' name=\"tag3\" value=\"$elem[5]\">".$elem[5]."</span></a>");
			echo ("<div><button class=\"add\" type=\"submit\" value=\"OK\">Add to cart</button></div>");
			echo ("</form>");
		}
	}
	?>
	</body>
</html>
