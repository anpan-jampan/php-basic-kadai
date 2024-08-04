<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kadai_sort</title>
</head>
<body>
    <?php 
    $nums = [15, 4, 18, 23, 10 ];
    sort_2way($nums,TRUE);
    sort_2way($nums,FALSE);

    function sort_2way($array,$order){
        if($order){
            echo "<p>昇順にソートします。</p>";
            asort($array);
            foreach($array as $num){
                echo $num."<br>";
            }           
        }else{
            echo "<p>降順にソートします。</p>";
            arsort($array);
            foreach($array as $num){
                echo $num."<br>";
            }     
        }
    }

    
     ?>
    
</body>
</html>