<?php
    //класс для работы со списком продуктов
    class ProductList
    {
        private $items = [];
        private $count = 0;

        public function add(Product $item)
        {
            if (isset($item)) {
                $this->count++;
                $key = $this->count;
                $this->items[$key] = &$item;
            }
        }

        public function delete($key)
        {
            $item = $this->getItem($key);
            if (!empty($item)) {
                unset($this->items[$key]);
                $this->count--;
            }
        }
        
        public function getItem($key)
        {
            if (($key <= $this->getCount()) && ($key > 0)) {
                return $this->items[$key];
            } else {
                return null;
            }
        }

        public function getCount()
        {
            return $this->count;
        }
        
        public function printList()
        {
            echo '<ol>';
            foreach ($this->items as $key => $item) {
                echo '<li>';
                $item->printInfo();
                echo '</li>';
            }
            echo '</ol>';
        }
        
    }//end class ProductList

