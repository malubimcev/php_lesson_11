<!DOCTYPE html>
<?php
    require_once('autoload.php');
    require_once('functions.php');
    
    $pen = new Pen('LegendPen', 490, 5, 'blue', 'auto', 'metall');
    $car = new Car('BMW M5', 0, 5, 'black', 120);
    $tv = new TV('LG-42', 29900, 3, 'LCD', 42);
    $duck = new Duck('Утка', 330, 0);
    $cart = new Cart();
    $cart->add($car);
    $cart->add($pen);
    $cart->add($tv);
    $cart->add($duck);
    $key = 2;
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Classes</title>
        <link rel="stylesheet" type="text/css" href="css/styles.css">
    </head>
    <body>
        <h1>Пространства имен, перегрузка и встроенные интерфейсы и классы</h1>
        <?php
            echo "Создан объект: ";
            $pen->printInfo();
            echo "Создан объект: ";
            $car->printInfo();
            echo "Создан объект: ";
            $tv->printInfo();
            echo "Создан объект Cart: ";
            $cart->printCart();
            echo "Удаление товара с индексом $key: ";
            $cart->delete($key);
            $cart->printCart();
            $order = new Order();
            echo "Создан объект Order: ";
            $order->setCart($cart);
            $order->printOrder();
        ?>
    </body>
</html>
