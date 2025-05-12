<?php

namespace BrainGames\Games;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\{trueAnswerName, falseAnswerName};

function gameProgression(int $round, string $name): void
{
    line('What number is missing in the progression?');
    for ($i = 1; $i <= $round; $i++) {
        $randLengthProg = rand(5, 10);                  # количество членов прогрессии
        $randMissingIndex = rand(1, $randLengthProg);       # номер искомого члена прогрессии
        $randStepProg = rand(2, 5);                     # шаг прогрессии
        $randStartProg = rand(2, 15);                   # Первый член прогрессии
        $current = $randStartProg;
        echo 'Question: ';
        for ($y = 1; $y <= $randLengthProg; $y++) {
            if ($y === $randMissingIndex) {
                $answerNumber = $current;
                echo '.. ';
            } else {
                echo "{$current} ";
            }
            $current += $randStepProg;
        }
        $answer = prompt("\nYour answer");
        if ($answer === (string) $answerNumber) {
            line("Correct!");
        } else {
            falseAnswerName($name, $answer, $answerNumber);
            return;
        }
    }
    trueAnswerName($name);
}
