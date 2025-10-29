<?php
// クラスfOODを定義する
class Food {
  // プロパティを定義する
  private $name;
  private $price;
  // メソッドを定義する
  public function show_price() {
  echo $this->price . '<br>';
  }
  // コンストラクタを定義する
  public function __construct(string $name, int $price) {
    $this->name   = $name;
    $this->price  = $price;
  }
}

class Animal {
  // プロパティを定義する
  private $name;
  private $height;
  private $weight;
  // メソッドを定義する
  public function show_height() {
  echo $this->height . '<br>';
  }
  // コンストラクタを定義する
  public function __construct(string $name, string $height, string $weight) {
    $this->name   = $name;
    $this->height = $height;
    $this->weight = $weight;
  }
}

// インスタンス化する
$Food   = new Food('pasta', 20);
$Animal = new Animal('Cat', '60cm', '6kg');

// インスタンス$userの各プロパティの値を出力する
print_r($Food);
echo '<br>';
print_r($Animal);
echo '<br>';

// メソッドにアクセスして実行する
$Food->show_price();
$Animal->show_height();
?>
