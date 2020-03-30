<?php
class Hra
{
public $stamina;
public $strenght;
public $wisdom;
public $inteligence;

public $dexerity;
public $race;
public $sex;
public $name;
public $surname;

public function __construct($stamina, $dexerity, $race, $sex)
{
    $this->stamina = $stamina;
    $this->strenght = $strenght;
    $this->wisdom = $wisdom;
    $this->inteligence = $inteligence;
    $this->charisma = $carisma;
    $this->dexerity = $dexerity;
    $this->race = $race;
    $this->sex = $sex;
    
    $this->name = $this->name();
    $this->surname =$this->surname();

}

public function name()
{
$female = array("Andrya", "Bréa", "Calia", "Cora", "Euphemia", "Jiliana", "Kitria", "Lavinia", "Lida", "Merla", "Neda", "Paela", "Portia", "Seraphina", "Šaena", "Tryma", "Vania", "Verna");
$male = array("Alton", "Ander", "Cade", "Corin", "Eldon", "Erich", "Finan", "Garet", "Lindal", "Lyle", "Merik", "Milo", "Osborn", "Perin", "Rýd", "Rosko", "Velbi");
 
if($this->sex = "male") {
    $random_name = array_rand($male);
    return $male[$random_name];
}else if( $this->sex = "female"){
    $random_name = array_rand($female);
    return $female[$random_name];
}

}


public function surname()
{
    $prijmeni = array("Bodlákotrn", "Bral", "Čajolístek", "Dobrosud", "Hoďvaloun", "Horal", "Kartáčobral", "Podvětev", "Pytlík", "Svalilskopce", "Šibeničář", "Zelenoflaška");
    $random_surname = array_rand($prijmeni);
    return $prijmeni[$random_surname];
}


}
class Rasa extends Hra
{
    public $race;
}
$hra = new Hra(150, 200, "Hobit", "Female")
bd($hra);
