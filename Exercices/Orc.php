<?php
require(__DIR__ . '/Character.php');


class Orc extends Character
{
    private int $damage;

    /**
     * __construct
     *
     * @param  mixed $damage
     * @param  mixed $health
     * @param  mixed $rage
     * @return void
     */
    public function __construct(int $damage, int $health, int $rage)
    {
        parent::__construct($health, $rage);
        $this->damage = $damage;
    }


    /** RETURN toutes les informations de l'ORC 
     * __toString
     *
     * @return void
     */
    public function __toString()
    {
        return "L'Orc a $this->health de vie et $this->rage rage. Il a pour dégât $this->damage<br><hr>";
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
        $damage = rand(600, 800);
    }
}


// $Big = new Orc(500, 200, 40);

// echo $Big;
