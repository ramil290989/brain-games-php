#!/usr/bin/env php
<?php
/**
 * Исполняемый файл игры проверки числа на четность
 * php version 8.1.2
 * 
 * @category Run
 * @package  Console
 * @author   Garifullin Ramil <garifullinramil290989@gmail.com>
 * @license  https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link     https://github.com/ramil290989/php-project-45
 */
require_once __DIR__ . '/../vendor/autoload.php';

use function Project\Src\Games\Even\runEvenGame;

runEvenGame();