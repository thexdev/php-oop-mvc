<?php

class Home extends Controller {
	public function index()
	{
		$data['title'] = 'Home';
		$data['description'] = 'An implementation of MVC Pattern on PHP';

		$this->view('templates/header', $data);
		$this->view('home/index', $data);
		$this->view('templates/footer');
	}
}