<?php
use PHPUnit\Framework\TestCase;
use entities\wizardClass;
class WizardTest extends \PHPUnit\Framework\TestCase
{
    public function testWizardInitialization() {
        $wizard = new wizardClass(50);

        $this->assertEquals(100, $wizard->getHealth());
        $this->assertEquals(50, $wizard->getMana());
    }

    public function testWizardAttackWithMana() {
        $wizard = new wizardClass(50);

        // Capture the output
        $this->expectOutputRegex('/Wizard casts a spell dealing \d+ damage \(Mana remaining: \d+\).\n/');
        $damage = $wizard->attack();

        // Check if damage is within the expected range
        $this->assertGreaterThanOrEqual(10, $damage);
        $this->assertLessThanOrEqual(20, $damage);
    }

    public function testWizardAttackWithoutMana() {
        $wizard = new wizardClass(0);

        // Capture the output
        $this->expectOutputRegex('/Wizard uses wand dealing \d+ damage.\n/');
        $damage = $wizard->attack();

        // Check if damage is within the expected range
        $this->assertGreaterThanOrEqual(1, $damage);
        $this->assertLessThanOrEqual(5, $damage);
    }

    public function testManaDecreasesOnSpellCast() {
        $wizard = new wizardClass(50);

        $manaBefore = $wizard->getMana();
        $wizard->attack();  // Cast spell, reduces mana by 10
        $manaAfter = $wizard->getMana();

        $this->assertEquals($manaBefore - 10, $manaAfter);
    }

    public function testWizardDefend() {
        $wizard = new wizardClass(50);
        $initialHealth = $wizard->getHealth();
        $damage = 10;

        $wizard->defend($damage);
        $this->assertEquals($initialHealth - $damage, $wizard->getHealth());
    }

    public function testTakeDamage() {
        $wizard = new wizardClass(50);
        $initialHealth = $wizard->getHealth();

        $wizard->takeDamage(20);
        $this->assertEquals($initialHealth - 20, $wizard->getHealth());
    }

}
