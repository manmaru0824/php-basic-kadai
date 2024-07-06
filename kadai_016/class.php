<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>kadai_016</title>
</head>

<body>

    <p>
        <?php
        // Foodクラスを定義する
        class Food {
            // プロパティを定義する  
            private $name;
            private $price;

            // メソッドを定義する
            public function __construct(string $name, int $price)
            {
                $this->name = $name;
                $this->price = $price;
            }
            public function show_price()
            {
                echo $this->price;
            }
        }

        // インスタンス化する
        $food = new Food('potato', 250);

        // インスタンス$foodの各プロパティの値を出力する
        print_r($food);
        echo '<br>';

        // Animalクラスを定義する
        class Animal {
            // プロパティを定義する  
            private $name;
            private $height;
            private $weight;

            // メソッドを定義する
            public function __construct(string $name, int $height, int $weight)
            {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
            public function show_height()
            {
                echo $this->get_height();
            }
            public function get_height()
            {
                return $this->height;
            }
        }

        // インスタンス化する
        $animal = new Animal('dog', 60, 5000);

        // インスタンス$foodの各プロパティの値を出力する
        print_r($animal);
        echo '<br>';

        //プロパティの値を出力する
        $food->show_price();
        echo '<br>';
        $animal->show_height();

        ?>
    </p>

</html>
