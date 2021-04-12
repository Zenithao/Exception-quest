<?php
require_once 'Bicycle.php';

class Bike extends Bicycle
{
    public function __construct(string $color, int $nbSeats)
    {
        parent::__construct($color, $nbSeats);
        $this->setNbSeats($nbSeats);
        echo "Nouveau vélo créer !";
    }
}