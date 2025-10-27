<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編_課題Sort</title>
</head>

<body>
    <p>
        <?php
        $nums = [15, 4, 18, 23, 10];
        function sort_2way(array &$array, bool $order): void {
          if ($order === TRUE) {
            echo '昇順にソートします。';
            sort($array);   // 昇順
            foreach ($array as $array) {
            echo $array . '<br>';
            }
          }
          else {
            echo '降順でソートします。';
            rsort($array);  // 降順
            foreach ($array as $array) {
            echo $array . '<br>';
          }
          }
        }
        ?>
    </p>
    
</body>

</html>
