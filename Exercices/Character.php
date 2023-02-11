<?php
class Character
{
    protected int $health;
    protected int $rage;


    /**
     * Méthode magique permettant la création d'un nouveau personnage __construct
     *
     * @param  mixed $health
     * @param  mixed $rage
     * @return void
     */

    public function __construct(int $health, int $rage)
    {
        $this->health = $health;
        $this->rage = $rage;
    }

    /**
     * Methode permettant de renseigner la vie du personnage
     * @param int $health
     * 
     * @return void
     */

    public function setHealth(int $health): void
    {
        $this->health = $health;
    }

    /**
     * Methode permettant de retourner la vie du personnage
     * @return int
     */

    public function getHealth(): int
    {
        return $this->health;
    }

    /**
     * Methode permettant de renseigner la rage du personnage

     * @param int $rage
     * 
     * @return void
     */

    public function setRage(int $rage): void
    {
        $this->rage = $rage;
    }

    /**
     * methode permettante de retourner la rage du personnage
     * @return int
     */

    public function getRage(): int
    {
        return $this->rage;
    }
}
