<?php

class Guerrier extends Character
{
    private string $weapon;
    private int $weaponDamage;
    private string $shield;
    private int $shieldValue;

    // Getter / Setter :
    public function getWeapon()
    {
        return $this->weapon;
    }

    public function setWeapon(string $weapon)
    {
        $this->weapon = $weapon;
    }


    public function getWeaponDamage()
    {
        return $this->weaponDamage;
    }

    public function setWeaponDamage(int $weaponDamage)
    {
        $this->weaponDamage = $weaponDamage;
    }


    public function getShield()
    {
        return $this->shield;
    }

    public function setShield(string $shield)
    {
        $this->shield = $shield;
    }


    public function getShieldValue()
    {
        return $this->shieldValue;
    }

    public function setShieldValue(int $shieldValue)
    {
        $this->shieldValue = $shieldValue;
    }

    public function __construct(int $health, int $mana, string $weapon, int $weaponDamage, string $shield, int $shieldValue)
    {
        parent::__construct($health, $mana);
        $this->setWeapon($weapon);
        $this->setWeaponDamage($weaponDamage);
        $this->setShield($shield);
        $this->setShieldValue($shieldValue);
    }

    public function attack(){
        return $this->getWeaponDamage();
    }

    public function getDamage($damage) {
        
    }

}
