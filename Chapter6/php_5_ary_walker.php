<?php
$ary = ["1"=>'one',"2"=>'two',"3"=>'three'];

function HeHe($k,$v){
    echo "I am no {$k} in the world and also u are the no {$v}<hr>";
}

array_walk($ary,'HeHe');