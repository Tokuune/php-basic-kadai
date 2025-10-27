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
            echo '昇順にソートします。<br>';
            sort($array);   // 昇順
            }
          else {
            echo '降順でソートします。<br>';
            rsort($array);  // 降順
          }
        }

          sort_2way($nums, TRUE);{  // 昇順
          foreach($nums as $num){
          echo $num . '<br>';
          }
        }

          sort_2way($nums, FALSE);{ // 降順
          foreach($nums as $num){
          echo $num . '<br>';
          }
        }
        ?>
    </p>
    
</body>

</html>
