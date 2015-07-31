<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{

	// Get Artists
	$query = $this->db->query('SELECT * FROM Artist ');
    
    	//$data = [];
    	$data['name'] = [];
    	$data['description'] = [];
    	$data['location'] = [];
    	$data['setTime'] = [];
    	$data['date'] = [];
    	$data['cities'] = [];


    	// loop through results
        foreach ($query->result() as $row)
    	{
         //var_dump($row->bandName);
        array_push($data['name'],$row->bandName);
        array_push($data['description'],$row->description);
        array_push($data['location'],$row->location);
        array_push($data['setTime'],$row->SetTime);
        array_push($data['date'],$row->date);
        array_push($data['cities'],$row->city);



    	}

		$this->load->view('welcome_message',$data);
	}
}
