<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

function getShowName(): string               // Знакомимся с пользователем и приветствуем его
{
    line("Welcome to the Brain Game!");
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return $name;
}
