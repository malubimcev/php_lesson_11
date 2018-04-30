<?php
   
    class Cart
    {
        private $totalPrice = 0;
        private $products;
        
        public function add(Product $product)
        {
            try {
                $this->products->add($product);
                $this->totalPrice += $product->getPrice();
            } catch (Exception $ex) {
                echo "Ошибка добавления товара в корзину: $ex";
            }
        }
        
        public function delete($key)
        {
            if (!empty($this->products->getItem($key))) {
                $this->totalPrice -= $this->products->getItem($key)->getPrice();
                $this->products->delete($key);
            } else {
                echo "Товар с индексом $key не найден.";
            }
        }
        
        public function getTotalPrice()
        {
            return $this->totalPrice;
        }
       
        public function printCart()
        {
            echo '<h2>Товары:</h2>';
            $this->products->printList();
        }

        public function __construct() {
            $this->products = new ProductList();
        }
        
    }

