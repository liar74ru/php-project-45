<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function getShowName(): string                  // Знакомимся с пользователем и приветствуем его
{
    line("Welcome to the Brain Game!");
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return $name;
}

function trueAnswerName(string $name): void          // поздравляем пользователя в случае победы
{
    line("Congratulations, %s!", $name);
}

function getAnswerAndVerify(string $name, string $result): bool // проверяем ответ пользователя
{
    $answer = prompt("Your answer");
    if ($answer === $result) {
        line("Correct!");
        return true;
    } else {
        line("'{$answer}' is wrong answer ;(. Correct answer was '{$result}'.");
        line("Let's try again, {$name}!");
        return false;
    }
}
