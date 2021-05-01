<?php
$ary = [
    ["one","two","three","four"],
    ["one","two","three","four"],
    ["one","two","three","four"],
    ["one","two","three","four"],
];

$data = serialize($ary);
echo $data;
$normal = unserialize($data);

echo "<pre>".print_r($ary,true)."</pre>";