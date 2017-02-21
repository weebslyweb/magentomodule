<?php
 
class Mymodule_Test_Model_Ticket extends Mage_Core_Model_Abstract
{
    protected function _construct()
    {
        $this->_init('mymodule_test/ticket');
    }
}