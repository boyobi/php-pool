<?php

$action = $_GET["action"];
if ($action == "set" && !empty($_GET["name"]) && !empty($_GET["value"]))
	setcookie($_GET["name"], $_GET["value"], (time() + 3600));
else if ($action == "get" && !empty($_COOKIE[$_GET["name"]]))
{
	echo $_COOKIE[$_GET["name"]]."\n";
}
else if ($action == "del")
	setcookie($_GET["name"]);

?>
