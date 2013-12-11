<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
	protected function _initDoctype() {
		$this->bootstrap('view'); // init resource view
		$view = $this->getResource('view'); // get resouce view
		$view->doctype('XHTML1_STRICT');

	}

}

