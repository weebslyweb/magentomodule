<?php
 
$installer = $this;
$installer->startSetup();
 
$table = $installer->getConnection()->newTable($installer->getTable('photo/photograph'))
    ->addColumn('entity_id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
        'unsigned' => true,
        'nullable' => false,
        'primary' => true,
        'identity' => true,
        ), 'ID')
    ->addColumn('title', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
        'nullable' => false,
        ), 'Title')
    ->addColumn('img_path', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
        'nullable' => true,
        ), 'Image Path')
    ->addColumn('timestamp', Varien_Db_Ddl_Table::TYPE_TIMESTAMP, null, array(
        'nullable' => false,
        ), 'Timestamp');
         
$installer->getConnection()->createTable($table);
$installer->endSetup();