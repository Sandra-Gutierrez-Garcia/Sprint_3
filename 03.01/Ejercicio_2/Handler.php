<?php
    declare(strict_types=1);
    require_once  "Usuario.php";

    interface Handler {
            public function handle(): ?string;

    }
  
    
?>