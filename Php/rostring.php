#!/usr/bin/php
<?php
if ($argc === 2)
{
    $tab = explode(' ', $argv[1]);
    $last = $tab[0];
    array_push($tab, $last);
    $tab[0] = NULL;
    $str = implode(' ', $tab);
    $str = trim(preg_replace('/\s\s+/', ' ', str_replace("\n", " ", $str)));
    print("$str\n");
}
?>