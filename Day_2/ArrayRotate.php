<?php

class ArrayRotate
{
    function rotate($arr, $pos){
        if(count($arr) == 0){
            return null;
        }else if($pos == 0){
            return $arr;
        }else {
            for($i = 0; $i < $pos; $i++) {
                $val = array_pop($arr);
                array_unshift($arr, $val);
            }
        }
        
        //print_r($arr);
        return $arr;
    }
    
    
}

$arr = [1, 2, 3, 4];

$obj = new ArrayRotate();
print_r($obj -> rotate($arr, 1));
print_r($obj -> rotate($arr, 2));
print_r($obj -> rotate($arr, 2));

?>