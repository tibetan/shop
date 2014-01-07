<?php

namespace Shop\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ShopController extends AbstractActionController
{

    protected $_productsTable;

    public function getProductsTable()
    {
        if (!$this->_productsTable) {
            $sm = $this->getServiceLocator();
            $this->_productsTable = $sm->get('Shop\Model\ProductsTable');
        }
        return $this->_productsTable;
    }
     
    public function indexAction()
    {
        return new ViewModel(array(
            'products' => $this->getProductsTable()->fetchAll(),
        ));
    }

}