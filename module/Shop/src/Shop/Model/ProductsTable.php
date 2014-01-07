<?php

namespace Shop\Model;

use Zend\Db\TableGateway\TableGateway;

class ProductsTable
{
    protected $tableGateway;

    public function __construct(TableGateway $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }

    public function fetchAll()
    {
        return $this->tableGateway->select();
    }
    
}