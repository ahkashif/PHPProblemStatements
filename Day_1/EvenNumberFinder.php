<?php
class EvenNumberFinder
{
    function checkEvenNumber ($num) {
        if($num%2 == 0) {
            return true;
        } else {
            return false;
        }
    }
}
$odd = new EvenNumberFinder();
$odd->checkEvenNumber (23);
?>
