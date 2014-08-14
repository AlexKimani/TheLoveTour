<?php

class Lovetour extends CI_Controller {
	function index() {
		$index['mainContent'] = 'pages/home';
		$index['title'] = "The Love Tour | Home";
		$this->load->view('includes/Landingpage', $index);
	}

	function portFolio() {
		$portFolio['mainContent'] = 'pages/portFolio';
		$portFolio['title'] = 'The Love Tour | Portfolio';
		$this->load->view('includes/Landingpage', $portFolio);
	}

	function aboutUs() {
		$aboutUs['mainContent'] = 'pages/contactUs';
		$aboutUs['title'] = 'The Love Tour | About Us';
		$this->load->view('includes/Landingpage', $aboutUs);
	}

	function contactUs() {
		$contactUs['mainContent'] = 'pages/contactUs';
		$contactUs['title'] = 'The Love Tour | Contact Us';
		$this->load->view('includes/Landingpage', $contactUs);
	}
}


