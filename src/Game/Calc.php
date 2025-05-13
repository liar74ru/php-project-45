<?php

namespace BrainGames\Games;

use function BrainGames\Engine\runGame;

function generateCalcRound(): array
{
    $randomNumber1 = rand(1, 100);
    $randomNumber2 = rand(1, 100);
    $randomOper = rand(1, 3);
    $result = 0;
    switch ($randomOper) {
        case 1:
            $question = "{$randomNumber1} + {$randomNumber2}";
            $result = $randomNumber1 + $randomNumber2;
            break;
        case 2:
            $question = "{$randomNumber1} - {$randomNumber2}";
            $result = $randomNumber1 - $randomNumber2;
            break;
        case 3:
            $question = "{$randomNumber1} * {$randomNumber2}";
            $result = $randomNumber1 * $randomNumber2;
            break;
    }
    return [$question, (string) $result];
}

function playGameCalc(): void
{
    $description = 'What is the result of the expression?';

    runGame($description, function () {
        return generateCalcRound();
    });
}
