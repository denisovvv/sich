<?php
$filename = __DIR__.'/trueAnswers';
$array = file($filename);

$keys = array("q0c", "q1a", "q2b", "q3c", "q4a", "q5a", "q6b", "q7a");

$numberOfRightAns = 0;
for($num = 0; $num < count($array); $num++) {
    if (isset($_POST['q' . $num])){
        if($_POST['q'.$num] == $keys[$num]){
            $numberOfRightAns++;
        }
    }
}
$showResults = false;
//Пробежать по всем радиокнопкам и посмотреть есть ли хоть один ответ, если есть, то показать результаты теста
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
