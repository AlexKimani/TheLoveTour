<?php

class PageNotFound extends CI_Controller {

	function index() {
		$missing['mainContent'] = 'pages/404';
		$missing['title'] = 'The Love Tour | 404 Pages';
		$this->load->view('includes/Landingpage', $missing);
	}
}
