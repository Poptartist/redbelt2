<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Main extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library(array('form_validation', 'session'));
		$this->load->helper(array('form_helper', 'url', 'date'));
		$this->load->model('user_model'); 
	}


     public function index()
     {
           $this->load->view('home');
     }

     public function register() {
     	$this->form_validation->set_error_delimiters('<div class="errors">', '</div>');
     	$this->form_validation->set_rules('dname', 'Name', 'required|min_length[1]|max_length[40]');
     	$this->form_validation->set_rules('duser', 'Username', 'required');
     	$this->form_validation->set_rules('dpword', 'Password', 'required|matches[dconf]|md5');
     	$this->form_validation->set_rules('dconf', 'Password Confirmation', 'required');
     	$this->form_validation->set_rules('dhired', 'Hired Date', 'required');

     	if ($this->form_validation->run() == FALSE) {
     		$this->load->view('home');	
     	} else {
     		$data = array(
     			'name' => $this->input->post('dname'),
     			'username' => $this->input->post('duser'),
     			'password' => $this->input->post(md5('dpword')),
     			'date_hired' => $this->input->post('dhired'),
     			'created_at' => now()
     			);
     		$this->user_model->register_user($data);
               $this->session->set_userdata('user_data', $data['username']);
     		$data['message'] = 'Registration complete';
               $this->load->view('success');
     	}
     }

    public function login() {



     }

	public function logout() {
		$this->session->session_destroy();
		$this->load->view('home');
	}
}
?>