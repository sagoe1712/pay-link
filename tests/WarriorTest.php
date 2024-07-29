<?php
use PHPUnit\Framework\TestCase;
use entities\warriorClass;
class WarriorTest extends \PHPUnit\Framework\TestCase
{
    public function testWarriorInitialization() {
        $warrior = new warriorClass(50, 10);

        $this->assertEquals(100, $warrior->getHealth());
        $this->assertEquals(50, $warrior->getArmour());
        $this->assertEquals(10, $warrior->getSwordDurability());
    }

    public function testWarriorAttack() {
        $warrior = new warriorClass(50, 10);

        // Attack and capture the output
        $damage = $warrior->attack();

        // Check if damage is within the expected range
        $this->assertGreaterThanOrEqual(5, $damage);
        $this->assertLessThanOrEqual(15, $damage);
    }

    public function testWarriorDefend() {
        $warrior = new warriorClass(50, 10);
        $initialHealth = $warrior->getHealth();
        $damage = 10;

        // Simulate a defense action and capture the output
        $warrior->defend($damage);

        // Assert that health is either unchanged (blocked) or decreased by the damage amount
        $newHealth = $warrior->getHealth();
        $this->assertTrue(
            $newHealth === $initialHealth || $newHealth === ($initialHealth - $damage)
        );
    }

    public function testSwordDurabilityDecreasesOnAttack() {
        $warrior = new warriorClass(50, 10);

        $durabilityBefore = $warrior->getSwordDurability();
        $warrior->attack();
        $durabilityAfter = $warrior->getSwordDurability();

        $this->assertEquals($durabilityBefore - 1, $durabilityAfter);
    }

    public function testTakeDamage() {
        $warrior = new warriorClass(50, 10);
        $initialHealth = $warrior->getHealth();

        $warrior->takeDamage(20);
        $this->assertEquals($initialHealth - 20, $warrior->getHealth());
    }

}
