<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHPkadai_005</title>
</head>
<body>
  <p>  
    <?php
$score1 = 80;
$score2 = 60;
$score3 = 55;
$score4 = 40;
$score5 = 100;
$score6 = 25;
$score7 = 80;
$score8 = 95;
$score9 = 30;
$score10 = 60;

echo '合計値:';
//合計値
$score_sum = $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10;
echo $score_sum;

echo '<br>';

echo '平均値:';
//平均値
$score_average = $score_sum / 10;
echo $score_average;
    ?>
    </p>
</body>
</html>