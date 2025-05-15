<?php 
require_once "Handler.php";
class wallet implements Handler{

    public function handle(): ?string{

        return "I've taken the wallet";
        
    }
}
class HouseKey implements Handler{

     public function handle(): ?string{
        return "I've taken the house keys";

    }
}
class TransportCard implements Handler{

     public function handle(): ?string{
        return "I've taken the public transport card";
    }
}

class Smartphone implements Handler{

    public function handle(): ?string{
        return "I've taken the smartphone";
    }
}

class vehicleKeys implements Handler{

public function handle(): ?string {
    return "I've taken the vehicleKeys";
}
}

?>