<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class FizzBuzzTest extends TestCase
{
    public function testFizzBuzz(int $i): int
    {
        
        $this->assertSame('FizzBuzz', $i % 15 == 0);
        return $i;
    }

    public function fizz(int $i): int
    {
        $this->assertSame('Fizz', $i % 3 == 0);
        return $i;
    }

    
    public function buzz(int $i): int
    {
        $this->assertSame('Fizz', $i % 5 == 0);
        return $i;
    }

     public function number(int $i): int
    {
        $this->assertSame( $i );
        return $i;
    }
}