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
    return line("%b'{$answer}'%n is wrong answer ;%b(%n%r.%n Correct answer was %b'{$result}'%n%r.%n" .
     "\nLet's %btry again, {$name}!%n");
}
