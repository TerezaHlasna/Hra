<?php
class Hra
{
public $stamina;
public $strenght;
public $wisdom;
public $inteligence;
public $charisma;
public $dexerity;
public $race;
public $sex;
public $name;
public $surname;

public function __construct($stamina, $stranght, $wisdom, $inteligence, $charisma, $dexerity, $race, $sex, $name, $surname)
{
    $this->stamina = $stamina;
    $this->strenght = $strenght;
    $this->wisdom = $wisdom;
    $this->inteligence = $inteligence;
    $this->charisma = $carisma;
    $this->dexerity = $dexerity;
    $this->race = $race;
    $this->sex = $sex;
    $this->name = $name;
    $this->surname = $surname;

}

}

class Hra extends Rasa
{


}