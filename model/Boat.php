<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Hello World
 * Date: 2013-10-01
 * Time: 15:47
 * To change this template use File | Settings | File Templates.
 */

namespace model;


class Boat {
    private $boatID;
    private $boatType;
    private $serialNumber;

    public function __construct ($boatid, $boattype, $serialnumber)
    {
        $this->boatID = $boatid;
        $this->boatType = $boattype;
        $this->serialNumber = $serialnumber;
    }
}