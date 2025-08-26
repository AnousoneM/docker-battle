<?php

class Character
{
    private int $health;
    private int $mana;

    // Mise en place des Getters / Setters

    public function getHealth()
    {
        return $this->health;
    }

    public function setHealth(int $health)
    {
        $this->health = $health;
    }

    public function getMana()
    {
        return $this->mana;
    }

    public function setMana(int $mana)
    {
        $this->mana = $mana;
    }

    public function __construct(int $health, int $mana)
    {
        $this->setHealth($health);
        $this->setMana($mana);
    }
}
