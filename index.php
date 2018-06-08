<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php

        if(empty($_GET['valueA']) || empty($_GET['valueB'])){
            echo '<div>Cannot calculate without values</div>';
        }
        if($_GET['valueA'] == 0 || $_GET['valueB'] == 0){
            echo '<div>Divide by zero</div>';
        }
        else {
            $a = $_GET['valueA'];
            $b = $_GET['valueB'];
            $ch = $_GET['checkbox'];
            $r = $_GET['stav'];
            if ($ch) {
                if ($r == 1) {
                    $res = $a+$b;
                    echo '<div>ADD | '.$a.'+'.$b.'='.$res.'</div>';
                    $res = $a-$b;
                    echo '<div>SUB | '.$a.'-'.$b.'='.$res.'</div>';
                }
                else if($r == 2){
                    $res = $a*$b;
                    echo '<div>MUL | '.$a.'*'.$b.'='.$res.'</div>';
                    $res = $a/$b;
                    echo '<div>DIV | '.$a.'/'.$b.'='.$res.'</div>';
                }
            }
            else {
                echo '<div>Je potrebne suhlasit s vypoctom.</div>';
            }
        }
    ?>
</body>
</html>