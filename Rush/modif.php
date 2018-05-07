<?php
	session_start();
	include("index.php");

	if ($_POST['newpw'] != NULL){
		$validpwd = 0;
		$request['uname'] = $_SESSION['uname'];
		$request['oldpw'] = $_POST['oldpw'];
		$request['newpw'] = $_POST['newpw'];
		if ($request['uname'] && $request['oldpw'] && $request['newpw']){
			$request['oldpw'] = hash('whirlpool',$_POST['oldpw']);
			$request['newpw'] = hash('whirlpool',$_POST['newpw']);
			$rd = unserialize(file_get_contents('./data/users'));
			for($index = 0; $rd[$index]; $index++){
				if ($rd[$index]['uname'] == $request['uname'] && $rd[$index]['passwd'] == $request['oldpw'])
				{
					$validpwd = 1;
					break ;
				}
			}
		}
		if ($validpwd == 1)
		{
			$rd[$index]['passwd'] = $request['newpw'];
			file_put_contents('./data/users', serialize($rd));
			echo("<script>alert('OK')</script>");
		}
		else
			echo("<script>alert('ERREUR')</script>");
	}
?>

<form action="modif.php" method="post">
	<h1 style="text-align:center">MODIFIER SES INFORMATIONS</h1>
	<p>Ancien Mot de Passe: <input type="text" name="oldpw"
		value=""></p>
	<p>Nouveau Mot de Passe: <input type="text" name="newpw"
		value=""></p>
	<p>Nom: <input type="text" name="fname"
		value="<?php echo $_SESSION['fname'];?>"></p>
	<p>Prénom: <input type="text" name="lname"
		value="<?php echo $_SESSION['lname'];?>"></p>
	<p>Email: <input type="text" name="lname"
		value="<?php echo $_SESSION['mail'];?>"></p>
	<p><input type="submit" value="OK" name="submit"></p>
</form>
</body>
</html>
