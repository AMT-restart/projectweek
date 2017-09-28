<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

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
	 public function __construct()
    {
        parent::__construct();
    }
	public function index()
	{
		$this->load->view('home');
	}

	public function projects()
	{
		$this->load->view('projects');
	}

	public function contact()
	{
		$this->load->view('contact');
	}

	public function events()
	{
		$this->load->model('calendar');
		$data=$this->calendar->get_all();
		$this->load->view('admin',['data' =>$data]);
	}

	public function about()
	{
		$this->load->view('about');
	}

	public function join()
	{
		$this->load->view('join');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */