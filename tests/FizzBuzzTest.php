<?php

declare(strict_types=1);

namespace App\Tests;

use App\FizzBuzz;
use PHPUnit\Framework\TestCase;

final class FizzBuzzTest extends TestCase
{
    public function testCalculateFizzBuzz(): void
    {
        $result = FizzBuzz::calculateFizzBuzz(15);

        $this->assertEquals(1, $result[0]);
        $this->assertEquals('Fizz', $result[2]);
        $this->assertEquals('Buzz', $result[4]);
        $this->assertEquals('FizzBuzz', $result[14]);
    }

    public function testCalculateFizzBuzzWithoutFizzBuzz(): void
    {
        $result = FizzBuzz::calculateFizzBuzz(2);
        $this->assertEquals([1, 2], $result);
    }

    public function testDisplayFizzBuzz(): void
    {
        ob_start();
        FizzBuzz::displayFizzBuzz(5);
        $output = ob_get_clean();

        $expected = implode(PHP_EOL, ['1', '2', 'Fizz', '4', 'Buzz']).PHP_EOL;

        $this->assertEquals($expected, $output);
    }
}
