<?php
require_once("Building.php");
class Tower extends Building{

     private $builtYear;
     

     function __construct(string $name, int $height, int $builtYear){
        parent::_construct($name, $height);
        $this->builtYear = $builtYear;
      }
      
      function getProfile(){
          $profile = "{$this-> name} の高さは{$this->height} mで、{$this->builtYear} 年に　開業しました";
          return $profile;
      }
}
?>