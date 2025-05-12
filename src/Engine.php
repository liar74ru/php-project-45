<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function getName(): string
{
    return prompt('May I have your name?');
}

function showName(string $name): void
{
    line("Hello, %s!", $name);
}

function trueAnswerName(string $name): void
{
    line("Congratulations, %s!", $name);
}

function falseAnswerName(string $name, string $answer, string $result): void
{
    line("'{$answer}' is wrong answer ;(. Correct answer was '{$result}'.");
    line("Let's try again, {$name}!");
}
