### Hexlet tests and linter status:
[![Actions Status](https://github.com/liar74ru/php-project-45/actions/workflows/hexlet-check.yml/badge.svg)](https://github.com/liar74ru/php-project-45/actions)

[![Quality Gate Status](https://sonarcloud.io/api/project_badges/measure?project=liar74ru_php-project-45&metric=alert_status)](https://sonarcloud.io/summary/new_code?id=liar74ru_php-project-45) [![Bugs](https://sonarcloud.io/api/project_badges/measure?project=liar74ru_php-project-45&metric=bugs)](https://sonarcloud.io/summary/new_code?id=liar74ru_php-project-45) [![Code Smells](https://sonarcloud.io/api/project_badges/measure?project=liar74ru_php-project-45&metric=code_smells)](https://sonarcloud.io/summary/new_code?id=liar74ru_php-project-45) [![Duplicated Lines (%)](https://sonarcloud.io/api/project_badges/measure?project=liar74ru_php-project-45&metric=duplicated_lines_density)](https://sonarcloud.io/summary/new_code?id=liar74ru_php-project-45) [![Lines of Code](https://sonarcloud.io/api/project_badges/measure?project=liar74ru_php-project-45&metric=ncloc)](https://sonarcloud.io/summary/new_code?id=liar74ru_php-project-45)

[![Reliability Rating](https://sonarcloud.io/api/project_badges/measure?project=liar74ru_php-project-45&metric=reliability_rating)](https://sonarcloud.io/summary/new_code?id=liar74ru_php-project-45) [![Security Rating](https://sonarcloud.io/api/project_badges/measure?project=liar74ru_php-project-45&metric=security_rating)](https://sonarcloud.io/summary/new_code?id=liar74ru_php-project-45) [![Technical Debt](https://sonarcloud.io/api/project_badges/measure?project=liar74ru_php-project-45&metric=sqale_index)](https://sonarcloud.io/summary/new_code?id=liar74ru_php-project-45) [![Maintainability Rating](https://sonarcloud.io/api/project_badges/measure?project=liar74ru_php-project-45&metric=sqale_rating)](https://sonarcloud.io/summary/new_code?id=liar74ru_php-project-45) [![Vulnerabilities](https://sonarcloud.io/api/project_badges/measure?project=liar74ru_php-project-45&metric=vulnerabilities)](https://sonarcloud.io/summary/new_code?id=liar74ru_php-project-45)

## Описание проекта

**php-project-45** — это набор консольных игр, разработанных на PHP. Каждая игра предлагает пользователю решить определённую задачу. Если пользователь отвечает правильно на три вопроса подряд, он выигрывает. В случае ошибки игра завершается.

---

## Установка

1.  Склонируйте репозиторий:
    ```bash
    git clone https://github.com/liar74ru/php-project-45.git
2.  Перейдите в директорию проекта:
    cd php-project-45
3.  Установите зависимости с помощью Composer:
    make install

---

## Игры

1.  Чётное или нечётное (brain-even)
    Определите, является ли число чётным.

    Запуск:
    make brain-even

    Демонстрация (четный/нечетный):
[![asciicast](https://asciinema.org/a/rQr1gX4Z93LaN5o1jKXX48sRd.svg)](https://asciinema.org/a/rQr1gX4Z93LaN5o1jKXX48sRd)

2.  Калькулятор (brain-calc)
    Вычислите результат математического выражения.

    Запуск:
    make brain-calc

    Демонстрация Калькулятор:
[![asciicast](https://asciinema.org/a/iAJ880HqGwrVEc2vtJztBGMEO.svg)](https://asciinema.org/a/iAJ880HqGwrVEc2vtJztBGMEO)

3.  НОД (brain-gcd)
    Найдите наибольший общий делитель двух чисел.

    Запуск:
    make brain-gcd

    Демонстрация Поиск НОД:
[![asciicast](https://asciinema.org/a/JJqY9TC290ypY1fueAyhJkMin.svg)](https://asciinema.org/a/JJqY9TC290ypY1fueAyhJkMin)

4.  Арифметическая прогрессия (brain-progression)
    Найдите пропущенное число в арифметической прогрессии.

    Запуск:
    make brain-progression

    Демонстрация Арифметическая прогрессия:
[![asciicast](https://asciinema.org/a/9zt5HW5aer9G6wcpeyBynLTuX.svg)](https://asciinema.org/a/9zt5HW5aer9G6wcpeyBynLTuX)

5.  Простое число (brain-prime)
    Определите, является ли число простым.

    Запуск:
    make brain-prime

    Демонстрация Простое число:
[![asciicast](https://asciinema.org/a/MoImikMTL4exttq9WKCQkev0z.svg)](https://asciinema.org/a/MoImikMTL4exttq9WKCQkev0z)

## Тестирование
    Для проверки кода на соответствие стандартам PSR-12 выполните:
    make lint

## Требования
    PHP >= 8.0
    Composer