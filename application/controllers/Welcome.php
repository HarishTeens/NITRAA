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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		 $this->load->helper('form');
    	$this->load->library('form_validation');
    	$data['modkey']=TRUE;
		$this->load->view('start',$data);

	}
	public function main()
	{
		$submit=$this->input->post('submit');

		if($submit==FALSE)
			return;


        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		$data['username']=$this->input->post('username');
		$data['password']=$this->input->post('password');
		$data['modkey']=$this->input->post('modkey');
		
		//Modules	

		if($data['modkey']==1){
			$data['page']=$this->load->view('success',NULL,TRUE);	
		}
		else if($data['modkey']==0){
			$data['page']=$this->load->view('failure',NULL,TRUE);	
		}
		
		





        if ($this->form_validation->run() == FALSE)
        {
                $this->load->view('start');
        }
        else
        {
                $this->load->view('main',$data);
        }


		
	}
}
