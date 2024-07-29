<?php

namespace entities;
use entities\wizardClass;
use entities\warriorClass;
class fightClass {
    private $wizard;
    private $warrior;

    public function __construct($wizard, $warrior) {
        $this->wizard = $wizard;
        $this->warrior = $warrior;
    }


    public function start() {
        $round = 1;
        while ($this->wizard->isAlive() && $this->warrior->isAlive()) {
            echo "Round $round:\n";

            // Wizard attacks first
            $damage = $this->wizard->attack();
            $this->warrior->defend($damage);

            // Check if warrior is still alive
            if (!$this->warrior->isAlive()) {
                echo "Winner: Wizard\n";
                return;
            }

            // Warrior attacks
            $damage = $this->warrior->attack();
            $this->wizard->defend($damage);

            // Check if wizard is still alive
            if (!$this->wizard->isAlive()) {
                echo "Winner: Warrior\n";
                return;
            }

            echo "\n";
            $round++;
        }
    }
}
?>
