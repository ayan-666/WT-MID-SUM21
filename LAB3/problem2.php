<?php 
    $marks = 70;

    if($marks >= 90){
        echo "A+";
    }
    elseif($marks >= 80){
        echo "A";
    }
    elseif($marks >= 70){
        echo "B";
    }
    elseif($marks >= 60){
        echo "C";
    }
    else{
        echo "The grade is F";
    }
?>