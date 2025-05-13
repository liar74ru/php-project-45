<?php

namespace BrainGames\Games;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\{trueAnswerName, getAnswerAndVerify, getShowName};

function prime(int $randNumber): string            // функция для определения простого числа
{
    if ($randNumber < 2) {
        return 'no';
    } elseif ($randNumber === 2) {
        return 'yes';
    } elseif ($randNumber % 2 === 0) {
        return 'no';
    } else {
        for ($i = 3; $i <= sqrt($randNumber); $i += 2) {
            if ($randNumber % $i === 0) {
                return 'no';
            }
        }
    }
    return 'yes';
}

function gamePrime(int $round = 3): void                // Задаем количество раундов по умолчанию = 3
{
    $name = getShowName();                             // Знакомимся с пользователем и приветствуем его

    line('Answer "yes" if given number is prime. Otherwise answer "no".');
    for ($i = 1; $i <= $round; $i++) {
        $randNumber = rand(2, 50);                    // число для определения на простое
        line("Question: {$randNumber}");
        if (!getAnswerAndVerify($name, prime($randNumber))) {   // проверяем ответ пользователя и выводим результат
            return;
        }
    }
    trueAnswerName($name);         // поздравляем пользователя в случае победы
}
