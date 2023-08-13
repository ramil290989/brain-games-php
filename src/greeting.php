<?php
namespace Project\Src\Greeting;

function greeting()
{
  print_r("Welcome to the Brain Games!\n");
  print_r("May I have your name? ");
  $userName = mb_substr(fgets(STDIN), 0, -1);
  print_r("Hi {$userName}! \n");
}