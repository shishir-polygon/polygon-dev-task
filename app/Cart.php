<?php

namespace App;

interface CartInterface
{
    public function addProduct(ProductInterface $product);
    public function removeProduct(ProductInterface $product);
    public function getTotal(): float;
}

class Cart implements CartInterface
{
    private $products = [];

    public function addProduct(ProductInterface $product)
    {
        $this->products[] = $product;
    }

    public function removeProduct(ProductInterface $product)
    {
        $key = array_search($product, $this->products, true);

        if ($key !== false) {
            unset($this->products[$key]);
        }
    }

    public function getTotal(): float
    {
        $total = 0;

        foreach ($this->products as $product) {
            $total += $product->getPrice();
        }

        return $total;
    }
}
