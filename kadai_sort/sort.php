<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
            
            $arrays = [15, 4, 18, 23, 10];

            function sort_2way($nums, $order = 'up'){
                        
                if($order === 'up'){
                        echo "昇順にソートします。<br>";
                        sort($nums);
                }elseif($order === 'down'){
                        echo "降順にソートします。<br>";
                        rsort($nums);
                }else{
                    return $nums;
                };
                foreach ($nums as $num){
                    echo "{$num}<br>";
                };
            };

        sort_2way($arrays, 'up');
        echo '<br>';
        sort_2way($arrays, 'down');
      
            

        ?>
    </p>
</body>

</html>
