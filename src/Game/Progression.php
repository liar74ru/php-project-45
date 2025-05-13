<?php

namespace BrainGames\Games;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\{trueAnswerName, getAnswerAndVerify, getShowName};

function gameProgression(int $round = 3): void          //задаем количество раундов по умолчанию = 3
{
    $name = getShowName();                               //Знакомимся с пользователем и приветствуем его

    line('What number is missing in the progression?');

    for ($i = 1; $i <= $round; $i++) {
        $randLengthProg = rand(5, 10);                  // количество членов прогрессии
        $randMissingIndex = rand(1, $randLengthProg);   // номер искомого члена прогрессии
        $randStepProg = rand(2, 5);                     // шаг прогрессии
        $randStartProg = rand(2, 15);                   // Первый член прогрессии
        $current = $randStartProg;
        $answerNumber = 0;
        echo 'Question: ';
        for ($y = 1; $y <= $randLengthProg; $y++) {
            if ($y === $randMissingIndex) {
                $answerNumber = $current;
                echo '.. ';
            } else {
                echo "{$current} ";
            }
            $current += $randStepProg;
        }
        echo "\n";
        if (!getAnswerAndVerify($name, (string) $answerNumber)) {   // проверяем ответ пользователя и выводим результат
            return;
        }
    }
    trueAnswerName($name);          // поздравляем пользователя в случае победы
}
