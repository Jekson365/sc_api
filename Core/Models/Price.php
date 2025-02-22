<?php

namespace Core\Models;

use Core\Interfaces\PriceInterface;
use Core\Model;
use PDO;

class Price extends Model implements PriceInterface
{
    public function getPriceId($id)
    {
        $stmt = $this->db->query("SELECT * FROM prices WHERE id = {$id}");
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
