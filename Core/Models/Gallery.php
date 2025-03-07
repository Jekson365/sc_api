<?php


namespace Core\Models;

use Core\Interfaces\GalleryInterface;
use Core\Model;
use PDO;

class Gallery extends Model implements GalleryInterface
{
    public function getGalleryImages($productId)
    {
        $sql = "SELECT * FROM gallery WHERE product_id = :productId";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":productId", $productId, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_COLUMN);
    }
}
