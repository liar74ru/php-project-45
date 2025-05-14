<?php

namespace BrainGames\Games;

use function BrainGames\Engine\runGame;

// Функция для вычисления наибольшего общего делителя двух чисел
function isGcd(int $a, int $b): int
{
    while ($b !== 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

// Функция для генерации раунда игры "Поиск наибольшего общего делителя"
function generateGcdRound(): array
{
    $randomNumber1 = rand(1, 100);
    $randomNumber2 = rand(1, 100);
    $question = "{$randomNumber1} {$randomNumber2}";
    $result = isGcd($randomNumber1, $randomNumber2);
    return [$question, (string) $result];
}

// Функция для запуска игры "Поиск наибольшего общего делителя"
function playGameGcd(): void
{
    $description = 'Find the greatest common divisor of given numbers.';

    runGame($description, function () {
        return generateGcdRound();
    });
}
