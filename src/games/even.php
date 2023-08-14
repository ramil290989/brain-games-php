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

use function Project\Src\Greeting\greeting;
use function Project\Src\GetRoundsCount\getRoundsCount;
use function Project\Src\GetRandomNumber\getRandomNumber;
use function Project\Src\GetMessages\getMessages;

/**
 * Функция запуска игры
 * 
 * @return ничего не возвращает
 */
function runEvenGame()
{
    $roudsCount = getRoundsCount();
    $messages = getMessages("even");
    $userName = greeting();
    print_r($messages["gameRule"]);
    
    for ($i = 1; $i <= $roudsCount; $i += 1) {
        $num = getRandomNumber();
        $correctAnswer = $num % 2 === 0 ? "да" : "нет";
        print_r($messages["question"]($num));
        $userAnswer = mb_substr(fgets(STDIN), 0, -1);
        if ($userAnswer !== $correctAnswer) {
            print_r($messages["loss"]($userAnswer, $correctAnswer, $userName));
            return;
        }
        print_r($messages["correct"]);
    }
    print_r($messages["win"]($userName));
}