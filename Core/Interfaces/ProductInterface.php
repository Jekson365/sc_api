<?php

namespace Core\Interfaces;

interface ProductInterface
{
    public function getAllByCategory(string $catName): array;
    public function getById(int $prodId): ?array;
}
