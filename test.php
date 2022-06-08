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
        $questions = file($filename);

        $filename1 = __DIR__.'/trueAnswers';
        $trueAnswers = file($filename1);

        $answerTextFile = __DIR__.'/answers';
        $answerText = file($answerTextFile);
        $k = 0;
        for ($i = 0; $i < count($questions); $i++){

            echo "<p>".$questions[$i]."</p><br>";

            for ($j = 0; $j < 3; $j++) {
                echo '<input type="radio" name="q'.$i.'" value="q'.$i.$j.'"/>'.$answerText[$k++].'<br>';
            }
        }
    ?>
<button type="submit">Ответить</button>
</form>
</body>
</html>
