<?php

class Bibi
{
    public $Name = "Mama";
    public $Spricht = "Die Kekse sind fertig";

    function gesprochen($Name, $Spricht)
    {
        $Name . " sagt:" . $Spricht;
    }
}