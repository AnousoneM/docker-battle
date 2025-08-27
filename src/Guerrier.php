<?php

class Guerrier extends Character
{
    private string $weapon;
    private int $weaponDamage;
    private string $shield;
    private int $shieldValue;

    // Getter / Setter :
    public function getWeapon(): string
    {
        return $this->weapon;
    }

    public function setWeapon(string $weapon): void
    {
        $this->weapon = $weapon;
    }


    public function getWeaponDamage(): int
    {
        return $this->weaponDamage;
    }

    public function setWeaponDamage(int $weaponDamage): void
    {
        $this->weaponDamage = $weaponDamage;
    }


    public function getShield(): string
    {
        return $this->shield;
    }

    public function setShield(string $shield): void
    {
        $this->shield = $shield;
    }


    public function getShieldValue(): int
    {
        return $this->shieldValue;
    }

    public function setShieldValue(int $shieldValue): void
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

    public function attack(): int
    {
        return $this->getWeaponDamage();
    }

    public function getDamage($damage): void
    {
        // je calcule les degats réels en fonction : des damages et du bouclier
        $realDamage = $damage - $this->getShieldValue();
        // Je change la valeur de la vie du guerrier en appliquant les damages
        // !! Attention !! de ne pas rajouter de la vie avec une valeur positive ;)
        if ($realDamage > 0) {
            $this->setHealth($this->getHealth() - $realDamage);
        }
    }
}
