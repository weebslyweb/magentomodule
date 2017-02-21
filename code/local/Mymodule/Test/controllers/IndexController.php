<?php 
class Mymodule_Test_IndexController extends Mage_Core_Controller_Front_Action
{
	public function indexAction()
	{
		echo "hello arya ";
	}
	public function urlcallAction()
	{
		echo "call through url type http://127.0.0.1/magento1/index.php/test/index/urlcall";
	}
}