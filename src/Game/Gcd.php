<?php

namespace BrainGames\Gcd;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\{trueAnswerName, falseAnswerName};

function gameGcd($round, $name)
{
    line('Find the greatest common divisor of given numbers.');
    for ($i = 1; $i <= $round; $i++) {
        $randomNamber1 = rand(1, 100);
        $randomNamber2 = rand(1, 100);
        line("Question: {$randomNamber1} {$randomNamber2}");
        $answer = prompt("Your answer");
        while ($randomNamber2 != 0) {
            $temp = $randomNamber2;
            $randomNamber2 = $randomNamber1 % $randomNamber2;
            $randomNamber1 = $temp;
        }
        if ($answer == $randomNamber1) {
            echo "Correct!\n";
        } else {
            return falseAnswerName($name, $answer, $randomNamber1);
        }
    }
    return trueAnswerName($name);
}
