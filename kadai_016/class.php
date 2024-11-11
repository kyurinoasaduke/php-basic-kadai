<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
     <p>
         <?php
         //クラスを定義
         class Food {
         
         //プロパティを定義
         private $name;
         private $price;
         

         //コンストラクタを定義する
         public function __construct (string $name, int $price) {
            $this->name = $name;
            $this->price = $price;
         }

         //メソッドを定義
         public function show_price() {
            echo $this->price;
         }

         }

         //インスタンス化
         $potato = new Food('potato','250');
         print_r($potato);
         echo'<br>';

         class Animal {

            private $name;
            private $height;
            private $weight;

            public function __construct(string $name, int $height, int $weight) {
                $this->name = $name; 
                $this->height = $height;
                $this->weight = $weight;
        }     
            public function show_height() {
                 echo$this->height;
            }

            
        }
        
        $dog = new Animal('dog', 60, 5000);
        print_r($dog);
        echo '<br>';
        $potato->show_price();
        echo '<br>';
        $dog->show_height();
        echo '<br>';
         
         ?>
     </p>
 </body>
 
 </html>
