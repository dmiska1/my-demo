<?php

class bibi
{
    public $Name = "Bibi";
    public $Spricht = "Die Kekse sind fertig";

    function gesprochen($Name, $Spricht)
    {
        $Name . " sagt:" . $Spricht;
    }
}