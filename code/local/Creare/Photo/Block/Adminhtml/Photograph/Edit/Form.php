<?php
 
class Creare_Photo_Block_Adminhtml_Photograph_Edit_Form extends Mage_Adminhtml_Block_Widget_Form
{
    protected function _prepareForm()
    {
        if (Mage::registry('photograph_data'))
        {
            $data = Mage::registry('photograph_data')->getData();
        }
        else
        {
            $data = array();
        }
 
        $form = new Varien_Data_Form(array(
                'id' => 'edit_form',
                'action' => $this->getUrl('*/*/save', array('id' => $this->getRequest()->getParam('id'))),
                'method' => 'post',
                'enctype' => 'multipart/form-data',
        ));
 
        $form->setUseContainer(true);
 
        $this->setForm($form);
 
        $fieldset = $form->addFieldset('photograph_form', array(
             'legend' =>Mage::helper('photo')->__('Photograph Information')
        ));
 
        $fieldset->addField('title', 'text', array(
             'label'     => Mage::helper('photo')->__('Photograph Name'),
             'class'     => 'required-entry',
             'required'  => true,
             'name'      => 'title'
        ));
 
        $fieldset->addField('img_path', 'text', array(
             'label'     => Mage::helper('photo')->__('Image Path'),
             'class'     => 'required-entry',
             'required'  => true,
             'name'      => 'img_path'
        ));
 
        $form->setValues($data);
 
        return parent::_prepareForm();
    }
}