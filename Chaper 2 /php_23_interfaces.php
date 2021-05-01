<?php

interface Bang{
    public function setLevel($level);
    public function killEnemy();
}
class php_23_interfaces implements Bang{
    private $level;
    public function setLevel($level)
    {
        $this->level = $level;
    }

    public function killEnemy()
    {
        echo "Killing with " . $this->level;
    }
}
$game = new php_23_interfaces();
$game->setLevel("Storm");
$game->killEnemy();