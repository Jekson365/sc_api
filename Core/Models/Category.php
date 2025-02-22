<?php

namespace Core\Models;

use Core\Interfaces\CategoryInterface;
use Core\Model;
use PDO;

class Category extends Model implements CategoryInterface
{
    public function getCategoryById($id)
    {
        $query = "SELECT * FROM categories WHERE id = :catId";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':catId', $id, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
