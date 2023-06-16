<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        class Food{
            private $name;
            private $price;

            public function set_price(int $price){
                $this->price = $price;
            }
            public function show_price(){
                echo $this->price . '<br>';
            }

            public function __construct(string $name, int $price){
                $this->name = $name;
                $this->price = $price;
            }
            /*
            public function show_price(){
                echo $this->price . '<br>';
            }
            */
        }

        class Animal{
            private $name;
            private $height;
            private $weight;

            public function set_height(int $height){
                $this->height = $height;
            }
            public function show_height(){
                echo $this->height;
            }

            public function __construct(string $name, int $height, int $weight){
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
            /*          
            public function show_height(){
                echo $this->height;
            }
            */
        }

        $Food = new Food('potato', 250);            // funatsu:変数名は先頭小文字、potetoでいいです
        $Animal = new Animal('dog', 60, 5000);      // funatsu:変数名は先頭小文字、dogでいいです

        print_r($Food);
        echo '<br>';
        print_r($Animal);

        echo '<br>';
        $Food->set_price(250);
        $Food->show_price();
        $Animal->set_height(60);
        $Animal->show_height();
        ?>
    </p>
</body>

</html>
