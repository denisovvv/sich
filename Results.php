<?php
$keys = array("q02", "q10", "q21", "q32", "q40", "q50", "q61", "q70");

$numberOfRightAns = 0;
for($num = 0; $num < count($keys); $num++) {
    if (isset($_POST['q' . $num])){
        if($_POST['q'.$num] == $keys[$num]){
            $numberOfRightAns++;
        }
    }
}

for($i = 0; $i < count($keys); $i++) {
    if(isset($_POST['q'.$i])) {
        $showResults = True;
        break;
    }
    else {
        $showResults = False;
    }
}
echo "Количество правильных ответов ".$numberOfRightAns."  из 8";
