<?php
require_once(__DIR__ . '/Character.php');

class Hero extends Character
{
    private string $weapon;
    private int $weaponDamage;
    private string $shield;
    private int $shieldValue;




    /** Permet de construire notre Hero qui a hérité de la class Character
     * __construct
     *
     * @return void
     */
    public function __construct(
        string $weapon,
        int $weaponDamage,
        string $shield,
        int $shieldValue,
        int $health,
        int $rage
    ) {
        parent::__construct($health, $rage);

        $this->weapon = $weapon;
        $this->weaponDamage = $weaponDamage;
        $this->shield = $shield;
        $this->shieldValue = $shieldValue;
    }


    /** RETURN toutes les informations du HERO 
     * __toString
     *
     * @return void
     */
    public function __toString()
    {
        return "Le Hero a $this->health de vie et $this->rage rage.  Le nom de l'arme est $this->weapon, son attaque vaut $this->weaponDamage. Il a comme bouclier $this->shield qui a pour valeur $this->shieldValue <br><hr>";
    }


    /** Methode qui permet de renseigner le nom de l'arme
     * @param string $weapon
     * 
     * @return void
     */
    public function setWeapon(string $weapon): void
    {
        $this->weapon = $weapon;
    }

    /** Methode qui permet de recuperer le nom de l'arme
     * @return string
     */
    public function getWeapon(): string
    {
        return $this->weapon;
    }

    /** Methode qui permet de renseigner le nombre de dégats
     * @param int $weaponDamage
     * 
     * @return void
     */
    public function setWeaponDamage(int $weaponDamage): void
    {
        $this->weaponDamage = $weaponDamage;
    }



    /**Methode qui permet de récuperer le nombre de dégats
     * @return int
     */
    public function getWeaponDamage(): int
    {
        return $this->weaponDamage;
    }



    /**Methode qui permet de renseigner le nom de l'armure
     * @param string $shield
     * 
     * @return void
     */
    public function setShield(string $shield): void
    {
        $this->shield = $shield;
    }



    /**Methode qui permet de recupérer le nom de l'armure
     * @return string
     */
    public function getShield(): string
    {
        return $this->shield;
    }



    /**Methode qui permet de renseigner la valeur du shied
     * @param int $shieldValue
     * 
     * @return void
     */
    public function setShieldValue(int $shieldValue): void
    {
        $this->shieldValue = $shieldValue;
    }



    /** Methode qui permet de recupérer la valeur du shield
     * @return int
     */
    public function getShieldValue(): int
    {
        return $this->shieldValue;
    }

    /**
     * attacked return 
     *
     * @param  mixed $attack
     * @return void
     */
    public function attacked($attack)
    {
        $this->shieldValue -= $attack;
        if ($this->shieldValue < 0) {
            $this->health += $this->shieldValue;
            $this->shieldValue = 0;
        }
        $this->rage += 30;
    }






    // FIN CLASS HERO 
}


// $jean = new Hero('cut', 50, 'boubou', 40, 100, 40);


// echo $jean;


// $jean->attacked(50);


// echo $jean;
