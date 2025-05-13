<?php

namespace BrainGames\Games;

use function BrainGames\Engine\runGame;

// Функция для проверки, является ли число простым
function isPrime(int $randNumber): bool
{
    if ($randNumber < 2) {
        return false;
    }
    if ($randNumber === 2) {
        return true;
    }
    if ($randNumber % 2 === 0) {
        return false;
    }

    $limit = (int) sqrt($randNumber);
    for ($i = 3; $i <= $limit; $i += 2) {
        if ($randNumber % $i === 0) {
            return false;
        }
    }
    return true;
}

// Функция для генерации раунда игры "Простое число"
function generatePrimeRound(): array
{
    $randomNumber = rand(1, 100);
    $result = isPrime($randomNumber) ? 'yes' : 'no';
    $question = (string) $randomNumber;
    return [$question, $result];
}

// Функция для запуска игры "Простое число"
function playGamePrime(): void
{
    $description = 'Answer "yes" if given number is prime. Otherwise answer "no".';

    runGame($description, function () {
        return generatePrimeRound();
    });
}
