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

    public function attack(): int
    {
        return rand($this->getDamageMin(), $this->getDamageMax());
    }
}
