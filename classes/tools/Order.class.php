<?php
    
    final class Order extends Cart
    {
        private $cart;
        
        public function setCart(Cart $cart)
        {
            $this->cart = $cart;
        }

        public function printOrder()
        {
            echo '<h2>Ваш заказ:</h2>';
            $this->cart->printCart();
            echo "<h3>Сумма заказа: " . $this->cart->getTotalPrice() . "</h3>";
        }
        
        public function __construct()
        {
            $this->cart = parent::__construct();
        }
    }

