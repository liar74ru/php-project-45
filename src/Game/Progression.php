<?php

namespace BrainGames\Games;

use function BrainGames\Engine\runGame;

// Функция для генерации раунда игры "Арифметическая прогрессия"
function generateProgressionRound(): array
{
    $randLengthProg = rand(5, 10);                  // количество членов прогрессии
    $randMissingIndex = rand(1, $randLengthProg);   // номер искомого члена прогрессии
    $randStepProg = rand(2, 5);                     // шаг прогрессии
    $randStartProg = rand(2, 15);                   // Первый член прогрессии
    $current = $randStartProg;
    $answerNumber = 0;
    $question = '';
    for ($y = 1; $y <= $randLengthProg; $y++) {
        if ($y === $randMissingIndex) {
            $answerNumber = $current;
            $question .= '.. ';
        } else {
            $question .= "{$current} ";
        }
        $current += $randStepProg;
    }
    return [$question, (string) $answerNumber];
}

// Функция для запуска игры "Арифметическая прогрессия"
function playGameProgression(): void
{
    $description = 'What number is missing in the progression?';
    runGame($description, function () {
        return generateProgressionRound();
    });
}
