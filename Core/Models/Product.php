<?php

namespace Core\Models;

use Core\Model;
use PDO;

class Product extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllByCategory(string $catName): array
    {
        $sql = $this->getBaseProductQuery();

        if ($catName !== 'all') {
            $sql .= " WHERE categories.name = :cat_name";
        }

        $query = $this->db->prepare($sql);

        if ($catName !== 'all') {
            $query->bindValue(":cat_name", $catName);
        }

        $query->execute();

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById(int $prodId): ?array
    {
        $sql = $this->getBaseProductQuery() . " WHERE products.id = :prod_id";

        $query = $this->db->prepare($sql);
        $query->bindValue(":prod_id", $prodId, PDO::PARAM_INT);
        $query->execute();

        $result = $query->fetch(PDO::FETCH_ASSOC);

        return $result ?: null;
    }

    private function getBaseProductQuery(): string
    {
        return "
            SELECT 
                products.id AS id, 
                products.id_name AS id_name,
                products.description AS description, 
                products.inStock AS inStock, 
                products.name AS name, 
                categories.name AS catName, 
                categories.id AS catId, 
                products.price_id AS price_id, 
                prices.amount AS amount, 
                currencies.symbol AS symbol 
            FROM products 
            LEFT JOIN categories ON categories.id = products.category_id
            LEFT JOIN prices ON prices.id = products.price_id
            LEFT JOIN currencies ON currencies.id = prices.currency_id
        ";
    }
}
