<?php

namespace entities;

Class warriorClass extends baseCharacterClass {

    private $armour;
    private $swordDurability;

    public function __construct($armour, $swordDurability)
    {
        $this->health = 100;
        $this->armour = $armour;
        $this->swordDurability = $swordDurability;
    }

    public function attack()
    {
        $damage = rand(5, 15);
        $this->swordDurability -= 1;
        echo "Warrior attacks with sword dealing $damage damage (Sword durability: $this->swordDurability).\n";
        return $damage;
    }

    public function defend($damage)
    {
        $blockChance = rand(1, 10);
        if ($blockChance <= 3) {
            echo "Warrior blocks the attack.\n";
        } else {
            $this->takeDamage($damage);
        }
    }
}
