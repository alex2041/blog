<?php
	$arr1 = array(
                    "1" => "1",
                    "2" => "2"
                );
                
    print_r($arr1);
    echo '<br>';
    $arr2 = array(
                    "3" => "3",
                    "4" => "4"
                );
    
    print_r($arr2);
    echo '<br>';
    $e = $arr1+$arr2;
    print_r($e);
    echo '<br>';
    $ars = serialize($e);
    echo '<hr>'.$ars;     
?>