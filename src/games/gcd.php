<?php
/**
 * Программный файл игры нахождения наибольшего общего делителя двух чисел
 * php version 8.1.2
 * 
 * @category Function
 * @package  Console
 * @author   Garifullin Ramil <garifullinramil290989@gmail.com>
 * @license  https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link     https://github.com/ramil290989/php-project-45
 */
namespace Project\Src\Games\Gcd;

require_once __DIR__ . '/../../vendor/autoload.php';

use function Project\Src\GetRandomNumber\getRandomNumber;

/**
 * Фугкция нахождения наибольшего общего делителя двух чисел
 * 
 * @param $a первое число
 * @param $b второе число
 * 
 * @return int наибольший общий делитель
 */
function getGcd($a, $b)
{
    if (!$b) {
        return $a;
    }
    return getGcd($b, $a % $b);
}

/**
 * Функция возвращает параметры для игры определения наибольшего общего делителя
 * 
 * @return возвращает выражение для формирования вопроса и правильный ответ
 */
function getGcdGameParams()
{
    [$minNumber, $maxNumber] = [1, 100];
    $num1 = getRandomNumber($minNumber, $maxNumber);
    $num2 = getRandomNumber($minNumber, $maxNumber);
    $correctAnswer = getGcd($num1, $num2);
    $expression = "{$num1} и {$num2}";
    return [$expression, "{$correctAnswer}"];
}