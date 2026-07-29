<?php

namespace App;

class capaciteMax
{
     private $capacite;
    /**
     * Create a new class instance.
     */
    public function __construct($capacite)
    {
       if($capacite<=0){
        echo'nombre negatif';
       }

    }
}
