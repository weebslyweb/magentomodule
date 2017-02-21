<?php
 
class Creare_Photo_Block_Adminhtml_Photograph_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
    public function __construct()
    {
        parent::__construct();
        $this->setId('photograph_grid');
        $this->setDefaultSort('entity_id');
        $this->setDefaultDir('asc');
        $this->setSaveParametersInSession(true);
    }
 
    protected function _prepareCollection()
    {
        $collection = Mage::getModel('photo/photograph')->getCollection();
        $this->setCollection($collection);
        return parent::_prepareCollection();
    }
 
    protected function _prepareColumns()
    {
        $this->addColumn('entity_id', array(
            'header'    => Mage::helper('photo')->__('ID'),
            'align'     =>'right',
            'width'     => '50px',
            'index'     => 'entity_id',
        ));
 
        $this->addColumn('title', array(
            'header'    => Mage::helper('photo')->__('Title'),
            'align'     =>'left',
            'index'     => 'title',
        ));
 
        $this->addColumn('img_path', array(
            'header'    => Mage::helper('photo')->__('Image Path'),
            'align'     =>'left',
            'index'     => 'img_path',
        ));
 
        return parent::_prepareColumns();
    }
 
    public function getRowUrl($row)
    {
        return $this->getUrl('*/*/edit', array('id' => $row->getId()));
    }
}