<?php


namespace model;


class Member {

    private $name;
    private $socialSecurityNumber;
    private $memberID;
    private $amountOfBoats;

    public function __construct ($name, $socialsecuritynumber, $memberid, $amountofboats)
    {
        $this->name = $name;
        $this->socialSecurityNumber = $socialsecuritynumber;
        $this->memberID = $memberid;
        $this->amountOfBoats = $amountofboats;
    }


}