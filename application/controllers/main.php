<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {	

  function __construct()
    {
        parent::__construct();
        $this->load->library('session');

    }
 
    public function index()
    {






    }

    public function requestForm(){

    $this->load->view('requestForm');

    }
    public function processForm(){

    $bandName = $this->input->post('BandName');
    $location = $this->input->post('location');
    $city = $this->input->post('city');
    $description = $this->input->post('description');
    $month = $this->input->post('month');
    $day = $this->input->post('day');
    $year = $this->input->post('year');

    $hour = $this->input->post('hour');
    $mOne = $this->input->post('mOne');
    $mTwo = $this->input->post('mTwo');

    $tofd = $this->input->post('tofd');

    $time = $hour . ':' . $mOne . $mTwo  . $tofd;


    // echo $month;
    // echo $day;
    // echo $year;
    $sqldate = $day . $month . $year;
    $date = strtotime($sqldate);


   $formatDate = date("j M Y", $date); //output will be 10 July 2013


    $sql = $this->db->query("INSERT INTO Artist(bandName,description,location,SetTime,date,city) VALUES (".$this->db->escape($bandName).",".$this->db->escape($description).",".$this->db->escape($location).",".$this->db->escape($time).",".$this->db->escape($formatDate).",".$this->db->escape($city).")");


    $query = $this->db->query('SELECT * FROM Artist ');
    
        //$data = [];
        $data['name'] = [];
        $data['description'] = [];
        $data['location'] = [];
        $data['setTime'] = [];
        $data['date'] = [];
        $data['cities'] = [];
        $data['email'] = $this->session->userdata('email');
        $data['city'] = $this->session->userdata('city');



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

        $this->load->view('loggedInPage',$data);


        
    }
    public function loggin(){

    $email = $this->input->post('email');
    $password = $this->input->post('password'); 


    $query = $this->db->query(" select email, city from users where 
        email =".$this->db->escape($email)."and password=".$this->db->escape($password)."");


            foreach ($query->result() as $row)
        {
         var_dump($row->email);

        $this->session->set_userdata('email' ,$row->email);
        $this->session->set_userdata('city' ,$row->city);


        }



        $query = $this->db->query('SELECT * FROM Artist ');


        $data['name'] = [];
        $data['description'] = [];
        $data['location'] = [];
        $data['setTime'] = [];
        $data['date'] = [];
        $data['cities'] = [];
        $data['email'] = $this->session->userdata('email');
        $data['city'] = $this->session->userdata('city');



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


        $this->load->view('loggedInPage',$data);


    }

    public function signUpForm(){

    $this->load->view('signUpForm');


    }
    public function processSignUp(){


    $email = $this->input->post('email');
    $password = $this->input->post('password'); 
    $city = $this->input->post('city'); 


    $sql = $this->db->query("INSERT INTO users(email,password,city) VALUES (".$this->db->escape($email).",".$this->db->escape($password).",".$this->db->escape($city).")");


    $this->session->sess_destroy();

    
        $query = $this->db->query('SELECT * FROM Artist ');


        $data['name'] = [];
        $data['description'] = [];
        $data['location'] = [];
        $data['setTime'] = [];
        $data['date'] = [];
        $data['cities'] = [];


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
    public function logginForm(){

    $this->load->view('loggInForm');


    }
    public function loggOut(){

    $this->session->sess_destroy();

    
        $query = $this->db->query('SELECT * FROM Artist ');


        $data['name'] = [];
        $data['description'] = [];
        $data['location'] = [];
        $data['setTime'] = [];
        $data['date'] = [];
        $data['cities'] = [];



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
