<?php
/**
 * Tests for MetaBridgePlus
 */

use PHPUnit\Framework\TestCase;
use Metabridgeplus\Metabridgeplus;

class MetabridgeplusTest extends TestCase {
    private Metabridgeplus $instance;

    protected function setUp(): void {
        $this->instance = new Metabridgeplus(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Metabridgeplus::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
