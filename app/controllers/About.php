<?php

class About extends Controller {
	public function index()
	{
		$data['nama'] = 'M. Akbar Nugroho';
		$data['pekerjaan'] = 'Junior Programmer';
		$data['title'] = 'About';

		$this->view('templates/header', $data);
		$this->view('about/index', $data);
		$this->view('templates/footer');
	}

	public function page()
	{
		$data['title'] = 'Home';

		$this->view('templates/header', $data);
		$this->view('about/page', $data);
		$this->view('templates/footer');
	}
}