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

use function Project\Src\Greeting\greeting;
use function Project\Src\GetRoundsCount\getRoundsCount;
use function Project\Src\GetRandomNumber\getRandomNumber;
use function Project\Src\GetMessages\getMessages;

/**
 * Функция запуска игры
 * 
 * @return ничего не возвращает
 */
function runCalcGame()
{
    $gameName = "calc";
    $roudsCount = getRoundsCount();
    $operators = ["+", "-", "*"];
    $operatorsLength = count($operators) - 1;
    $messages = getMessages($gameName);
    $userName = greeting();
    print_r($messages["gameRule"]($gameName));
    
    for ($i = 1; $i <= $roudsCount; $i += 1) {
        [$minNumber, $maxNumber] = [0, 10];
        $numA = getRandomNumber($minNumber, $maxNumber);
        $numB = getRandomNumber($minNumber, $maxNumber);
        $operator = $operators[getRandomNumber($minNumber, $operatorsLength)];
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
        print_r($messages["question"]($expression, $gameName));
        $userAnswer = mb_substr(fgets(STDIN), 0, -1);
        if ((int)$userAnswer !== $correctAnswer) {
            print_r($messages["loss"]($userAnswer, $correctAnswer, $userName));
            return;
        }
        print_r($messages["correct"]);
    }
    print_r($messages["win"]($userName));
}