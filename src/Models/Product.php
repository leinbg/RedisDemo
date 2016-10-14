<?php

namespace RedisDemo\Models;

use Predis\Client;

/**
 * Class Product
 *
 * @package RedisDemo\Models
 */
class Product
{

    /**
     * @return string
     */
    public function all()
    {
        $redisClient = new Client;
        $allProductKey = 'Demo.allProducts';
        $products = $redisClient->get($allProductKey);
        if (!$products) {
            $products = $this->getProductsBySuperComplexSql();
            $redisClient->setex($allProductKey, 60, $products);
        }

        return $products;
    }

    /**
     * @return array
     */
    protected function getProductsBySuperComplexSql()
    {
        return json_encode([
            'p_1' => [
                'name' => 'orange',
                'price' => '2',
            ],
            'p_2' => [
                'name' => 'book',
                'price' => '15',
            ],
        ]);
    }
}
