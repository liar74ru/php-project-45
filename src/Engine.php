<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function getName(): string
{
    return prompt('May I have your name?');
}

function showName(string $name)
{
    return line("Hello, %s!", $name);
}

function trueAnswerName($name)
{
    return line("Congratulations, %s!", $name);
}

function falseAnswerName($name, $answer, $result)
{
    line("'{$answer}' is wrong answer ;(. Correct answer was '{$result}'.");
    line("Let's try again, {$name}!");
}
