<?php
namespace Project\Src\Games\Even;

require_once(__DIR__ . '/../greeting.php');

use function Project\Src\Greeting\greeting;

function runEvenGame()
{
  $gameRule = "Answer \"yes\" if the number is even, otherwise answer \"no\".\n";
  greeting();
  print_r($gameRule);
}