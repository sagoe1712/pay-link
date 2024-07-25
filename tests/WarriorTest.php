<?php
class WarriorTest extends \PHPUnit\Framework\TestCase
{
    public function testMaxHealth() {

        $warrior = new \entities\warriorClass();
        $this->assertEqual($warrior->getHealth(), 100);

    }

    public function testCanDie() {

        $warrior = new \entities\warriorClass();
        $warrior->takeDamage(100);
        $this->assertFalse($warrior->isAlive());

    }

    public function testHealthReduction() {

        $warrior = new \entities\warriorClass();
        $warrior->takeDamage(20);
        $this->assertEquals($warrior->getHealth(), 80);

    }


}
