<?php
class WizardTest extends \PHPUnit\Framework\TestCase
{
    public function testMaxHealth() {

        $wizard = new \entities\wizardClass();
        $this->assertEqual($wizard->getHealth(), 100);

    }

    public function testCanDie() {

        $wizard = new \entities\wizardClass();
        $wizard->takeDamage(100);
        $this->assertFalse($wizard->isAlive());

    }

    public function testHealthReduction() {

        $wizard = new \entities\wizardClass();
        $wizard->takeDamage(20);
        $this->assertEquals($wizard->getHealth(), 80);

    }
}
