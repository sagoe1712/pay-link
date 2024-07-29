<?php
namespace entities;
Class wizardClass extends baseCharacterClass {

    private $mana;
    public function __construct($mana)
    {
        $this->health = 100;
        $this->mana = $mana;
    }

    public function attack()
    {
        if ($this->mana > 0) {
            $damage = rand(10, 20);
            $this->mana -= 10;
            echo "Wizard casts a spell dealing $damage damage (Mana remaining: $this->mana).\n";
        } else {
            $damage = rand(1, 5);
            echo "Wizard uses wand dealing $damage damage.\n";
        }
        return $damage;
    }

    public function defend($damage)
    {
        $this->takeDamage($damage);
    }

    public function getHealth() {
        return $this->health;
    }

    public function getMana() {
        return $this->mana;
    }
}
