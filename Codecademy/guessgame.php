<?php
$play_count = 0;
$correct_guesses = 0;
$guess_high = 0;
$guess_low = 0;

echo "I'm going to think of numbers between 1 and 10 (inclusive). Do you think you can guess correctly?\n";

function guessNumber(){
global $guess_high, $guess_low, $correct_guesses, $play_count;
$play_count++;
$magic = rand(1,10);
echo "\nWhat is your guess?\n";
 $guess = intval(readline(">> "));
 echo "\nround " . $play_count . " your guess ". $guess . " my guess " . $magic;
if($guess > 10){
   echo "\n To high try again."; 
 guessNumber();
};
if($guess < 0){
   echo "\n To low try again."; 
 guessNumber();
};
 if ($guess === $magic) {
  $correct_guesses++;
} elseif ($guess > $magic) {
  $guess_high++;
} elseif ($guess < $magic) {
   $guess_low++;}
   $percent_correct = $correct_guesses/$play_count * 100;
   echo "\n" . $percent_correct;
};

guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();

if ($guess_high > $guess_low){
    echo "\n When you guessed wrong, you tended to guess high";
} else if ($guess_high < $guess_low) {
    echo "\n When you guessed wrong, you tended to guess low";
};