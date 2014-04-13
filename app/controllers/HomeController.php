<?php namespace App\Controllers;

class HomeController extends BaseController
{
	public function showTest()
	{
		// Example of Raggaer Framework

		$this->_view->render('test', array('name' => 'Raggaer'));
	}
}