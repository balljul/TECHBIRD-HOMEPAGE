<?php

// Returnes only the name of the pagepath (Path would be like techbird/php/home.php) (return value would be home)

basename($_SERVER["SCRIPT_FILENAME"], '.php');

// To toogle a page reload do the following
header('Refresh:0"');

// To redirecct to another page do the following

header("LOCATION: path")





















?>