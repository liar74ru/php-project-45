<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

function getName(): string
{
    return prompt('May I have your name?');
}

function showName(string $name): string
{
    return line("Hello, %s!", $name);
}
