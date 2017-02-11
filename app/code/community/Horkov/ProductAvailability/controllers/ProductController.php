<?php
/**
 * Created by PhpStorm.
 * User: Horkov Mykola
 * Date: 29.01.2017
 * Time: 16:39
 */
class Horkov_ProductAvailability_ProductController extends Mage_Core_Controller_Front_Action {

    public function subscribeAction ()
    {

        $params = $this->getRequest()->getParams();

        if ($params['email'] == ''){
            echo json_encode('Enter your e-mail address');

        } elseif (Mage::helper('productavailability')->isObserved($params['email'],$params['prodid'])) {

            echo json_encode('You are already subscribed to this product!');

        } else {

            $data = array('user_id' => $params['userid'], 'user_email' => $params['email'],
                'prod_id' => $params['prodid'], 'created_at' => time());
            $model = Mage::getModel('productavailability/block');
            $model->addData($data);
            $model->save();
            echo json_encode('Thank You! We will notify you when this product will be in stock.');
        }

    }


    public function observedAction ()
    {
        if( !Mage::getSingleton('customer/session')->isLoggedIn() ) {
            Mage::getSingleton('customer/session')->authenticate($this);
            return;
        }
        $this->loadLayout();
        $navigationBlock = $this->getLayout()->getBlock('customer_account_navigation');
        if ($navigationBlock) {
            $navigationBlock->setActive('productavailability/product/observed');

        }

        $this->renderLayout();
    }



}