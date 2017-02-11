<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 06.02.2017
 * Time: 21:23
 */
class Horkov_ProductAvailability_Block_Observed extends Mage_Core_Block_Template
{


    function getObservation()
    {
        $this->_order = Mage::getModel('productavailability/block')->getCollection();
        $this->collection=$this->_order->addFieldToFilter('user_id', Mage::getSingleton('customer/session')->getCustomer()->getId());
        $this->obj = Mage::getModel('catalog/product');
    }



}