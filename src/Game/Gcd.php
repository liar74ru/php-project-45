<?php

namespace BrainGames\Games;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\{trueAnswerName, falseAnswerName};

function gameGcd(int $round, string $name): void
{
    line('Find the greatest common divisor of given numbers.');
    for ($i = 1; $i <= $round; $i++) {
        $randomNamber1 = rand(1, 100);
        $randomNamber2 = rand(1, 100);
        line("Question: {$randomNamber1} {$randomNamber2}");
        $answer = prompt("Your answer");
        while ($randomNamber2 !== 0) {
            $temp = $randomNamber2;
            $randomNamber2 = $randomNamber1 % $randomNamber2;
            $randomNamber1 = $temp;
        }
        if ($answer === (string) $randomNamber1) {
            line("Correct!");
        } else {
            falseAnswerName($name, $answer, (string) $randomNamber1);
            return ;
        }
    }
    trueAnswerName($name);
}
