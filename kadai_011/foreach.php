<!DOCTYPE html>
<html>
    <head>
        <title>連想配列課題</title>
        <meta charset="UTF-8">
    </head>

    <body>
        <ul style="list-style: none">
        <?php 
        $vegitables = ["名前"=> "玉ねぎ", "値段" => "200", "産地" => "北海道"];
        foreach($vegitables as $key => $value){
        echo "<li>{$key}：{$value}</li>";
    }
         ?>
         </ul>
    </body>
</html>