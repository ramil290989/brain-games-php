<?php
/**
 * Файл с функцией приветствия пользователя
 * php version 8.1.2
 * 
 * @category Function
 * @package  Console
 * @author   Garifullin Ramil <garifullinramil290989@gmail.com>
 * @license  https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link     https://github.com/ramil290989/php-project-45
 */
namespace Project\Src\Greeting;

/**
 * Функция приветствия пользователя, возвращает имя пользователя
 * 
 * @return userName
 */
function greeting()
{
    $welcomeMessage = "Добро пожаловать в логическую игру!";
    $requestName = "Введи пожалуйста свое имя:";
    print_r("{$welcomeMessage}\n{$requestName} ");
    $userName = mb_substr(fgets(STDIN), 0, -1);
    $greetingMessage = "Привет {$userName}!\n";
    print_r($greetingMessage);
    return $userName;
}