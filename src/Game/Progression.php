<?php

namespace BrainGames\Games;

use function BrainGames\Engine\runGame;

// Функция для создания арифметической прогрессии
function createProgression(int $start, int $step, int $length): array
{
    $progression = [];
    for ($i = 0; $i < $length; $i++) {
        $progression[] = $start + ($i * $step);
    }
    return $progression;
}

// Функция для генерации раунда игры "Арифметическая прогрессия"
function generateProgressionRound(): array
{
    $randLengthProg = rand(5, 10);                  // количество членов прогрессии
    $randMissingIndex = rand(1, $randLengthProg);   // номер искомого члена прогрессии
    $randStepProg = rand(2, 5);                     // шаг прогрессии
    $randStartProg = rand(2, 15);                   // начальный член прогрессии
    // создаем прогрессию
    $progression = createProgression($randStartProg, $randStepProg, $randLengthProg);
    $answerNumber = $progression[$randMissingIndex - 1];
    // заменяем искомый член прогрессии на '..'
    $progression[$randMissingIndex - 1] = '..';
    // формируем вопрос
    $question = implode(' ', $progression);
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
