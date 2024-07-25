<?php
abstract class baseCharacterClass {
    protected $health;

    public function __construct($health) {
        $this->health = $health;
    }

    public function isAlive() {
        return $this->health > 0;
    }

    public function takeDamage($damage) {
        $this->health -= $damage;
        if ($this->health < 0) {
            $this->health = 0;
        }
    }

    public function getHealth() {
        return $this->health;
    }

    abstract public function attack();
    abstract public function defend($damage);
}
