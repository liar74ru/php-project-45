<?php

namespace BrainGames\Games;

use function BrainGames\Engine\runGame;

function isCalc(int $randNumber1, int $randNumber2, string $oper): int
{
    switch ($oper) {
        case '+':
            return $randNumber1 + $randNumber2;
        case '-':
            return $randNumber1 - $randNumber2;
        case '*':
            return $randNumber1 * $randNumber2;
        default:
            throw new \Exception('Invalid operator');
    }
}
//Функция для генерации раунда игры "Калькулятор"
function generateCalcRound(): array
{
    // Генерация двух случайных чисел
    $randomNumber1 = rand(1, 100);
    $randomNumber2 = rand(1, 100);

    // Генерация случайной операции
    $oper = ['+', '-', '*'];
    $randomOper = $oper[array_rand($oper)];
    // Генерация пустого вопроса и ответа
    $result = null;
    $question = '';
    // Генерация вопроса и ответа в зависимости от операции
    $question = "{$randomNumber1} {$randomOper} {$randomNumber2}";
    $result = isCalc($randomNumber1, $randomNumber2, $randomOper);
    // Возвращаем вопрос и ответ
    return [$question, (string) $result];
}

//Функция для запуска игры "Калькулятор"
function playGameCalc(): void
{
    $description = 'What is the result of the expression?';

    runGame($description, function () {
        return generateCalcRound();
    });
}
