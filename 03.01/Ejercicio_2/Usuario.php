<?php 
declare(strict_types=1);
require_once  "Handler.php" ;
require_once "ManejadoresConcretos.php";

class Usuario {
 
  private array $items=[];
  public function __construct(array $items) {
    $this->items = $items;
   
  }
  public function ITake(){
    $output = "";
  foreach ($this->items as $item){
    $output.= $item ->handle() . "\n";
  }return $output;
}

}
