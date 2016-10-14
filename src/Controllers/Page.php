<?php

namespace RedisDemo\Controllers;

use RedisDemo\Models\Product;

/**
 * Class Page
 *
 * @package RedisDemo\Controllers
 */
class Page
{

    /**
     * @return mixed
     */
    public function getAllProducts()
    {
        return Product::all();
    }
}