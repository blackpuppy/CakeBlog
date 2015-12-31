<?php

App::uses('AppController', 'Controller');

class CookieDemoController extends AppController {
	public $uses = false;  // not to use any model
	public $components = array('Cookie');
	public $helpers = array('Html', 'Form', 'Time');

	public function beforeFilter() {
		parent::beforeFilter();
		$this->Cookie->name = 'cookie_demo';
		$this->Cookie->time = '1 hour';
		$this->Cookie->path = '/cookie_demo/';
		$this->Cookie->domain = 'cakeblog.dev';
		// $this->Cookie->secure = true;  // i.e. only sent if using secure HTTPS
		$this->Cookie->key = 'vAl80DrsEeoEfe90y~=L8E9`w-\8^#088|a)8)j[&3(2o*38i&1I*(`{H';
		$this->Cookie->httpOnly = true;
	}

	public function index() {
		$this->_read_cookie();
	}

	public function set_cookie() {
		$time = date('Y-m-d h:i:s a', time());
		$complex = array(
			'location' => $this->request->here,
			'updated' => $time
		);

		$this->Cookie->write('simple_cookie', $time);
		$this->Cookie->write('complex_cookie', $complex);

		$this->_read_cookie();
	}

	public function set_cookie_ajax() {
		$this->autoRender = false; // We don't render a view in this example
		$this->request->onlyAllow('ajax'); // No direct access via browser URL

		$time = date('Y-m-d h:i:s a', time());
		$complex = array(
			'location' => $this->request->here,
			'updated' => $time
		);

		$this->Cookie->write('simple_cookie', $time);
		$this->Cookie->write('complex_cookie', $complex);
	}

	public function read_cookie() {
		$this->_read_cookie();
	}

	private function _read_cookie() {
		$msg = PHP_EOL . 'CookieDemoController::_read_cookie():'
			. PHP_EOL . '  $this->request->url = ' . $this->request->url;

		$cookie = $this->Cookie->read();
		if (!empty($cookie)) {
			$time = $this->Cookie->read('simple_cookie');
			$complex = $this->Cookie->read('complex_cookie');
		} else {
			$time = '';
			$complex = '';
		}

		$msg .= PHP_EOL . '  $time = ' . $time
			. PHP_EOL . '  $complex = ' . Debugger::exportVar($complex);

		$this->set(compact('cookie', 'time', 'complex'));

		$msg .= PHP_EOL . str_repeat('-', 80);
		CakeLog::write(LOG_DEBUG, $msg);
	}
}
