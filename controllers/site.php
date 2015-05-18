<?php
/**
 * @copyright Copyright(c) 2011 jooyea.cn
 * @file site.php
 * @brief
 * @author webning
 * @date 2011-03-22
 * @version 0.6
 * @note
 */
/**
 * @brief Site
 * @class Site
 * @note
 */
class Site extends IController
{
    public $layout='site';

	

	function index()
	{
		
		
		
		$this->redirect('index');
	}

}
