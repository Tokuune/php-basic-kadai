<?php
// クラスfOODを定義する
class food {
  // プロパティを定義する
  public $name;
  public $price;
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

class animal {
  // プロパティを定義する
  public $name;
  public $height;
  public $weight;
  // メソッドを定義する
  public function show_height() {
  echo $this->height . '<br>';
  }
  // コンストラクタを定義する
  public function __construct(string $name, int $height, string $weight) {
    $this->name   = $name;
    $this->price  = $price;
    $this->weight = $weight;
  }
}

// インスタンス化する
$food   = new food('pasta', '$20');
$animal = new animal('Cat', '60cm', '6kg');

// インスタンス$userの各プロパティの値を出力する
print_r($food);
print_r($animal);

// メソッドにアクセスして実行する
$food->show_price();
$animal->show_height();
?>