<?php 

require_once __DIR__ . "/../Helper/Input.php";

$name = input('name');
echo "Hello $name\n";

$channel = input('channel');
echo "Channel $channel\n";