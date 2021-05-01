<?php
class member{
    public function __construct()
    {
        echo "I am construct";
    }
}
class php_14_parent_construct extends member {
    public function __construct()
    {
        parent:: __construct();
        echo "i am second construct";
    }
}
new php_14_parent_construct();