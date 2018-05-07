#!/usr/bin/php
<?php
if ($argc === 2) {
    $str = trim(preg_replace('/\s\s+/', ' ', str_replace("\n", " ", $argv[1])));
    echo($str."\n");
}
?>