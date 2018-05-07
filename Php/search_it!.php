#!/usr/bin/php
<?
$i = 2;
$args = $argc - 1;
$key = $argv[1];
while ($args)
{
    $tab = explode(':', $argv[$i]);
    if ($tab[0] === $key)
    {
        $good = $tab[1];
    }
    $i++;
    $args--;
}
if ($good)
{
    print("$good\n");
}
?>