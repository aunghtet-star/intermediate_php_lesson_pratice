<?php

$var = create_function('$para','echo "hello".$para[1] ;');
$var(['one','two']);
?>