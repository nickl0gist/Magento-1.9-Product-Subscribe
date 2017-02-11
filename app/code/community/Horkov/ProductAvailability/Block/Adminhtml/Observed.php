<?php

class Horkov_ProductAvailability_Block_Adminhtml_Observed extends Mage_Adminhtml_Block_Widget_Grid_Container
{

    public function __construct()
    {
        $this->_blockGroup = 'productavailability';
        $this->_controller = 'adminhtml_observed';
        $this->_headerText = $this->__('Observed');
        parent::__construct();
    }

}
