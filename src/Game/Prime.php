<?php

namespace BrainGames\Games;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\{trueAnswerName, falseAnswerName};

function prime($randNumber): string
{
    if ($randNumber < 2) {
        return 'no';
    } elseif ($randNumber === 2) {
        return 'yes';
    } elseif ($randNumber % 2 === 0) {
        return 'no';
    } else {
        for ($i = 3; $i <= sqrt($randNumber); $i += 2) {
            if ($randNumber % $i === 0) {
                return 'no';
            }
        }
    }
    return 'yes';
}

function gamePrime(int $round, string $name): void
{
    line('Answer "yes" if given number is prime. Otherwise answer "no".');
    for ($i = 1; $i <= $round; $i++) {
        $randNumber = rand(2, 50);                  # число для определения на простое
        echo "Question: {$randNumber}";
        $answer = prompt("\nYour answer");
        if ($answer === prime($randNumber)) {
            line("Correct!");
        } else {
            falseAnswerName($name, $answer, prime($randNumber));
            return; 
        }
    }
    trueAnswerName($name);
}
