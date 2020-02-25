<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exchange extends CI_Controller {

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
	function __construct() {
        parent::__construct();
        $this->load->model('Fontend_model');
        $this->load->model('Package_model');
    }
	
	
	//---------------------------------
	public function index()
	{
              $data['categoryList']=$this->Fontend_model->getCategory('2');
             $data['categorylocalList']=$this->Fontend_model->getCategorylocal('1');
             $data['exchangeDetail'] = $this->Fontend_model->exchangeDetail();
           $this->load->view('package/fontend/header',$data);
           $this->load->view('package/fontend/exchange_service',$data);
           $this->load->view('package/fontend/footer');
	}
	
      
}
