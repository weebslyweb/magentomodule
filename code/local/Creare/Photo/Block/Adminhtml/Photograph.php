<?php
 
class Creare_Photo_Block_Adminhtml_Photograph extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        $this->_blockGroup = 'photo';
        $this->_controller = 'adminhtml_photograph';
        $this->_headerText = Mage::helper('photo')->__('Photographs');
        parent::__construct();
    }
}