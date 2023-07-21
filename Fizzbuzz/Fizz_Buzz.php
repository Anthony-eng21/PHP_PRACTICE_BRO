<?php
//yet another challenge
for ($i = 0; $i < 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0)
        echo "Fizz-Buzz";
    else if ($i % 3 == 0)
        echo "Fizz";
    else if ($i % 5 == 0)
        echo "buzz";
    else
        echo $i;
    echo "<br>"; //dont forget to add this lol
}
