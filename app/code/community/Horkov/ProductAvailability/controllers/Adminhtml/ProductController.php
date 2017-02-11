<?php
/**
 * Created by PhpStorm.
 * User: Horkov Mykola
 * Date: 30.01.2017
 * Time: 18:48
    Horkov_ProductAvailability_Adminhtml_ProductController*/
class Horkov_ProductAvailability_Adminhtml_ProductController extends Mage_Adminhtml_Controller_Action {

    public function observedAction ()
    {
        $this->_title($this->__('Customers'))->_title($this->__('Observed Products'));
        $this->loadLayout();
        $this->_addContent($this->getLayout()->createBlock('productavailability/adminhtml_observed'));
        $this->renderLayout();
    }

}