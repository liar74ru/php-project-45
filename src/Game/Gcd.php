<?php

namespace BrainGames\Games;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\{trueAnswerName, getAnswerAndVerify, getShowName};

function gameGcd(int $round = 3): void                   // Задаем количество раундов по умолчанию = 3
{
    $name = getShowName();                               // Знакомимся с пользователем и приветствуем его

    line('Find the greatest common divisor of given numbers.');
    for ($i = 1; $i <= $round; $i++) {
        $randomNamber1 = rand(1, 100);
        $randomNamber2 = rand(1, 100);
        line("Question: {$randomNamber1} {$randomNamber2}");
        while ($randomNamber2 !== 0) {
            $temp = $randomNamber2;
            $randomNamber2 = $randomNamber1 % $randomNamber2;
            $randomNamber1 = $temp;
        }
        if (!getAnswerAndVerify($name, (string) $randomNamber1)) {   // проверяем ответ пользователя и выводим результат
            return;
        }
    }
    trueAnswerName($name);        // поздравляем пользователя в случае победы
}
