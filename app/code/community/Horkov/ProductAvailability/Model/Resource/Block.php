<?php
/**
 * Created by PhpStorm.
 * User: Horkov Mykola
 * Date: 28.01.2017
 * Time: 19:11
 */
class Horkov_ProductAvailability_Model_Resource_Block extends Mage_Core_Model_Resource_Db_Abstract{

    public function _construct()
    {
        $this->_init('productavailability/block', 'subs_id');
    }

}