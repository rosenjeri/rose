<?php
$t = date("H");
if ($t < "10"){
    echo "GOOD Morning";
} elseif ($t < "20"){
    echo "Have a nice Evening";
} else {
    echo "Have a Good Night";
}
?>
