#!/usr/bin/php
<?
if ($argc != 2)
{
    print("Incorrect Parameters\n");
    exit;
}

function do_op($p1, $p2, $p3)
{
	if ($p2 == "+")
        print ($p1 + $p3);
	if ($p2 == "-")
        print ($p1 - $p3);
	if ($p2 == "*")
        print ($p1 * $p3);
	if ($p2 == "/")
        print ($p1 / $p3);
	if ($p2 == "%")
        print ($p1 % $p3);
    echo "\n";
}
$i = 0;
$symbol = '+';
$strip = str_replace(' ', '', $argv[1]);
while($strip[$i])
{
    if ($strip[$i] == '+' || $strip[$i] == '-' || $strip[$i] == '*' || $strip[$i] == '/' || $strip[$i] == '%')
    {
        $symbol = $strip[$i];
        $tab = explode($symbol, $strip);
    }
    $i++;
}
if (is_numeric($tab[0]) && is_numeric($tab[1]))
{
    do_op($tab[0], $symbol, $tab[1]);
}
else
    print("Syntax Error\n");
?>