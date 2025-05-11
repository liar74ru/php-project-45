<?php

namespace BrainGames\Games;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\{trueAnswerName, falseAnswerName};

function gameCalc($round, $name)
{
    line('What is the result of the expression?' . "\n");
    for ($i = 1; $i <= $round; $i++) {
        $randomNamber1 = rand(1, 100);
        $randomNamber2 = rand(1, 100);
        $randomOper = rand(1, 3);
        switch ($randomOper) {
            case '1':
                line("Question: {$randomNamber1} + {$randomNamber2}");
                $result = $randomNamber1 + $randomNamber2;
                break;
            case '2':
                line("Question: {$randomNamber1} - {$randomNamber2}");
                $result = $randomNamber1 - $randomNamber2;
                break;
            case '3':
                line("Question: {$randomNamber1} %r*%n {$randomNamber2}");
                $result = $randomNamber1 * $randomNamber2;
                break;
        }
        $answer = prompt("Your answer");
        if ($answer == $result) {
            echo "Correct!\n";
        } else {
            return falseAnswerName($name, $answer, $result);
        }
    }
    return trueAnswerName($name);
}
