<?php 
class Mymodule_Layout_IndexController extends Mage_Core_Controller_Front_Action
{
	public function indexAction()
	{
		echo "hello layout controller";
	}
	public function urlcallAction()
	{
		echo "call through url type http://127.0.0.1/magento1/index.php/layout/index/urlcall";
	}
}