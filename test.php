<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" action="results.php">
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
</body>
</html>
