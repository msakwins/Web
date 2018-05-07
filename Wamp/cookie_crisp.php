<?php
if ($_GET["action"] === "set")
{
    setcookie($_GET["name"], $_GET["value"], time() + 3600);
}
if ($_GET["action"] === "get" && $_COOKIE[$_GET["name"]])
{
    echo $_COOKIE[$_GET["name"]];
    echo "\n";
}
if ($_GET["action"] === "del")
{
    setcookie($_GET["name"], "", -3600);
}

?>