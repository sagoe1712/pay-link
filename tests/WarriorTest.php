<?php
class WarriorTest extends \PHPUnit\Framework\TestCase
{
    public function testMaxHealth() {

        $warrior = new \Class\warrior();
        $this->assertEqual($warrior->getHealth(), 100);

    }

    public function testCanDie() {

        $warrior = new \Class\warrior();
        $warriorHealth = $warrior->getHealth();
        $newHealth = $warriorHealth - 100;
        $this->assertEqual($newHealth, 0);

    }

    public function testHealthReduction() {

        $warrior = new \Class\warrior();
        $warriorHealth = $warrior->getHealth();
        $newHealth = $warriorHealth - 20;
        $this->assertEqual($warrior->getHealth(), 80);

    }


}
