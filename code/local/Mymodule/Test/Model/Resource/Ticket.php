<?php
 
class Mymodule_Test_Model_Resource_Ticket extends Mage_Core_Model_Resource_Db_Abstract
{
    protected function _construct()
    {
        $this->_init('mymodule_test/ticket', 'ticket_id');
    }
}