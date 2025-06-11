<?php

declare(strict_types=1);

namespace App;

class FizzBuzz
{
    public static function fizzBuzz(int $number): string
    {
        return match (true) {
            0 === $number % 3 && 0 === $number % 5 => 'FizzBuzz',
            0 === $number % 3 => 'Fizz',
            0 === $number % 5 => 'Buzz',
            default => (string) $number,
        };
    }

    public static function calculateFizzBuzz(int $number): array
    {
        $result = [];

        for ($i = 1; $i <= $number; ++$i) {
            $result[] = self::fizzBuzz($i);
        }

        return $result;
    }

    public static function displayFizzBuzz(int $max): void
    {
        foreach (self::calculateFizzBuzz($max) as $value) {
            echo $value.PHP_EOL;
        }
    }
}
