<?php
$ot = 0;
$not = 0;
print_r($_POST);
$q1 = $_POST['q1'];
$q2 = $_POST['q2'];
$q3 = $_POST['q3'];
$q4 = $_POST['q4'];
$q5 = $_POST['q5'];
$q6 = $_POST['q6'];
$q7 = $_POST['q7'];
$q8 = $_POST['q8'];

$result = 0;

if($q1 == 'c')
{
    $result+=15;
    $ot++;
}else{
    $not++;
}
if($q2 == 'a')
{
    $result+=10;
    $ot++;
}else{
    $not++;
}
if($q3 == 'b')
{
    $result+=10;
    $ot++;
}else{
    $not++;
}
if($q4 == 'c')
{
    $result+=15;
    $ot++;
}else{
    $not++;
}
if($q5 == 'a')
{
    $result+=10;
    $ot++;
}else{
    $not++;
}
if($q6 == 'a')
{
    $result+=15;
    $ot++;
}else{
    $not++;
}
if($q7 == 'b')
{
    $result+=10;
    $ot++;
}else{
    $not++;
}
if($q8 == 'a')
{
    $result+=15;
    $ot++;
}else{
    $not++;
}
echo "<center>Правильных ответов: <strong>$ot</strong></center>";
echo "<center>Неправильных ответов: <strong>$not</strong></center>";
echo "<center>Вы прошли тест на <strong>$result</strong> баллов из 100</center>";
?>
