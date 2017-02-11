<?php
/**
 * Created by PhpStorm.
 * User: Horkov Mykola
 * Date: 28.01.2017
 * Time: 19:20
 */
class Horkov_ProductAvailability_Model_Resource_Block_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract {

    public function _construct()
    {
        parent::_construct();
        $this->_init('productavailability/block');
    }
}