<?php
$filename = __DIR__.'/trueAnswers';
$array = file($filename);

$keys = array("q0c", "q1a", "q2b", "q3c", "q4a", "q5a", "q6b", "q7a");

$numberOfRightAns = array(8);
for($num = 0; $num < count($array); $num++) {
    if (isset($_POST['q' . $num])){
        if($_POST['q'.$num] == $keys[$num]){
            $numberOfRightAns[$num]++;
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
$yourResults = array('');
for($i = 0; $i < $numberOfRightAns; $i++) {
    if ($numberOfRightAns[$i] == 0) {
        $yourResults[$i] = 'Вы не ответили правильно не на один вопрос';
    } else if ($numberOfRightAns[$i] == 1) {
        $yourResults[$i] = 'Ваши баллы : 1 из 8';
    } else if ($numberOfRightAns[$i] == 2) {
        $yourResults[$i] = 'Ваши баллы : 2 из 8';
    } else if ($numberOfRightAns[$i] == 3) {
        $yourResults[$i] = 'Ваши баллы : 3 из 8';
    } else if ($numberOfRightAns[$i] == 4) {
        $yourResults[$i] = 'Ваши баллы : 4 из 8';
    } else if ($numberOfRightAns[$i] == 5) {
        $yourResults[$i] = 'Ваши баллы : 5 из 8';
    } else if ($numberOfRightAns[$i] == 6) {
        $yourResults[$i] = 'Ваши баллы : 6 из 8';
    } else if ($numberOfRightAns[$i] == 7) {
        $yourResults[$i] = 'Ваши баллы : 7 из 8';
    } else if ($numberOfRightAns[$i] == 8) {
        $yourResults[$i] = 'Ваши баллы : 8 из 8';
    }
}
if($showResults = true) {
    for ($i = 0; $i < count($yourResults); $i++) {
        echo "<p>$yourResults[$i] </p>";
    }
} else{
    echo "<form method='post'>";
    echo "<input type='submit' value='Пройти тест еще раз'>";
    echo "</form>";
}
?>