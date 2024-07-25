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
            echo "$this->name casts a spell dealing $damage damage (Mana remaining: $this->mana).\n";
        } else {
            $damage = rand(1, 5);
            echo "$this->name uses wand dealing $damage damage.\n";
        }
        return $damage;
    }

    public function defend($damage)
    {
        $this->takeDamage($damage);
    }
}
