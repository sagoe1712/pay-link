<?php
class WarriorTest extends \PHPUnit\Framework\TestCase
{
    public function testMaxHealth() {

        $warrior = new \Class\warrior();
        $this->assertEqual($warrior->getHealth(), 100);

    }

    public function testCanDie() {

        $warrior = new \Class\warrior();
        $warrior->takeDamage(100);
        $this->assertFalse($warrior->isAlive());

    }

    public function testHealthReduction() {

        $warrior = new \Class\warrior();
        $warrior->takeDamage(20);
        $this->assertEquals($warrior->getHealth(), 80);

    }


}
