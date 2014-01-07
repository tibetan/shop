<?php

namespace Shop\Model;

class Products
{
    public $productsId;
    public $title;
    public $description;
    public $detailed;
    public $price;
    public $categoriesId;
    public $status;
    public $createdAt;
    public $updatedAt;

    public function exchangeArray($data)
    {
        $this->productsId   = $data['products_id'];
        $this->title        = $data['title'];
        $this->description  = $data['description'];
        $this->detailed     = $data['detailed'];
        $this->price        = $data['price'];
        $this->categoriesId = $data['categories_id'];
        $this->status       = $data['status'];
        $this->createdAt    = $data['created_at'];
        $this->updatedAt    = $data['updated_at'];
    }
}