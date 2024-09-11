<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php

            class Food {
                public $name;
                public $price;

                public function show_price() {
                    echo $this->price . '<br>';
                }

                public function __construct(string $name, int $price) {
                    $this->name = $name;
                    $this->price = $price;
                }
            }

            $food = new Food('potato', 250);
            print_r($food);


            class Animal {
                public $name;
                public $height;
                public $weight;
        
                public function show_height() {
                    echo $this->height . '<br>';
                }

                public function __construct(string $name, int $height, int $weight) {
                    $this->name = $name;
                    $this->height = $height;
                    $this->weight = $weight;
                }
            }
            
            $animal = new Animal('dog', 60, 5000);
            print_r($animal);
        

        ?>
    </p>
</body>

</html>
