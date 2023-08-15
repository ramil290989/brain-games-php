<?php
/**
 * Программный файл игры проверки числа на четность
 * php version 8.1.2
 * 
 * @category Function
 * @package  Console
 * @author   Garifullin Ramil <garifullinramil290989@gmail.com>
 * @license  https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link     https://github.com/ramil290989/php-project-45
 */
namespace Project\Src\Games\Even;

require_once __DIR__ . '/../../vendor/autoload.php';

use function Project\Src\GetRandomNumber\getRandomNumber;

/**
 * Функция возвращает параметры для игры определения четности числа
 * 
 * @return возвращает выражение для формирования вопроса и правильный ответ
 */
function getEvenGameParams()
{
    [$minNumber, $maxNumber] = [0, 10];
    $num = getRandomNumber($minNumber, $maxNumber);
    $expression = "{$num}";
    $correctAnswer = $num % 2 === 0 ? "да" : "нет";
    return [$expression, $correctAnswer];
}