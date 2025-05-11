<?php

namespace BrainGames\Games;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\{trueAnswerName, falseAnswerName};

function gameProgression($round, $name)
{
    line('What number is missing %rin%n the progression?');
    for ($i = 1; $i <= $round; $i++) {
        $randLengthProg = rand(5, 10);                  # количество членов прогрессии
        $randMissingIndex = rand(1, $randLengthProg);       # номер искомого члена прогрессии
        $randStepProg = rand(2, 5);                     # шаг прогрессии
        $randStartProg = rand(2, 15);                   # Первый член прогрессии
        $current = $randStartProg;
        echo 'Question: ';
        for ($y = 1; $y <= $randLengthProg; $y++) {
            if ($y == $randMissingIndex) {
                $answerNumber = $current;
                echo '.. ';
            } else {
                echo "{$current} ";
            }
            $current += $randStepProg;
        }
        $answer = prompt("\nYour answer");
        if ($answer == $answerNumber) {
            line("Correct!");
        } else {
            return falseAnswerName($name, $answer, $answerNumber);
        }
    }
    return trueAnswerName($name);
}
