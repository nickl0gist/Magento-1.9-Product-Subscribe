<?php
/**
 * Created by PhpStorm.
 * User: Horkov Mykola
 * Date: 30.01.2017
 * Time: 20:05
 */
class Horkov_ProductAvailability_Helper_Data extends Mage_Core_Helper_Abstract {

    public function isObserved ($email, $prodid)
    {

        $resource = Mage::getModel('productavailability/block')->getCollection();
        $results = $resource->addFieldToFilter('user_email', $email)->addFieldToFilter('prod_id', $prodid);

        foreach ($results as $res){
            if ($res){
                return true;
            } else {
                return false;
            }
        }

    }
}