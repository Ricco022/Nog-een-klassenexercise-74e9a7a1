<?php

$klasgenoten = readline ("Wie zitten er bij jou in de klas?");

$namen = explode(" ", $klasgenoten);

echo "De studenten in de klas zijn:" . PHP_EOL;

foreach ($namen as $vriend) {
    print($vriend . PHP_EOL);
}

?>