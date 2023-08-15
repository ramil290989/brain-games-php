<?php
/**
 * Программный файл игры арифметическая прогрессия
 * php version 8.1.2
 * 
 * @category Function
 * @package  Console
 * @author   Garifullin Ramil <garifullinramil290989@gmail.com>
 * @license  https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link     https://github.com/ramil290989/php-project-45
 */
namespace Project\Src\Games\Progression;

require_once __DIR__ . '/../../vendor/autoload.php';

use function Project\Src\GetRandomNumber\getRandomNumber;

/**
 * Функция возвращает параметры для игры арифметическая прогрессия
 * 
 * @return возвращает выражение для формирования вопроса и правильный ответ
 */
function getProgressionGameParams()
{
    [$minNumber, $maxNumber] = [0, 10];
    $firstNum = getRandomNumber($minNumber, $maxNumber);

    [$minArrLen, $maxArrLen] = [5, 10];
    $arrLen = getRandomNumber($minArrLen, $maxArrLen);
    
    [$minHideIndex, $maxHideIndex] = [0, $arrLen - 1];
    $hideIndex = getRandomNumber($minHideIndex, $maxHideIndex);
    
    [$minStep, $maxStep] = [1, 10];
    $step = getRandomNumber($minStep, $maxStep);
    
    $progression = array($firstNum);

    for ($i = 1; $i < $arrLen; $i += 1) {
        $progression[$i] = $progression[$i - 1] + $step;
    }
    
    $correctAnswer = "{$progression[$hideIndex]}";
    $progression[$hideIndex] = "...";
    $expression = implode(", ", $progression);

    return [$expression, $correctAnswer];
}