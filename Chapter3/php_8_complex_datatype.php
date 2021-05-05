<?php
class Driver{
    public $name,$age,$hourlyByrate,$martialstatus,$family;
    public function setName(string $name){
        $this->name = $name;
    }
    public function setAge(int $age){
        $this->age = $age;
    }
    public function setHour(float $hour){
        $this->hourlyByrate = $hour;
    }
    public function setStatus(bool $status){
        $this->martialstatus = $status;
    }
    public function setFamily(array $family){
        $this->family = $family;
    }

    public function getName():string{
        return $this->name;
    }
    public function getAge():int{
        return $this->age;
    }
    public function getHour():float{
        return $this->hourlyByrate;
    }
    public function getStatus():bool{
        return $this->martialstatus;
    }
    public function getFamily():array{
        return $this->family;
    }
}
class Car{
    public $brand,$model,$price,$spares,$avaible;
    public function __construct(string $brand,int $model,int $price,array $spares,bool $avaible)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->price = $price;
        $this->spares = $spares;
        $this->avaible = $avaible;
    }


    public function getBrand(): string
    {
        return $this->brand;
    }


    public function getModel(): int
    {
        return $this->model;
    }


    public function getPrice(): int
    {
        return $this->price;
    }


    public function getSpares(): array
    {
        return $this->spares;
    }


    public function isAvaible(): bool
    {
        return $this->avaible;
    }

}
$Mg = new Driver();
$Mg->setName("Mg Mg");
$Mg->setAge(23);
$Mg->setHour(9.5);
$Mg->setStatus(true);
$Mg->setFamily(["Father"=>"U Ba","Mother"=>"Daw Mya","wife"=>"Su Su"]);

$Ag = new Driver();
$Ag->setName("Ag Ag");
$Ag->setAge(25);
$Ag->setHour(10.5);
$Ag->setStatus(true);
$Ag->setFamily(["Father"=>"U Bya","Mother"=>"Daw Mya","wife"=>"Bu Bu"]);

