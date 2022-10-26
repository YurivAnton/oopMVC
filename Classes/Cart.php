<?php
class Cart{
    public $products = [];

    public function add($product) {
        $this->products[] = $product;
    }

    public function remove($productName) {
        foreach($this->products as $key=>$product) {
            if($product->getName() == $productName) {
                array_splice($this->products, $key, 1);
            }
        }
    }

    public function getTotalCost() {
        $totalCoast = 0;
        foreach($this->products as $product) {
            $totalCoast += $product->getPrice() * $product->getQuantity();
        }
        return $totalCoast;
    }

    public function getTotalQuantity() {
        $totalQuantity = 0;
        foreach($this->products as $product) {
            $totalQuantity += $product->getQuantity();
        }
        return $totalQuantity;
    }

    public function getAvgPrice() {
        return self::getTotalCost() / self::getTotalQuantity();
    }
}
