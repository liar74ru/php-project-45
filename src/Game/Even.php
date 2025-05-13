<?php

namespace BrainGames\Games;

use function BrainGames\Engine\runGame;

function generateEvenRound(): array
{
    $randomNumber1 = rand(1, 100);
    $result = ($randomNumber1 % 2) === 0 ? 'yes' : 'no';
    $question = "Question: {$randomNumber1}";
    return [$question, $result];
}

function playGameEven(): void
{
    $description = 'Answer "yes" if the number is even, otherwise answer "no".';

    runGame($description, function () {
        return generateEvenRound();
    });
}
