<?php

namespace BrainGames\even;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\{getName, showName, congretName};

function gameEven($round, $name)
{
    line('Answer %b"yes"%n %rif%n the number is even, otherwise answer %b"no"%n.' . "\n");
    for ($i = 1; $i <= $round; $i++) {
        $n = rand(1, 100);
        $answer = prompt("Question: {$n}");
        if ((($n % 2) === 0 && $answer === 'yes') || (($n % 2) !== 0 && $answer === 'no')) {
            echo "Correct!\n";
        } else {
            echo " 'yes' is wrong answer ;(. Correct answer was 'no'. Let's try again, {$name}!\n";
            return false;
        }
    }
    echo "Congratulations, {$name}!\n";
    return true;
}
