<?php
/**
 * Файл с функцией возврата массива с сообщениями для определенной игры
 * php version 8.1.2
 * 
 * @category Function
 * @package  Console
 * @author   Garifullin Ramil <garifullinramil290989@gmail.com>
 * @license  https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link     https://github.com/ramil290989/php-project-45
 */
namespace Project\Src\GetMessages;

/**
 * Функция принимает параметр "название игры",
 * возвращает маассив с сообщениями для указанной игры
 * 
 * @param $gameName параметр "название игры"
 * 
 * @return array
 */
function getMessages($gameName)
{
    $messages = array(
        "gameRule" => function ($gameName) {
            switch ($gameName) {
            case "even":
                return "Отвечай \"да\" если число четное, если число нечетное отвечай \"нет\".\n";
            case "calc":
                return "Реши пример и введи ответ.\n";
            }
        },
        "question" => function ($expression, $gameName) {
            switch ($gameName) {
            case "even":
                return "Число {$expression} четное?\nОтвет: ";
            case "calc":
                return "Реши пример: {$expression} = ";
            }
        },
        "loss" => function ($userAnswer, $correctAnswer, $userName) {
            return "'{$userAnswer}' неправильный ответ, правильный ответ '{$correctAnswer}'.\nПопробуй еще раз, ${userName}.\n";
        },
        "correct" => "Правильно!\n",
        "win" => function ($userName) {
            return "Поздравляю с победой, {$userName}!\n";
        }
    );

    return $messages;
}