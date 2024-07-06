<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>kadai_016</title>
</head>

<body>
    <p>
        <?php
        // クラスを定義する
        class Food {
            // プロパティを定義する
            public $name;
            public $price;

            // コンストラクタを定義する
            public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
            }

            // メソッドを定義する
            public function show_name() {
                echo $this->name;
            }

            public function show_price() {
                echo $this->price;
            }
        }

        // インスタンス化する
        $food = new Food('potato', 250);

        // メソッドにアクセスして実行する
        $food->show_name();
        echo "<br>";
        $food->show_price();

        // インスタンス $food の各プロパティの値を出力する
        echo "<br>";
        print_r($food);
        ?>
    </p>
</body>

</html>
