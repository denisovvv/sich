<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
<form method="post" action="Results.php"">
<?php
$filename = __DIR__.'/questions';
$array = file($filename);

$filename1 = __DIR__.'/answers';
$array1 = file($filename1);

for($i = 0; $i < count($array); $i++){
    echo "<p>", $array[$i], "</p>";
    for($j = $i * 3; $j < $i * 3 + 3; $j++) {

        echo '<br><input type="radio" name="q'.$i.'" value="q'.$i.$array1[$j][0].'" /></br>'.$array1[$j];
    }
}
?>
    <button type="submit">Ответить</button>
</form>
</body>>
</html>