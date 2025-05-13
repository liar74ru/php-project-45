<?php

namespace BrainGames\Games;

use function BrainGames\Engine\runGame;

function generateGcdRound(): array
{
    $randomNumber1 = rand(1, 100);
    $randomNumber2 = rand(1, 100);
    $question = "{$randomNumber1} {$randomNumber2}";
    while ($randomNumber2 !== 0) {
        $result = $randomNumber2;
        $randomNumber2 = $randomNumber1 % $randomNumber2;
        $randomNumber1 = $result;
    }
    return [$question, (string) $result];
}

function playGameGcd(): void
{
    $description = 'Find the greatest common divisor of given numbers.';

    runGame($description, function () {
        return generateGcdRound();
    });
}
