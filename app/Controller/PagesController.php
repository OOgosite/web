<?php

App::uses('AppController', 'Controller');

class PagesController extends AppController {

	public $name = 'Pages';
	public $uses = array();

	public function display() {
		$this->set("title_for_layout","ชมรมสมาธิ มหาวิทยาลัยเทคโนโลยีสุรนารี");
		$this->render('home');
	}
}
