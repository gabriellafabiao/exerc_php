<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Car {
        public $color;
        public $model;
        public function __construct($color, $model) {
          $this->color = $color;
          $this->model = $model;
        }
        public function message() {
          return "Meu carro é " . $this->color . " " . $this->model . "!";
        }
      }
      
      $myCar = new Car("preto", "Volvo");
      echo $myCar -> message();
      echo "<br>";
      $myCar = new Car("vermelho", "Toyota");
      echo $myCar -> message();
    ?>
</body>
</html>