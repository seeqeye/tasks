<?php

declare(strict_types=1);

namespace Seeqeye\Lw4;

final class Cart
{
    /**
     * @var array<int, array{name: string, price: float, quantity: int}>
     */
    private array $products = [];

    private float $discountPercent = 0.0;

    public function addProduct(string $name, float $price): void
    {
        foreach ($this->products as $index => $product) {
            if ($product['name'] === $name) {
                $this->products[$index]['quantity']++;
                return;
            }
        }

        $this->products[] = [
            'name' => $name,
            'price' => $price,
            'quantity' => 1,
        ];
    }

    public function removeProduct(string $name): void
    {
        foreach ($this->products as $index => $product) {
            if ($product['name'] === $name) {
                unset($this->products[$index]);
                $this->products = array_values($this->products);
                return;
            }
        }
    }

    public function applyDiscount(float $percent): void
    {
        $this->discountPercent = $percent;
    }

    public function getTotal(): float
    {
        $total = 0.0;

        foreach ($this->products as $product) {
            $total += $product['price'] * $product['quantity'];
        }

        $total -= $total * ($this->discountPercent / 100);

        return round($total, 2);
    }

    /**
     * @return array<int, array{name: string, price: float, quantity: int}>
     */
    public function getProducts(): array
    {
        return $this->products;
    }
}
