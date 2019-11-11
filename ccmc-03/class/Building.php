<?php

class Building {
    // properties
   
    protected $name;
    protected $height;
   
   
    // constructor
   
    function __construct(string $name, int $height) {
        $this->name = $name;
        $this->height = $height;
    }
   
   
   
   
    // accessor methods
    function getName():string {
        return $this->name;
    }
    function setName(string $name):void {
        $this->name = $name;
    }
    function getAge():int {
        return $this->age;
    }
    function setAge(int $age):void {
        $this->age = $age;
    }
   
   
   
    // method
   
    function getProfile():string {
        $profile = "{$this->name} の高さは {$this->height} のです ";
        return $profile;
    }
   
   
}
?>