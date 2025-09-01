<?php

class Orc extends Character
{
    private int $damageMin;
    private int $damageMax;

    // Getter / Setter :
    public function getDamageMin(): int
    {
        return $this->damageMin;
    }

    public function setDamageMin(int $damageMin): void
    {
        $this->damageMin = $damageMin;
    }


    public function getDamageMax(): int
    {
        return $this->damageMax;
    }

    public function setDamageMax(int $damageMax): void
    {
        $this->damageMax = $damageMax;
    }


    public function __construct(int $health, int $mana, int $damageMin, int $damageMax)
    {
        parent::__construct($health, $mana);
        $this->setDamageMin($damageMin);
        $this->setDamageMax($damageMax);
    }

    // methode permettant de définir l'attaque de l'Orc
    public function attack(): int
    {
        return rand($this->getDamageMin(), $this->getDamageMax());
    }
    
    // pour faciliter, nous allons créer un méthode pour baisser la vie de l'orc
    // methode permettant à l'orc de recevoir des damages
    public function getDamage($damage): void
    {
        $this->setHealth($this->getHealth() - $damage);
    }
}
