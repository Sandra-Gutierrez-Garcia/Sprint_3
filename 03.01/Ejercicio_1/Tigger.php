<?php
class Tigger {

        private static $instance =null;
        private static $countRoar=0;


private function __construct() {
        echo "Building character..." . PHP_EOL;
}

public function roar() {
        echo "Grrr!" . PHP_EOL;
        self::$countRoar++;
}
public  static  function getInstance(){
        if(self::$instance ==null){
        self:: $instance= new Tigger();
        }

        return self:: $instance;

}
public function getCounter() :int{
       return  self:: $countRoar;
}
}
?>