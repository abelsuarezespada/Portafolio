<?php
$edad = (1) ;
if ($edad < 18) {
    echo "Ets menor d'edat, no pots accedir.\n";
} elseif ($edad < 65) {
    echo "Ets major d'edat, pots accedir.\n";
} else {
    echo "Ets jubilat, tens 20% de descompte.\n";
}