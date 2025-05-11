<?php

namespace BrainGames\Games;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\{trueAnswerName, falseAnswerName};

function Prime($randNumber)
{
    if ($randNumber <= 2) {
            return 'no';
    } elseif ($randNumber % 2 === 0) {
        return 'yes';
    } else {
        for ($i = 3; $i <= sqrt($randNumber); $i += 2) {
            if ($randNumber % $i === 0) {
                return 'yes';
            }
        }
    }
    return 'no';
}

function gamePrime($round, $name)
{
    line('Answer "yes" %rif%n given number is prime. Otherwise answer "no".');
    for ($i = 1; $i <= $round; $i++) {
        $randNumber = rand(2, 50);                  # число для определения на простое
        echo 'Question: ' . $randNumber;
        $answer = prompt("\nYour answer");
        if ($answer === Prime($randNumber)) {
            echo "Correct!\n";
        } else {
            return falseAnswerName($name, $answer, Prime($randNumber));
        }
    }
    return trueAnswerName($name);
}
