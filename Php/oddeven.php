#!/usr/bin/php
<?php
function get_nbr()
{
	echo "Entrez un nombre: ";
	$input = fopen('php://stdin', 'r');
	$line = fgets($input);
	if ($line == NULL)
	{
		echo "\n";
		exit();
	}
	$var = trim($line, "\n");
	if (ctype_digit($var) == FALSE)
		echo "'$var' n'est pas un chiffre\n";
	else if ($var % 2 == 0)
		echo "Le chiffre $var est Pair\n";
	else
		echo "Le chiffre $var est Impair\n";
	fclose($input);
}
while (1)
	get_nbr();
?>