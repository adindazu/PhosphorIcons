<?php
/**
 * Tests for PhosphorIcons
 */

use PHPUnit\Framework\TestCase;
use Phosphoricons\Phosphoricons;

class PhosphoriconsTest extends TestCase {
    private Phosphoricons $instance;

    protected function setUp(): void {
        $this->instance = new Phosphoricons(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Phosphoricons::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
