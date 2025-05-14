<?php

namespace BrainGames\Games;

use function BrainGames\Engine\runGame;

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
    
    switch ($randomOper) {
        case '+':
            $question = "{$randomNumber1} + {$randomNumber2}";
            $result = $randomNumber1 + $randomNumber2;
            break;
        case '-':
            $question = "{$randomNumber1} - {$randomNumber2}";
            $result = $randomNumber1 - $randomNumber2;
            break;
        case '*':
            $question = "{$randomNumber1} * {$randomNumber2}";
            $result = $randomNumber1 * $randomNumber2;
            break;
        default:
            echo "Unknown operation: {$randomOper}\n";
            return [$question, $result];
    }
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
