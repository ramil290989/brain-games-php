<?php
/**
 * Программный файл игры калькулятор
 * php version 8.1.2
 * 
 * @category Function
 * @package  Console
 * @author   Garifullin Ramil <garifullinramil290989@gmail.com>
 * @license  https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link     https://github.com/ramil290989/php-project-45
 */
namespace Project\Src\Games\Calc;

require_once __DIR__ . '/../../vendor/autoload.php';

use function Project\Src\GetRandomNumber\getRandomNumber;

/**
 * Функция возвращает параметры для игры калькулятор
 * 
 * @return возвращает выражение для формирования вопроса и правильный ответ
 */
function getCalcGameParams()
{
    $operators = ["+", "-", "*"];
    $operatorsMaxIndex = count($operators) - 1;    
    [$minNumber, $maxNumber] = [0, 10];
    $numA = getRandomNumber($minNumber, $maxNumber);
    $numB = getRandomNumber($minNumber, $maxNumber);
    $operator = $operators[getRandomNumber($minNumber, $operatorsMaxIndex)];
    $correctAnswer = 0;

    switch ($operator) {
    case "+":
        $correctAnswer = $numA + $numB;
        break;
    case "-":
        $correctAnswer = $numA - $numB;
        break;
    case "*":
        $correctAnswer = $numA * $numB;
        break;
    }

    $expression = "{$numA} {$operator} {$numB}";

    return [$expression, "{$correctAnswer}"];
}