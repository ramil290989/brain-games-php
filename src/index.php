<?php
/**
 * Программный файл хода игр
 * php version 8.1.2
 * 
 * @category Function
 * @package  Console
 * @author   Garifullin Ramil <garifullinramil290989@gmail.com>
 * @license  https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link     https://github.com/ramil290989/php-project-45
 */
namespace Project\Src\Index;

require_once __DIR__ . '/../vendor/autoload.php';

use function Project\Src\Greeting\greeting;
use function Project\Src\GetRoundsCount\getRoundsCount;
use function Project\Src\GetMessages\getMessages;
use function Project\Src\Games\Even\getEvenGameParams;
use function Project\Src\Games\Calc\getCalcGameParams;
use function Project\Src\Games\Gcd\getGcdGameParams;
use function Project\Src\Games\Progression\getProgressionGameParams;

/**
 * Функция запуска игры
 * 
 * @param $gameName функция принимает параметр название игры
 * 
 * @return ничего не возвращает
 */
function runGame($gameName)
{
    $roudsCount = getRoundsCount();
    $messages = getMessages($gameName);
    $userName = greeting();
    print_r($messages["gameRule"]($gameName));
    
    for ($i = 1; $i <= $roudsCount; $i += 1) {
        $gameParams = [
            "even" => getEvenGameParams(),
            "calc" => getCalcGameParams(),
            "gcd" => getGcdGameParams(),
            "progression" => getProgressionGameParams(),
        ];
        [$expression, $correctAnswer] = $gameParams[$gameName];
        print_r($messages["question"]($expression, $gameName));
        $userAnswer = mb_substr(fgets(STDIN), 0, -1);
        if ($userAnswer !== $correctAnswer) {
            print_r($messages["loss"]($userAnswer, $correctAnswer, $userName));
            return;
        }
        print_r($messages["correct"]);
    }
    print_r($messages["win"]($userName));
}