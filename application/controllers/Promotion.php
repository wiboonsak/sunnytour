<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Promotion extends CI_Controller {

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
	public function index($page=null)
	{
             $data['categoryList']=$this->Fontend_model->getCategory('2');
             $data['categorylocalList']=$this->Fontend_model->getCategorylocal('1');
           
              $perpage = 6; $limit =''; $notUse = '';
               if ($page == ''){
                   $page = 1;
               }else{
                   $page = $page;
               }
              $start = ($page - 1) * $perpage;
               $data['page'] = $page;
                $data['perpage'] = $perpage;
                $data['promotionDetail'] = $this->Fontend_model->getpromotionDetail($limit,$notUse,$start,$perpage);
           $this->load->view('package/fontend/header',$data);
           $this->load->view('package/fontend/promotion',$data);
           $this->load->view('package/fontend/footer');
	}
        public function Page($page=null)
	{
	
		$data['categoryList']=$this->Fontend_model->getCategory('2');
             $data['categorylocalList']=$this->Fontend_model->getCategorylocal('1');
                
                 $perpage = 6; $limit =''; $notUse = '';
               if ($page == ''){
                   $page = 1;
               }else{
                   $page = $page;
               }
              $start = ($page - 1) * $perpage;
               $data['page'] = $page;
                $data['perpage'] = $perpage;
                $data['promotionDetail'] = $this->Fontend_model->getpromotionDetail($limit,$notUse,$start,$perpage);
		//--------------------------------
		$this->load->view('package/fontend/header',$data);
                $this->load->view('package/fontend/promotion',$data);
                $this->load->view('package/fontend/footer');

        }
         public function promotion_Detail($dataID=null)
	{
	

                $data['promotionDetail'] = $this->Fontend_model->getpromotionDetailByID($dataID);
                $data['imagesList']=$this->Fontend_model->loadpromotionImg($dataID);
		$data['getlastpackage'] = $this->Fontend_model->getlastpackage();
                $data['listpackage_feature'] = $this->Package_model->listpackage_feature('1');
		//--------------------------------

                $this->load->view('package/fontend/promotion_detail',$data);
                $this->load->view('package/fontend/footer');

        }
      
}
