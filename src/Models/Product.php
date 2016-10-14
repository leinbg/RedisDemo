<?php

namespace RedisDemo\Models;

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
    public static function all()
    {
        $productsGetBySuperComplexSql = [
            'p_1' => [
                'name' => 'orange',
                'price' => '2',
            ],
            'p_2' => [
                'name' => 'book',
                'price' => '15',
            ],
        ];

        return json_encode($productsGetBySuperComplexSql);
    }
}
