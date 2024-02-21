<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>kadai_016</title>
</head>
<body>

   <?php
    //Foodについて記載
    class Food{
    private $name;
    private $price;
    
    // メソッドを定義する
        public function show_price() {
            echo $this->price . '<br>';
        }
    //コンストラクトの定義
        public function __construct(string $name, int $price){
            $this->name = $name;
            $this->price = $price;
        }
    }
    //インスタンス化する
    $food = new Food('potato', 250);
    //プロパティの値を出力する
    print_r($food);
    echo '<br>';

    //Animalについて記載
    class Animal{
        private $name;
        private $height;
        private $weight;
    //メソッドの定義
    public function show_height() {
    echo $this->height . '<br>';
    }
    //コンストラクタの定義
    public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }
    }
    //インスタンス化する
    $animal = new Animal('dog', 60, 5000);  
    //プロパティの値を出力
    print_r($animal);
    echo '<br>';
    $food->show_price();
    $animal->show_height();
    
   ?>
</body>
</html>