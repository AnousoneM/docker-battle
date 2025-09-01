<?php

class Character
{
    private int $health;
    private int $mana;

    // Mise en place des Getters / Setters

    public function getHealth(): int
    {
        // on effectue une ternaire pour ne pas avoir de point de vie négatifs
        return $this->health <= 0 ? 0 : $this->health;
    }

    public function setHealth(int $health): void
    {

        $this->health = $health;
    }

    public function getMana(): int
    {
        return $this->mana;
    }

    public function setMana(int $mana): void
    {
        $this->mana = $mana;
    }

    public function __construct(int $health, int $mana)
    {
        $this->setHealth($health);
        $this->setMana($mana);
    }
}
