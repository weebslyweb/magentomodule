<?php
 
class Mymodule_Test_Model_Resource_Comment extends Mage_Core_Model_Resource_Db_Abstract
{
    protected function _construct()
    {
        $this->_init('mymodule_test/comment', 'comment_id');
    }
}