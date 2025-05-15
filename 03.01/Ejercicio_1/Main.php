<?php
include 'Tigger.php';
$tigger = Tigger::getInstance();

for($i=0;$i<3;$i++){
    echo $tigger ->roar();
}
echo $tigger->getCounter();

?>