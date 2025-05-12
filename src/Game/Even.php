<?php

namespace BrainGames\Games;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\{trueAnswerName, falseAnswerName};

function gameEven(int $round, string $name): void
{
    line('Answer "yes" if the number is even, otherwise answer "no".');
    for ($i = 1; $i <= $round; $i++) {
        $randomNamber1 = rand(1, 100);
        $answer = prompt("Question: {$randomNamber1}");
        if ((($randomNamber1 % 2) === 0 && $answer === 'yes') || (($randomNamber1 % 2) !== 0 && $answer === 'no')) {
            line("Correct!");
        } else {
            $answerTrue = ($randomNamber1 % 2) === 0 ? 'yes' : 'no';
            falseAnswerName($name, $answer, $answerTrue);
            return;
        }
    }
    trueAnswerName($name);
}
