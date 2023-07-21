<?php
// Your PHP code to process the coin flip
$coinValue = rand(0, 1) == 0 ? 'Heads' : 'Tails';

// Return the result back to the JavaScript event
echo $coinValue;
?>