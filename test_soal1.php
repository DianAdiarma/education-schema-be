<?php
for ($i = 1; $i <= 200; $i++) {
    if ($i % 5 == 0 && $i % 11 == 0) {
        echo "FizzBuzz <br/>";
    } elseif ($i % 5 == 0) {
        echo "Fizz <br/>";
    } elseif ($i % 11 == 0) {
        echo "Buzz <br/>";
    } else {
        echo $i . "<br/>";
    }
}