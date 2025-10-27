<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編_課題Sort</title>
</head>

<body>
    <p>
        <?php
        function sort_2way(array &$array, bool $order): void {
          if ($order === TRUE) {
            echo '昇順にソートします。';
            sort($array);   // 昇順
          } else {
            echo '降順でソートします。';
            rsort($array);  // 降順
          }
        }  
        $nums = [15, 4, 18, 23, 10];

        // 昇順
        $sorted = sort_2way($nums, TRUE);
          foreach ($sorted as $num) {
          echo $num . '<br>';
        }

        // 区切り
        echo '<hr>';

        // 降順
        $sorted = sort_2way($nums, FALSE);
          foreach ($sorted as $num) {
          echo $num . '<br>';
        }
        ?>
    </p>
    
</body>


</html>
