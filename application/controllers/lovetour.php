<?php
class Lovetour extends CI_Controller
{
    function index()
    {
        $index['mainContent'] = 'home';
        $index['title'] = "The Love Tour | Home";
        $this->load->view('includes/Landingpage', $index);
    }
}


