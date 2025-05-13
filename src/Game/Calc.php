<?php

namespace BrainGames\Games;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\{trueAnswerName, getAnswerAndVerify, getShowName};

function gameCalc(int $round = 3): void                       // Задаем количество раундов по умолчанию = 3
{

    $name = getShowName();                               // Знакомимся с пользователем и приветствуем его

    line("What is the result of the expression?");
    for ($i = 1; $i <= $round; $i++) {
        $randomNamber1 = rand(1, 100);
        $randomNamber2 = rand(1, 100);
        $randomOper = rand(1, 3);
        $result = 0;
        switch ($randomOper) {
            case 1:
                line("Question: {$randomNamber1} + {$randomNamber2}");
                $result = $randomNamber1 + $randomNamber2;
                break;
            case 2:
                line("Question: {$randomNamber1} - {$randomNamber2}");
                $result = $randomNamber1 - $randomNamber2;
                break;
            case 3:
                line("Question: {$randomNamber1} * {$randomNamber2}");
                $result = $randomNamber1 * $randomNamber2;
                break;
        }
        if (!getAnswerAndVerify($name, $result)) {          // проверяем ответ пользователя и выводим результат
            return;
        }
    }
    trueAnswerName($name);       // поздравляем пользователя в случае победы
}
