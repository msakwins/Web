#!/usr/bin/php
<?
if ($argc != 4)
	echo "Incorrect Parameters\n";
else
{
    while ($i <= $argc)
    {
        $argv[$i] = trim($argv[$i]);
        $i++;
    }
	if ($argv[2] == "+")
		print ($argv[1] + $argv[3]);
	if ($argv[2] == "-")
		print ($argv[1] - $argv[3]);
	if ($argv[2] == "*")
		print ($argv[1] * $argv[3]);
	if ($argv[2] == "/")
		print ($argv[1] / $argv[3]);
	if ($argv[2] == "%")
		print ($argv[1] % $argv[3]);
	echo "\n";
}
?>