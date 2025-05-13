<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;
use function BrainGames\Cli\getShowName;

function runGame(string $description, callable $generateRound, int $round = 3): void
{
    $name = getShowName();

    line($description);

    for ($i = 0; $i < $round; $i++) {
        [$question, $correctAnswer] = $generateRound();

        line("Question: {$question}");
        $userAnswer = prompt("Your answer");

        if ($userAnswer !== $correctAnswer) {
            line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
            line("Let's try again, {$name}!");
            return;
        }

        line("Correct!");
    }

    line("Congratulations, {$name}!");
}
