#!/usr/bin/php
<?php

$i = 1;
while ($i <= $argc)
{
    $joined = $joined . ' ' . $argv[$i];
    $i++;
}
$joined = trim(preg_replace('/\s\s+/', ' ', str_replace("\n", " ", $joined)));
$tab = explode(' ', $joined);
sort($tab);
$i = 0;
while ($i < count($tab))
{
    $tab[$i] = trim($tab[$i]);
    print("$tab[$i]\n");
    $i++;
}
?>