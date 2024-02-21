<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>kadai_011</title>
</head>
<body>

<?php
    function sort_2way($array, $order) {
    //配列を定義
    $nums = [15, 4, 18, 23, 10];

    if($order){
        echo "昇順にソートします。<br>";//YESの場合
        sort($nums);
        foreach ($nums as $num) {
        echo $num . '<br>';
        }
    }else{
        echo "降順にソートします。<br>";//NOの場合
        rsort($nums);
        foreach ($nums as $num) {
        echo $num . '<br>';
        }
    }
}
$nums = [15, 4, 18, 23, 10];
//関数の呼び出し
sort_2way($nums, true);//昇順に呼び出し
sort_2way($nums, false);//降順に呼び出し

?>
</body>
</html>