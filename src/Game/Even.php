<?php

namespace BrainGames\Games;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\{trueAnswerName, getAnswerAndVerify, getShowName};

function gameEven(int $round = 3): void
{
    $name = getShowName();                               // Знакомимся с пользователем и приветствуем его

    line('Answer "yes" if the number is even, otherwise answer "no".');
    for ($i = 1; $i <= $round; $i++) {
        $randomNamber1 = rand(1, 100);
        $answerTrue = ($randomNamber1 % 2) === 0 ? 'yes' : 'no';
        line("Question: {$randomNamber1}");
        if (!getAnswerAndVerify($name, $answerTrue)) {        // проверяем ответ пользователя и выводим результат
            return;
        }
    }
    trueAnswerName($name);      // поздравляем пользователя в случае победы
}
