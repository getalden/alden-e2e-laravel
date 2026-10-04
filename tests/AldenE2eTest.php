<?php

use PHPUnit\Framework\TestCase;

final class AldenE2eTest extends TestCase
{
    public function testAddsUp(): void
    {
        $this->assertSame(2, 1 + 1);
    }
}
