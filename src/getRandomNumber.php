<?php
/**
 * Файл с функцией генерации случайного числа
 * php version 8.1.2
 * 
 * @category Function
 * @package  Console
 * @author   Garifullin Ramil <garifullinramil290989@gmail.com>
 * @license  https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link     https://github.com/ramil290989/php-project-45
 */
namespace Project\Src\GetRandomNumber;

/**
 * Функция генерации случайного числа, возвращает случайное число
 * 
 * @param $min - минимальное число
 * @param $max - максимальное число
 * 
 * @return int случайное число
 */
function getRandomNumber($min, $max)
{
    return rand($min, $max);
}