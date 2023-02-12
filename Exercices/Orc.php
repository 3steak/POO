<?php
require_once(__DIR__ . '/Character.php');


class Orc extends Character
{
    private int $damage;

    /**
     * __construct
     *
     * @param  mixed $health
     * @param  mixed $rage
     * @return void
     */
    public function __construct(int $health, int $rage)
    {
        parent::__construct($health, $rage);
    }


    /** RETURN toutes les informations de l'ORC 
     * __toString
     *
     * @return void
     */
    public function __toString()
    {
        return "L'Orc a $this->health de vie et $this->rage rage. <br><hr>";
    }


    /** Methode qui permet de renseigner les damages de l'Orc
     * setDamage
     *
     * @param  mixed $damage
     * @return void
     */
    public function setDamage(int $damage): void
    {
        $this->damage = $damage;
    }


    /**Methode qui permet de récuperer les damages de l'Orc
     * getDamage
     *
     * @return string
     */
    public function getDamage(): string
    {
        return $this->damage;
    }




    /** Methode qui permet de randomiser la valeur d'attack de l'Orc
     * attack
     *
     * @return void
     */
    public function attack()
    {
        return  $attack = rand(600, 800);
    }
}


// $Big = new Orc(500, 200, 40);

// echo $Big;
