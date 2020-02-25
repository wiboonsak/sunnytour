<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PackageCMS extends CI_Controller {

    function __construct() {
        parent::__construct();
        if ($this->session->userdata('user_id') == '') {
            redirect(base_url('Control'), 'refresh');
            exit();
        }
        $this->load->model('Fontend_model');
        $this->load->model('Package_model');
    }

    //-------------------	
    public function index() {
        $this->load->view('package/backend/header');
        $this->load->view('package/backend/booking_view');
        $this->load->view('package/backend/footer');
        $this->load->view('package/backend/booking_view_script');
    }
    //-------------------
    public function deleteyoutube(){
        $dataID = $this->input->post('dataID');
        $table = $this->input->post('table');
        $result = $this->Package_model->delete_data($dataID, $table);
        echo $result;
    }  

//-------------------
    public function deleteData() {
        $dataID = $this->input->post('dataID');
        $table = $this->input->post('table');
        $result = $this->Package_model->deleteData($dataID, $table);
        echo $result;
    }

//-------------------
    public function deleteDataticket() {
        $dataID = $this->input->post('dataID');
        $table = $this->input->post('table');
		$img = $this->input->post('img');
        $result = $this->Package_model->deleteDataticket($dataID, $table,$img);
        echo $result;
    }
//-------------------
    public function deleteData2() {
        $dataID = $this->input->post('dataID');
        $table = $this->input->post('table');
        $result = $this->Package_model->deleteData2($dataID, $table);
        echo $result;
    }

//-------------------
    public function deleteData3() {
        $dataID = $this->input->post('dataID');
        $table = $this->input->post('table');
        $result = $this->Package_model->deleteData3($dataID, $table);
        echo $result;
    }



//-------------------
    public function deleteData5() {
        $dataID = $this->input->post('dataID');
        $table = $this->input->post('table');
        $result = $this->Package_model->deleteData5($dataID, $table);
        echo $result;
    }



    //----------------------------
    public function updateThisinclued() {
        $currentID = $this->input->post('currentID');
        $name = $this->input->post('name');
        $result_id = $this->Package_model->updateseason($currentID, $name);
        echo $result_id;
    }
    //----------------------------
    public function updateThis2() {
        $currentID = $this->input->post('currentID');
        $name = $this->input->post('name');
        $result_id = $this->Package_model->updatecate($currentID, $name);
        echo $result_id;
    }
    //----------------------------
    public function updateThislocal() {
        $currentID = $this->input->post('currentID');
        $name = $this->input->post('name');
        $result_id = $this->Package_model->updatecatelocal($currentID, $name);
        echo $result_id;
    }
    //----------------------------
    public function updateexchange() {
        $currentID = $this->input->post('currentID');
        $csname = $this->input->post('csname');
        $cname = $this->input->post('cname');
        $buy = $this->input->post('buy');
        $sell = $this->input->post('sell');
        $result_id = $this->Package_model->updateexchange($currentID, $csname,$cname,$buy,$sell);
        echo $result_id;
    }

    //----------------------------
    public function updateThis1() {
        $currentID = $this->input->post('currentID');
        $Traveling = $this->input->post('Traveling');
        $adult_price = $this->input->post('adult_price');
        $aloneadult_price = $this->input->post('aloneadult_price');
        $child_price = $this->input->post('child_price');
        $addchild_price = $this->input->post('addchild_price');
        $result_id = $this->Package_model->updateoption($currentID, $Traveling, $adult_price, $aloneadult_price, $child_price,$addchild_price);
        echo $result_id;
    }

    //-------------------	
    public function packageAdd($currentID = null) {
        $data['currentID'] = $currentID;
        $data['categoryList']=$this->Package_model->getCategory('1','2');
        $this->load->view('package/backend/header');
        $this->load->view('package/backend/package_add', $data);
        $this->load->view('package/backend/footer');
        $this->load->view('package/backend/package_add_script');
    }
    //-------------------	
    public function packageAddLocal($currentID = null) {
        $data['currentID'] = $currentID;
        $data['categoryList']=$this->Package_model->getCategorylocal('1','1');
        $this->load->view('package/backend/header');
        $this->load->view('package/backend/package_addlocal', $data);
        $this->load->view('package/backend/footer');
        $this->load->view('package/backend/package_addlocal_script');
    }
 //------------------------------- 	
    public function addExplanation() {
        $Explanation = $this->input->post('Explanation');
        $currentID = $this->input->post('currentID');
        $result_id = $this->Package_model->addExplanation($currentID, $Explanation);

        echo $result_id;
    }
    //------------------------------- 	
    public function addpromotion() {
        $name = $this->input->post('name');
        $desc = $this->input->post('desc');
        $condition = $this->input->post('condition');
        $currentID = $this->input->post('currentID');
        $imgold = $this->input->post('imgold');
				$promotion_img = $this->input->post('promotion_img');
                                if(($promotion_img!='')&&($imgold !='')){
                                    @unlink('./uploadfile/promotion_img/' . $imgold);
                                }
	$upload_path = './uploadfile/promotion_img';
				$upload_pathName = 'uploadfile/promotion_img';
				$config['upload_path'] = $upload_path;
				//allowed file types. * means all types
				$config['allowed_types'] = 'jpg|png|gif';
				//allowed max file size. 0 means unlimited file size
				$config['max_size'] = '0';
				//max file name size
				$config['max_filename'] = '255';
				//whether file name should be encrypted or not
				$config['encrypt_name'] = TRUE;
				//store image info once uploaded
				$image_data = array();
				//check for errors
				$is_file_error = FALSE;
		 	
		    $this->load->library('upload', $config);         
				//---------------------------
				$_FILES['userFile']['name'] = $_FILES['promotion_img']['name'];
                $_FILES['userFile']['type'] = $_FILES['promotion_img']['type'];
                $_FILES['userFile']['tmp_name'] = $_FILES['promotion_img']['tmp_name'];
                $_FILES['userFile']['error'] = $_FILES['promotion_img']['error'];
                $_FILES['userFile']['size'] = $_FILES['promotion_img']['size'];
                $this->upload->initialize($config);
        
                 if($this->upload->do_upload('userFile')){
                    $fileData = $this->upload->data();
                    $uploadData['file_name'] = $fileData['file_name'];
                     $result_id = $this->Package_model->addpromotion($currentID, $name, $desc,$condition, $uploadData['file_name']);
                }else{
                    $result_id = $this->Package_model->addpromotion($currentID, $name, $desc,$condition, $imgold);
                }
        echo $result_id;
    }
    //------------------------------- 	
    public function addpackage() {
        $name = $this->input->post('name');
        $duration = $this->input->post('duration');
        $period = $this->input->post('period');
        $airline = $this->input->post('airline');
        $price = $this->input->post('price');
        $package_discount = $this->input->post('package_discount');
        $Code = $this->input->post('Code');
        $highlight = $this->input->post('highlight');
        $desc = $this->input->post('desc');
        $condition = $this->input->post('condition');
        $product_category = $this->input->post('product_category');
        $currentID = $this->input->post('currentID');
        $include = $this->input->post('include');
        $youtube =$this->input->post('youtube');
        $imgold = $this->input->post('imgold');

        $Codearray = explode(" ",$Code);
        $Code_book = $Codearray[0] ;
				$pack_img = $this->input->post('pack_img');
                                if(($pack_img!='')&&($imgold !='')){
                                    @unlink('./uploadfile/package_img/' . $imgold);
                                }
	$upload_path = './uploadfile/package_img';
				$upload_pathName = 'uploadfile/package_img';
				$config['upload_path'] = $upload_path;
				//allowed file types. * means all types
				$config['allowed_types'] = 'jpg|png|gif';
				//allowed max file size. 0 means unlimited file size
				$config['max_size'] = '0';
				//max file name size
				$config['max_filename'] = '255';
				//whether file name should be encrypted or not
				$config['encrypt_name'] = TRUE;
				//store image info once uploaded
				$image_data = array();
				//check for errors
				$is_file_error = FALSE;
		 	
		    $this->load->library('upload', $config);         
				//---------------------------
				$_FILES['userFile']['name'] = $_FILES['pack_img']['name'];
                $_FILES['userFile']['type'] = $_FILES['pack_img']['type'];
                $_FILES['userFile']['tmp_name'] = $_FILES['pack_img']['tmp_name'];
                $_FILES['userFile']['error'] = $_FILES['pack_img']['error'];
                $_FILES['userFile']['size'] = $_FILES['pack_img']['size'];
                $this->upload->initialize($config);
        
                 if($this->upload->do_upload('userFile')){
                    $fileData = $this->upload->data();
                    $uploadData['file_name'] = $fileData['file_name'];
                     $result_id = $this->Package_model->addpackage($currentID, $name, $desc,$condition,$include,$product_category, $uploadData['file_name'],$duration,$period,$airline,$price,$package_discount,$highlight,$Code_book);
                     $currentID = $currentID;
                }else{
                    $result_id = $this->Package_model->addpackage($currentID, $name, $desc,$condition,$include,$product_category, $imgold,$duration,$period,$airline,$price,$package_discount,$highlight,$Code_book);
                    $currentID = $currentID;
                }
                
          if($youtube!=''){
                    foreach($youtube AS $value){
                     if($value !=''){
                         $result_id2 = $this->Package_model->addyoutube($result_id , $value);
                        
                     }  
                 }
                 }
        echo $result_id;
    }
    //------------------------------- 	
    public function addpackagelocal() {
        $name = $this->input->post('name');
         $duration = $this->input->post('duration');
         $period = $this->input->post('period');
        $airline = $this->input->post('airline');
        $price = $this->input->post('price');
        $package_discount = $this->input->post('package_discount');
        $Code = $this->input->post('Code');
        $desc = $this->input->post('desc');
        $condition = $this->input->post('condition');
        $highlight = $this->input->post('highlight');
        $product_category = $this->input->post('product_category');
        $currentID = $this->input->post('currentID');
        $include = $this->input->post('include');
        $youtube =$this->input->post('youtube');
        $imgold = $this->input->post('imgold');
        
        $Codearray = explode(" ",$Code);
        $Code_book = $Codearray[0] ;
				$pack_img = $this->input->post('pack_img');
                                if(($pack_img!='')&&($imgold !='')){
                                    @unlink('./uploadfile/package_img/' . $imgold);
                                }
	$upload_path = './uploadfile/package_img';
				$upload_pathName = 'uploadfile/package_img';
				$config['upload_path'] = $upload_path;
				//allowed file types. * means all types
				$config['allowed_types'] = 'jpg|png|gif';
				//allowed max file size. 0 means unlimited file size
				$config['max_size'] = '0';
				//max file name size
				$config['max_filename'] = '255';
				//whether file name should be encrypted or not
				$config['encrypt_name'] = TRUE;
				//store image info once uploaded
				$image_data = array();
				//check for errors
				$is_file_error = FALSE;
		 	
		    $this->load->library('upload', $config);         
				//---------------------------
				$_FILES['userFile']['name'] = $_FILES['pack_img']['name'];
                $_FILES['userFile']['type'] = $_FILES['pack_img']['type'];
                $_FILES['userFile']['tmp_name'] = $_FILES['pack_img']['tmp_name'];
                $_FILES['userFile']['error'] = $_FILES['pack_img']['error'];
                $_FILES['userFile']['size'] = $_FILES['pack_img']['size'];
                $this->upload->initialize($config);
        
                 if($this->upload->do_upload('userFile')){
                    $fileData = $this->upload->data();
                    $uploadData['file_name'] = $fileData['file_name'];
                     $result_id = $this->Package_model->addpackagelocal($currentID, $name, $desc,$condition,$include,$product_category, $uploadData['file_name'],$duration,$period,$airline,$price,$package_discount,$highlight,$Code_book);
                }else{
                    $result_id = $this->Package_model->addpackagelocal($currentID, $name, $desc,$condition,$include,$product_category, $imgold,$duration,$period,$airline,$price,$package_discount,$highlight,$Code_book);
                }
                
          if($youtube!=''){
                    foreach($youtube AS $value){
                     if($value !=''){
                         $result_id2 = $this->Package_model->addyoutube($result_id , $value);
                        
                     }  
                 }
                 }
        echo $result_id;
    }

    //----------------------------
    public function addimgpromo() {
        $currentID = $this->input->post('currentID2');
        $upload_path = './uploadfile/promotion_img/';
        $upload_pathName = 'uploadfile/promotion_img/';
        $config['upload_path'] = $upload_path;
        $config['allowed_types'] = 'gif|jpg|png|jpeg|GIF|JPG|PNG|JPEG';
        $config['max_size'] = '0';
        $image_data = array();
        $is_file_error = FALSE;
        $Result = 0;
        $this->load->library('upload', $config);
        $countFiles = count($_FILES['img2']['name']);
        if ($countFiles > 0) {
            for ($i = 0; $i < $countFiles; $i++) {
                //---------------------------
                $_FILES['file_upload2']['name'] = $_FILES['img2']['name'][$i];
                $_FILES['file_upload2']['type'] = $_FILES['img2']['type'][$i];
                $_FILES['file_upload2']['tmp_name'] = $_FILES['img2']['tmp_name'][$i];
                $_FILES['file_upload2']['error'] = $_FILES['img2']['error'][$i];
                $_FILES['file_upload2']['size'] = $_FILES['img2']['size'][$i];
                $this->upload->initialize($config);
                if ($this->upload->do_upload('file_upload2')) {
                    $fileData = $this->upload->data();
                    $uploadData[$i]['file_name'] = $fileData['file_name'];
                    $img = $uploadData[$i]['file_name'];
                    $result_id = $this->Package_model->addimgpromo($img, $currentID);
                }
            }
        }
        echo $currentID;
    }
    //----------------------------
    public function addimg() {
        $currentID = $this->input->post('currentID2');
        $upload_path = './uploadfile/package_img/';
        $upload_pathName = 'uploadfile/package_img/';
        $config['upload_path'] = $upload_path;
        $config['allowed_types'] = 'gif|jpg|png|jpeg|GIF|JPG|PNG|JPEG';
        $config['max_size'] = '0';
        $image_data = array();
        $is_file_error = FALSE;
        $Result = 0;
        $this->load->library('upload', $config);
        $countFiles = count($_FILES['img2']['name']);
        if ($countFiles > 0) {
            for ($i = 0; $i < $countFiles; $i++) {
                //---------------------------
                $_FILES['file_upload2']['name'] = $_FILES['img2']['name'][$i];
                $_FILES['file_upload2']['type'] = $_FILES['img2']['type'][$i];
                $_FILES['file_upload2']['tmp_name'] = $_FILES['img2']['tmp_name'][$i];
                $_FILES['file_upload2']['error'] = $_FILES['img2']['error'][$i];
                $_FILES['file_upload2']['size'] = $_FILES['img2']['size'][$i];
                $this->upload->initialize($config);
                if ($this->upload->do_upload('file_upload2')) {
                    $fileData = $this->upload->data();
                    $uploadData[$i]['file_name'] = $fileData['file_name'];
                    $img = $uploadData[$i]['file_name'];
                    $result_id = $this->Package_model->addimg($img, $currentID);
                }
            }
        }
        echo $currentID;
    }
    //----------------------------
    public function addfile() {
        $currentID = $this->input->post('currentID2');
        $upload_path = './uploadfile/package_pdf/';
        $upload_pathName = 'uploadfile/package_pdf/';
        $config['upload_path'] = $upload_path;
        $config['allowed_types'] = 'pdf|PDF';
        $config['max_size'] = '0';
        $image_data = array();
        $is_file_error = FALSE;
        $Result = 0;
        $this->load->library('upload', $config);
        $countFiles = count($_FILES['file2']['name']);
        if ($countFiles > 0) {
            for ($i = 0; $i < $countFiles; $i++) {
                //---------------------------
                $_FILES['file_upload2']['name'] = $_FILES['file2']['name'][$i];
                $_FILES['file_upload2']['type'] = $_FILES['file2']['type'][$i];
                $_FILES['file_upload2']['tmp_name'] = $_FILES['file2']['tmp_name'][$i];
                $_FILES['file_upload2']['error'] = $_FILES['file2']['error'][$i];
                $_FILES['file_upload2']['size'] = $_FILES['file2']['size'][$i];
                $this->upload->initialize($config);
                if ($this->upload->do_upload('file_upload2')) {
                    $fileData = $this->upload->data();
                    $uploadData[$i]['file_name'] = $fileData['file_name'];
                    $img = $uploadData[$i]['file_name'];
                    $result_id = $this->Package_model->addfile($img, $currentID);
                }
            }
        }
        echo $currentID;
    }

    //----------------------------------
    public function loadImgpromo() {
        $ProID = $this->input->post('ProID');
        $imglist = $this->Package_model->loadImgpromo($ProID);
        echo '<table class="table table-bordered table-hover">';
        foreach ($imglist->result() AS $data) {
            echo '<tr id = "RowImg' . $data->id . '">';
            echo '<td><span class="text-danger"><img src="'.base_url('uploadfile/promotion_img/') . $data->images_name.'" style="width:150px;" class="thumbnail"></span></td>';
            ?>
            <td style="text-align: -webkit-center;"><input style="text-align:center;width: 200px;" id="order<?php echo $data->id ?>" type="text" class="form-control form-control-sm OrderCate" value="<?php echo $data->sort_number ?>" onChange="updateOrder('<?php echo $data->id ?>', 'sort_number', this.value)">
                <input type="hidden" id="chkOrder<?php echo $data->id ?>" value="<?php echo $data->sort_number ?>"></td><?php
            echo '<td width="30" style="text-align: center"><button type="button" class="btn btn-danger btn-sm" onclick="comfirmDelete(\'' . $data->id . '\' , \'imgfile\', \'' . $data->images_name . '\')"><i class="icon-trash"></i></button></td>';
            echo '</tr>';
        }
        echo '</table>';
    }
    //----------------------------------
    public function loadImg() {
        $ProID = $this->input->post('ProID');
        $imglist = $this->Package_model->loadImg($ProID);
        echo '<table class="table table-bordered table-hover">';
        foreach ($imglist->result() AS $data) {
            echo '<tr id = "RowImg' . $data->id . '">';
            echo '<td><span class="text-danger"><img src="'.base_url('uploadfile/package_img/') . $data->images_name.'" style="width:150px;" class="thumbnail"></span></td>';
            ?>
            <td style="text-align: -webkit-center;"><input style="text-align:center;width: 200px;" id="order<?php echo $data->id ?>" type="text" class="form-control form-control-sm OrderCate" value="<?php echo $data->sort_number ?>" onChange="updateOrder('<?php echo $data->id ?>', 'sort_number', this.value)">
                <input type="hidden" id="chkOrder<?php echo $data->id ?>" value="<?php echo $data->sort_number ?>"></td><?php
            echo '<td width="30" style="text-align: center"><button type="button" class="btn btn-danger btn-sm" onclick="comfirmDelete(\'' . $data->id . '\' , \'imgfile\', \'' . $data->images_name . '\')"><i class="icon-trash"></i></button></td>';
            echo '</tr>';
        }
        echo '</table>';
    }
    //----------------------------------
    public function loadfile() {
        $ProID = $this->input->post('ProID');
        $imglist = $this->Package_model->loadfile($ProID);
        echo '<table class="table table-bordered table-hover">';
        foreach ($imglist->result() AS $data) {
            echo '<tr id = "RowImg' . $data->id . '">';
            echo '<td><span class="text-suceess"><a href="'.base_url('uploadfile/package_pdf/').$data->images_name.'" target="_blanl"><i class="icon-arrow-down-circle">&nbsp;'.$data->images_name.'</i></a></span></td>';
            ?>
            <td style="text-align: -webkit-center;"><input style="text-align:center;width: 200px;" id="order<?php echo $data->id ?>" type="text" class="form-control form-control-sm OrderCate" value="<?php echo $data->sort_number ?>" onChange="updateOrderpdf('<?php echo $data->id ?>', 'sort_number', this.value)">
                <input type="hidden" id="chkOrder<?php echo $data->id ?>" value="<?php echo $data->sort_number ?>"></td><?php
            echo '<td width="30" style="text-align: center"><button type="button" class="btn btn-danger btn-sm" onclick="comfirmDeletepdf(\'' . $data->id . '\' , \'imgfile\', \'' . $data->images_name . '\')"><i class="icon-trash"></i></button></td>';
            echo '</tr>';
        }
        echo '</table>';
    }

    //------------------dataID changeValue //
    public function updateOrderpromo() {
        $dataID = $this->input->post('dataID');
        $changeValue = $this->input->post('changeValue');
        $result = $this->Package_model->updateOrderpromo($dataID, $changeValue);
        echo $result;
    }
    //------------------dataID changeValue //
    public function updateOrder() {
        $dataID = $this->input->post('dataID');
        $changeValue = $this->input->post('changeValue');
        $result = $this->Package_model->updateOrder($dataID, $changeValue);
        echo $result;
    }
    //------------------dataID changeValue //
    public function updateOrderpdf() {
        $dataID = $this->input->post('dataID');
        $changeValue = $this->input->post('changeValue');
        $result = $this->Package_model->updateOrderpdf($dataID, $changeValue);
        echo $result;
    }

    //-------------------------------
    public function deletepackageimg() {
        $fileType = $this->input->post('fileType');
        $DataID = $this->input->post('DataID');
        $FileName = $this->input->post('FileName');
        $result = $this->Package_model->deletepackageimg($DataID, $fileType, $FileName);
        echo $result;
    }
    //-------------------------------
    public function deleteimgpromo() {
        $fileType = $this->input->post('fileType');
        $DataID = $this->input->post('DataID');
        $FileName = $this->input->post('FileName');
        $result = $this->Package_model->deleteimgpromo($DataID, $fileType, $FileName);
        echo $result;
    }
    //-------------------------------
    public function deletepackagepdf() {
        $fileType = $this->input->post('fileType');
        $DataID = $this->input->post('DataID');
        $FileName = $this->input->post('FileName');
        $result = $this->Package_model->deletepackagepdf($DataID, $fileType, $FileName);
        echo $result;
    }
      //------------------------------------
          public function loadImgpack(){
		 $ProID = $this->input->post('ProID');
		 $imglist = $this->Package_model->loadImgpack($ProID);
		 echo '<table class="table table-bordered table-hover">';
		 foreach($imglist->result() AS $data){ 
			 echo '<tr id = "RowImg'.$data->id.'">';
			 echo '<td><span class="text-danger"><img src="'.base_url('uploadfile/package_img/').$data->img.'" style="width:150px;" class="thumbnail"></span></td>';
			 echo '<td width="30"><button type="button" class="btn btn-danger btn-sm" onclick="imgDelete(\''.$data->id.'\' , \''.$data->img.'\')"><i class="icon-trash"></i></button></td>';
			 echo '</tr>';
		 }
		 echo '</table>';
	 } 
      //------------------------------------
          public function loadImgpromotion(){
		 $ProID = $this->input->post('ProID');
		 $imglist = $this->Package_model->loadImgpromotion($ProID);
		 echo '<table class="table table-bordered table-hover">';
		 foreach($imglist->result() AS $data){ 
			 echo '<tr id = "RowImg'.$data->id.'">';
			 echo '<td><span class="text-danger"><img src="'.base_url('uploadfile/promotion_img/').$data->img.'" style="width:150px;" class="thumbnail"></span></td>';
			 echo '<td width="30"><button type="button" class="btn btn-danger btn-sm" onclick="imgDelete(\''.$data->id.'\' , \''.$data->img.'\')"><i class="icon-trash"></i></button></td>';
			 echo '</tr>';
		 }
		 echo '</table>';
	 } 
           //-------------------------------
	 public function deletecateimg(){
             $img = '';
	 	 $DataID = $this->input->post('DataID');
	 	 $FileName = $this->input->post('FileName');
		 $result = $this->Package_model->deletecateimg($DataID, $FileName,$img);
		 echo $result;
	 }
           //-------------------------------
	 public function deletepromotionimg(){
             $img = '';
	 	 $DataID = $this->input->post('DataID');
	 	 $FileName = $this->input->post('FileName');
		 $result = $this->Package_model->deletepromotionimg($DataID, $FileName,$img);
		 echo $result;
	 }
           //-------------------------------
	 public function deleteslideimg(){
             $img = '';
	 	 $DataID = $this->input->post('DataID');
	 	 $FileName = $this->input->post('FileName');
		 $result = $this->Package_model->deleteslideimg($DataID, $FileName,$img);
		 echo $result;
	 }
           //------------------------------------
          public function loadImgslide(){
		 $ProID = $this->input->post('ProID');
		 $imglist = $this->Package_model->loadImgslide($ProID);
		 echo '<table class="table table-bordered table-hover">';
		 foreach($imglist->result() AS $data){ 
			 echo '<tr id = "RowImg'.$data->id.'">';
			 echo '<td><span class="text-danger"><img src="'.base_url('uploadfile/').$data->img_name.'" style="width:150px;" class="thumbnail"></span></td>';
			 echo '<td width="30"><button type="button" class="btn btn-danger btn-sm" onclick="imgDelete(\''.$data->id.'\' , \''.$data->img_name.'\')"><i class="icon-trash"></i></button></td>';
			 echo '</tr>';
		 }
		 echo '</table>';
	 } 

  

    //-------------------	
    public function packagelist() {
        $this->load->view('package/backend/header');
        $this->load->view('package/backend/package_view');
        $this->load->view('package/backend/footer');
        $this->load->view('package/backend/package_view_script');
    }
    //-------------------	
    public function packagelistlocal() {
        $this->load->view('package/backend/header');
        $this->load->view('package/backend/package_viewlocal');
        $this->load->view('package/backend/footer');
        $this->load->view('package/backend/package_viewlocal_script');
    }

    //-------------------
    public function set_ShowOnWeb() {
        $dataID = $this->input->post('dataID');
        $check = $this->input->post('check');
        $table = $this->input->post('table');
        $result = $this->Package_model->ShowOnWeb($dataID, $check, $table);
        echo $result;
    }
    //-------------------
    public function setShow_index() {
        $dataID = $this->input->post('dataID');
        $check = $this->input->post('check');
        $table = $this->input->post('table');
        $result = $this->Package_model->Show_index($dataID, $check, $table);
        echo $result;
    }

    //-------------------------------	
    public function Option() {
        $dataid = $this->input->post('packageId');
        $data['packageID'] = $dataid;
        $this->load->view('package/backend/Option', $data);
    }

    //------------------------------- 	
    public function addoption() {
        $Traveling_date = $this->input->post('Traveling_date');
        $duration = $this->input->post('duration');
        $Adult = $this->input->post('Adult');
        $aloneAdult = $this->input->post('aloneAdult');
        $Child = $this->input->post('Child');
        $Childadd = $this->input->post('Childadd');
        $currentID = $this->input->post('currentID');
        $currentID2 = $this->input->post('currentID2');
        $result_id = $this->Package_model->addoption($currentID, $currentID2, $Traveling_date, $duration, $Adult, $aloneAdult, $Child,$Childadd);

        echo $result_id;
        //echo $Traveling_date.'/'.$duration.'/'.$Adult.'/'.$aloneAdult.'/'.$Child.'/'.$Childadd.'/'.$currentID;
    }

    //------------------------------------------
    public function checkoption() {
        $changeValue = $this->input->post('option');
        $result = $this->Package_model->count_option($changeValue);
        echo $result;
    }

    //----------------------------------	
    public function category_abroad($currentID = null) {
        $data['currentID'] = $currentID;
        $this->load->view('package/backend/header');
        $this->load->view('package/backend/cateabroad_add', $data);
        $this->load->view('package/backend/footer');
        $this->load->view('package/backend/cateabroad_add_script');
    }
    //----------------------------------	
    public function category_local($currentID = null) {
        $data['currentID'] = $currentID;
        $this->load->view('package/backend/header');
        $this->load->view('package/backend/catelocal_add', $data);
        $this->load->view('package/backend/footer');
        $this->load->view('package/backend/catelocal_add_script');
    }

    //------------------------------- 	
    public function addcate() {
        $name = $this->input->post('name');
        $currentID = $this->input->post('currentID');
        $result_id = $this->Package_model->addcate($currentID, $name);
        echo $result_id;
    }
    //------------------------------- 	
    public function addcateLocal() {
        $name = $this->input->post('name');
        $currentID = $this->input->post('currentID');
        $result_id = $this->Package_model->addcateLocal($currentID, $name);
        echo $result_id;
    }

    //--------------------------------	
    public function checkinAdd($currentID = null) {
        $data['currentID'] = $currentID;
        $this->load->view('package/backend/header');
        $this->load->view('package/backend/check_in_add', $data);
        $this->load->view('package/backend/footer');
        $this->load->view('package/backend/check_in_add_script');
    }

    //------------------------------- 	
    public function addcheckin() {
        $name = $this->input->post('name');
        $telephone = $this->input->post('telephone');
        $comment = $this->input->post('comment');
        $currentID = $this->input->post('currentID');
        $result_id = $this->Package_model->addcheckin($currentID, $name, $telephone, $comment);
        echo $result_id;
    }
  //-------------------	
    public function included($currentID = null) {
        $data['currentID'] = $currentID;
        $this->load->view('package/backend/header');
        $this->load->view('package/backend/included_view', $data);
        $this->load->view('package/backend/footer');
        $this->load->view('package/backend/included_view_script');
    }
       //----------------------------
    public function addFeature() {
        $currentID = $this->input->post('currentID');
        $name = $this->input->post('name');
        $result_id = $this->Package_model->addFeature($currentID, $name);
        echo $result_id;
    }
     //------------------------
    public function loadIncluded() {
        $included = $this->Package_model->included();
        ?>
        <form name="includedForm" id="includedForm">
            <table class="table table-bordered table-hover" id="table1">
                <thead>	
                    <tr style="background-color: #F2F2F2">
                        <th width="10" style="text-align:center">No</th>
                        <th width="281" > included name</th>
                        <th width="100" nowrap="nowrap" style="text-align:center">edit </th>
                        <th width="100" nowrap="nowrap" style="text-align:center">delete</th>
                    </tr>
                </thead>	
                <tbody>	
        <?php $n = 1;
        foreach ($included->result() as $included2) {
            ?>
                        <tr>
                            <td style="text-align:center"><?php echo $n ?></td>
                            <td>
                                <input type="text" id="name<?php echo $included2->id ?>" name="name" class="form-control form-control-sm" value="<?php echo $included2->include_name_en ?>">
                                <input type="hidden" name="dataID" id="dataID<?php echo $included2->id ?>" value="<?php echo $included2->id ?>" >  
                            </td>
                            <td style="text-align:center;" ><button type="button" class="btn btn-success btn-sm" onClick="updateThis('<?php echo $included2->id ?>')"><i class="icon-pencil"></i></button></td>
                            <td style="text-align:center;"><button type="button" class="btn btn-danger btn-sm" onClick="delete_data('<?php echo $included2->id ?>', 'tbl_package_feature')"><i class="icon-trash"></i></button></td>
                        </tr>
            <?php $n++;
        } ?>
                </tbody>
            </table> 
        </form>
        <script>
            $(document).ready(function () {
                $('#table1').DataTable({
                    searching: false,
                    ordering: false,
                    pageLength: 15,
                    lengthChange: false
                });
                ///////////////////////////////////////	

                $('[data-plugin="switchery"]').each(function (idx, obj) {
                    new Switchery($(this)[0], $(this).data());
                });
            })
        </script> 
        <?php
    }
       //-------------------
    public function remove_included() {

        $featureid = $this->input->post('featureid');
        $packageid = $this->input->post('dataID');
        $result = $this->Package_model->remove_included($featureid, $packageid);
        echo $result;
    }
 
    
    
    

  
    //-------------------------------
    public function deletePorductFile1() {
        $fileType = $this->input->post('fileType');
        $DataID = $this->input->post('DataID');
        $FileName = $this->input->post('FileName');
        $result = $this->Package_model->deleteProductFile1($DataID, $fileType, $FileName);
        echo $result;
    }

    //------------------------
    public function loadcate() {
        $cateabroadData = $this->Package_model->list_cateabroadData('2');
        $numcate = $cateabroadData->num_rows();
        if($numcate > 0){
        ?>
        <form name="placeForm" id="placeForm">
            <table class="table table-bordered table-hover" id="table1">
                <thead>	
                    <tr style="background-color: #F2F2F2">
                        <th width="10" style="text-align:center">No</th>
                        <th  >Cate Abroad</th>
                        <th  >Order</th>
                        <th  >Show on web</th>
                        <th width="100" nowrap="nowrap" style="text-align:center">edit </th>
                        <th width="100" nowrap="nowrap" style="text-align:center">delete</th>
                    </tr>
                </thead>	
                <tbody>	
        <?php $n = 1;
        foreach ($cateabroadData->result() as $cateabroadData2) {
            ?>
                        <tr>
                            <td style="text-align:center"><?php echo $n ?></td>
                            <td>
                                <input type="text" id="name<?php echo $cateabroadData2->id ?>" name="name" class="form-control form-control-sm" value="<?php echo $cateabroadData2->category_title ?>">
                                <input type="hidden" name="dataID" id="dataID<?php echo $cateabroadData2->id ?>" value="<?php echo $cateabroadData2->id ?>" >  
                            </td>
                            <td>
                                <input id="order<?php echo $cateabroadData2->id ?>" type="text" class="form-control form-control-sm OrderCate" value="<?php echo $cateabroadData2->category_order ?>" onChange="updateOrder('<?php echo $cateabroadData2->id ?>', 'category_order', this.value)">
                            </td>
                            <td align="center">
                                                <label>
                                                    <input id="ch<?php echo $cateabroadData2->id ?>"  type="checkbox" class="js-switch js-check-change" onClick="setShow_onWeb('<?php echo $cateabroadData2->id ?>', this.value, 'tb_category')" value="<?php echo $cateabroadData2->show_onweb ?>"  <?php
                                                    if ($cateabroadData2->show_onweb == '1') {
                                                        echo 'checked';
                                                    }?> data-plugin="switchery" data-color="#007bff" data-size="small"  /></label>
                                            </td>
                            <td style="text-align:center;" ><button type="button" class="btn btn-success btn-sm" onClick="updateThis('<?php echo $cateabroadData2->id ?>')"><i class="icon-pencil"></i></button></td>
                            <td style="text-align:center;"><button type="button" class="btn btn-danger btn-sm" onClick="delete_data('<?php echo $cateabroadData2->id ?>', 'tb_category')"><i class="icon-trash"></i></button></td>
                        </tr>
            <?php $n++;
        } ?>
                </tbody>
            </table> 
        </form>
        <script>
            $(document).ready(function () {
                $('#table1').DataTable({
                    searching: false,
                    ordering: false,
                    pageLength: 15,
                    lengthChange: false
                });
                ///////////////////////////////////////	

                $('[data-plugin="switchery"]').each(function (idx, obj) {
                    new Switchery($(this)[0], $(this).data());
                });
            })
        </script> 
        <?php
    }
    }
    //------------------------
    public function loadcatelocal() {
        $cateabroadData = $this->Package_model->list_catelocalData('1');
        $numcate = $cateabroadData->num_rows();
        if($numcate > 0){
        ?>
        <form name="placeForm" id="placeForm">
            <table class="table table-bordered table-hover" id="table1">
                <thead>	
                    <tr style="background-color: #F2F2F2">
                        <th width="10" style="text-align:center">No</th>
                        <th  >Cate Abroad</th>
                        <th  >Order</th>
                        <th  >Show on web</th>
                        <th width="100" nowrap="nowrap" style="text-align:center">edit </th>
                        <th width="100" nowrap="nowrap" style="text-align:center">delete</th>
                    </tr>
                </thead>	
                <tbody>	
        <?php $n = 1;
        foreach ($cateabroadData->result() as $cateabroadData2) {
            ?>
                        <tr>
                            <td style="text-align:center"><?php echo $n ?></td>
                            <td>
                                <input type="text" id="name<?php echo $cateabroadData2->id ?>" name="name" class="form-control form-control-sm" value="<?php echo $cateabroadData2->category_title ?>">
                                <input type="hidden" name="dataID" id="dataID<?php echo $cateabroadData2->id ?>" value="<?php echo $cateabroadData2->id ?>" >  
                            </td>
                            <td>
                                <input id="order<?php echo $cateabroadData2->id ?>" type="text" class="form-control form-control-sm OrderCate" value="<?php echo $cateabroadData2->category_order ?>" onChange="updateOrder('<?php echo $cateabroadData2->id ?>', 'category_order', this.value)">
                            </td>
                            <td align="center">
                                                <label>
                                                    <input id="ch<?php echo $cateabroadData2->id ?>"  type="checkbox" class="js-switch js-check-change" onClick="setShow_onWeb('<?php echo $cateabroadData2->id ?>', this.value, 'tb_category_local')" value="<?php echo $cateabroadData2->show_onweb ?>"  <?php
                                                    if ($cateabroadData2->show_onweb == '1') {
                                                        echo 'checked';
                                                    }?> data-plugin="switchery" data-color="#007bff" data-size="small"  /></label>
                                            </td>
                            <td style="text-align:center;" ><button type="button" class="btn btn-success btn-sm" onClick="updateThis('<?php echo $cateabroadData2->id ?>')"><i class="icon-pencil"></i></button></td>
                            <td style="text-align:center;"><button type="button" class="btn btn-danger btn-sm" onClick="delete_data('<?php echo $cateabroadData2->id ?>', 'tb_category_local')"><i class="icon-trash"></i></button></td>
                        </tr>
            <?php $n++;
        } ?>
                </tbody>
            </table> 
        </form>
        <script>
            $(document).ready(function () {
                $('#table1').DataTable({
                    searching: false,
                    ordering: false,
                    pageLength: 15,
                    lengthChange: false
                });
                ///////////////////////////////////////	

                $('[data-plugin="switchery"]').each(function (idx, obj) {
                    new Switchery($(this)[0], $(this).data());
                });
            })
        </script> 
        <?php
    }
    }
	//------------------------
    public function loadslideticket() {
        $slideticket = $this->Package_model->list_slideticket();
        $numcate = $slideticket->num_rows();
        if($numcate > 0){
        ?>
        <form name="placeForm" id="placeForm">
            <table class="table table-bordered table-hover" id="table1">
                <thead>	
                    <tr style="background-color: #F2F2F2">
                        <th width="10" style="text-align:center">No</th>
                        <th  >Image</th>
                        <th  >Order</th>
                        <th  >Show on web</th>
                     
                        <th width="100" nowrap="nowrap" style="text-align:center">delete</th>
                    </tr>
                </thead>	
                <tbody>	
        <?php $n = 1;
        foreach ($slideticket->result() as $slideticket2) {
            ?>
                        <tr>
                            <td style="text-align:center"><?php echo $n ?></td>
                            <td><span class="text-danger"><img src="<?php echo base_url('uploadfile/slideticket/') . $slideticket2->img?>" style="width:150px;" class="thumbnail"></span></td>
                            <td>
                                <input id="order<?php echo $slideticket2->id ?>" type="text" class="form-control form-control-sm OrderCate" value="<?php echo $slideticket2->slide_order ?>" onChange="updateOrder('<?php echo $slideticket2->id ?>', 'slide_order', this.value)">
                            </td>
                            <td align="center">
                                                <label>
                                                    <input id="ch<?php echo $slideticket2->id ?>"  type="checkbox" class="js-switch js-check-change" onClick="setShow_onWeb('<?php echo $slideticket2->id ?>', this.value, 'tbl_ticket_slide')" value="<?php echo $slideticket2->show_onweb ?>"  <?php
                                                    if ($slideticket2->show_onweb == '1') {
                                                        echo 'checked';
                                                    }?> data-plugin="switchery" data-color="#007bff" data-size="small"  /></label>
                                            </td>
                            
                            <td style="text-align:center;"><button type="button" class="btn btn-danger btn-sm" onClick="delete_data('<?php echo $slideticket2->id ?>', 'tbl_ticket_slide','<?php echo $slideticket2->img?>')"><i class="icon-trash"></i></button></td>
                        </tr>
            <?php $n++;
        } ?>
                </tbody>
            </table> 
        </form>
        <script>
            $(document).ready(function () {
                $('#table1').DataTable({
                    searching: false,
                    ordering: false,
                    pageLength: 15,
                    lengthChange: false
                });
                ///////////////////////////////////////	

                $('[data-plugin="switchery"]').each(function (idx, obj) {
                    new Switchery($(this)[0], $(this).data());
                });
            })
        </script> 
        <?php
    }
    }
       //---------------------------
        	public  function updateOrderslide(){
		$dataID = $this->input->post('dataID');
		$changeValue = $this->input->post('changeValue');
		$result = $this->Package_model->updateOrderslide($dataID,$changeValue);
		echo $result;
		
	}
        	public  function updateOrderCate(){
		$dataID = $this->input->post('dataID');
		$changeValue = $this->input->post('changeValue');
		$result = $this->Package_model->updateOrderCate($dataID,$changeValue);
		echo $result;
		
	}
       //---------------------------
        	public  function updateOrderexchange(){
		$dataID = $this->input->post('dataID');
		$changeValue = $this->input->post('changeValue');
		$result = $this->Package_model->updateOrderexchange($dataID,$changeValue);
		echo $result;
		
	}
       //---------------------------
        	public  function updateOrderCatelocal(){
		$dataID = $this->input->post('dataID');
		$changeValue = $this->input->post('changeValue');
		$result = $this->Package_model->updateOrderCatelocal($dataID,$changeValue);
		echo $result;
		
	}
	  //---------------------------
        	public  function updateOrderticket(){
		$dataID = $this->input->post('dataID');
		$changeValue = $this->input->post('changeValue');
		$result = $this->Package_model->updateOrderticket($dataID,$changeValue);
		echo $result;
		
	}
           //------------------------
    public function loadexchange() {
        $exchangeData = $this->Package_model->list_exchangeData();
        $numcate = $exchangeData->num_rows();
        if($numcate > 0){
        ?>
        <form name="placeForm" id="placeForm">
            <table class="table table-bordered table-hover" id="table1">
                <thead>	
                    <tr style="background-color: #F2F2F2">
                        <th width="10" style="text-align:center">No</th>
                        <th  >Currency Short</th>
                        <th  >Currency Name</th>
                        <th  >Buying</th>
                        <th  >Selling</th>
                        <th width="15" >Order</th>
                        <th >Show on web</th>
                        <th width="10" nowrap="nowrap" style="text-align:center">edit </th>
                        <th width="10" nowrap="nowrap" style="text-align:center">delete</th>
                    </tr>
                </thead>	
                <tbody>	
        <?php $n = 1;
        foreach ($exchangeData->result() as $exchangeData2) {
            ?>
                        <tr>
                            <td style="text-align:center"><?php echo $n ?></td>
                            <td>
                                <input type="text" id="csname<?php echo $exchangeData2->id ?>" name="csname" class="form-control form-control-sm" value="<?php echo $exchangeData2->currency_short ?>">
                                <input type="hidden" name="dataID" id="dataID<?php echo $exchangeData2->id ?>" value="<?php echo $exchangeData2->id ?>" >  
                            </td>
                            <td>
                                <input type="text" id="cname<?php echo $exchangeData2->id ?>" name="cname" class="form-control form-control-sm" value="<?php echo $exchangeData2->currency_name ?>">
                            </td>
                            <td>
                                <input type="text" id="buy<?php echo $exchangeData2->id ?>" name="buy" class="form-control form-control-sm" value="<?php echo $exchangeData2->buying ?>">
                            </td>
                            <td>
                                <input type="text" id="sell<?php echo $exchangeData2->id ?>" name="sell" class="form-control form-control-sm" value="<?php echo $exchangeData2->selling ?>">
                            </td>
                            <td>
                                <input id="order<?php echo $exchangeData2->id ?>" type="text" class="form-control form-control-sm OrderCate" value="<?php echo $exchangeData2->exchange_order ?>" onChange="updateOrder('<?php echo $exchangeData2->id ?>', 'category_order', this.value)" style="text-align:center">
                            </td>
                            <td align="center">
                                                <label>
                                                    <input id="ch<?php echo $exchangeData2->id ?>"  type="checkbox" class="js-switch js-check-change" onClick="setShow_onWeb('<?php echo $exchangeData2->id ?>', this.value, 'tbl_exchange_rates')" value="<?php echo $exchangeData2->show_onweb ?>"  <?php
                                                    if ($exchangeData2->show_onweb == '1') {
                                                        echo 'checked';
                                                    }?> data-plugin="switchery" data-color="#007bff" data-size="small"  /></label>
                                            </td>
                            <td style="text-align:center;" ><button type="button" class="btn btn-success btn-sm" onClick="updateThis('<?php echo $exchangeData2->id ?>')"><i class="icon-pencil"></i></button></td>
                            <td style="text-align:center;"><button type="button" class="btn btn-danger btn-sm" onClick="delete_data('<?php echo $exchangeData2->id ?>', 'tbl_exchange_rates')"><i class="icon-trash"></i></button></td>
                        </tr>
            <?php $n++;
        } ?>
                </tbody>
            </table> 
        </form>
        <script>
            $(document).ready(function () {
                $('#table1').DataTable({
                    searching: false,
                    ordering: false,
                    pageLength: 15,
                    lengthChange: false
                });
                ///////////////////////////////////////	

                $('[data-plugin="switchery"]').each(function (idx, obj) {
                    new Switchery($(this)[0], $(this).data());
                });
            })
        </script> 
        <?php
    }
    }
          //-------------------	
                public function promotion() {
                $this->load->view('package/backend/header');
                $this->load->view('package/backend/promotion');
                $this->load->view('package/backend/footer');
                $this->load->view('package/backend/promotion_script');
        }
                 //-------------------	
    public function promotionAdd($currentID = null) {
        $data['currentID'] = $currentID;
        $this->load->view('package/backend/header');
        $this->load->view('package/backend/promotion_add', $data);
        $this->load->view('package/backend/footer');
        $this->load->view('package/backend/promotion_add_script');
    }
      //----------------------------------	
    public function exchange($currentID = null) {
        $data['currentID'] = $currentID;
        $this->load->view('package/backend/header');
        $this->load->view('package/backend/exchange_add', $data);
        $this->load->view('package/backend/footer');
        $this->load->view('package/backend/exchange_add_script');
    }
	      //----------------------------------	
    public function ticketslide() {

        $this->load->view('package/backend/header');
        $this->load->view('package/backend/ticketslide');
        $this->load->view('package/backend/footer');
        $this->load->view('package/backend/ticketslide_script');
    }
    //-------------------	
    public function explanation($currentID = null) {
        $data['currentID'] = $currentID;
        $this->load->view('package/backend/header');
        $this->load->view('package/backend/explanation', $data);
        $this->load->view('package/backend/footer');
        $this->load->view('package/backend/explanation_script');
    }
         //-------------------	
                public function slide() {
                $this->load->view('package/backend/header');
                $this->load->view('package/backend/slide');
                $this->load->view('package/backend/footer');
                $this->load->view('package/backend/slide_script');
        }
                        //-------------------	
    public function slideAdd($currentID = null) {
        $data['currentID'] = $currentID;
        $this->load->view('package/backend/header');
        $this->load->view('package/backend/slide_add', $data);
        $this->load->view('package/backend/footer');
        $this->load->view('package/backend/slide_add_script');
    }
    

    //-------------------	
    public function checkinlist() {
        $this->load->view('package/backend/header');
        $this->load->view('package/backend/checkin_view');
        $this->load->view('package/backend/footer');
        $this->load->view('package/backend/checkin_view_script');
    }



    //-------------------------------	
    public function cangePassForm() {
        $this->load->view('package/backend/changepassform');
    }

    //-------------------------------  doChangePass') ', { newpass
    public function doChangePass() {
        $newpass = trim($this->input->post('newpass'));
        $id = $this->input->post('id');

        $result = $this->Package_model->doChangePass($newpass,$id);
        echo $result;
    }

    //-------------------	
    public function bookinglist() {
         $data['checkinData'] =$this->Package_model->list_bookingData();
        $this->load->view('package/backend/header');
        $this->load->view('package/backend/booking_view',$data);
        $this->load->view('package/backend/footer');
        $this->load->view('package/backend/booking_view_script');
    }
     //------------------------------- 	
    public function addexchange() {
        $csname = $this->input->post('csname');
        $cname = $this->input->post('cname');
        $Buying = $this->input->post('Buying');
        $Selling = $this->input->post('Selling');
        $currentID = $this->input->post('currentID');
        $result_id = $this->Package_model->addexchange($currentID, $csname,$cname,$Buying,$Selling);
        echo $result_id;
    }
    
    //------------------------------- 	
    public function addslide() {
        $Country = $this->input->post('Country');
        $topic = $this->input->post('topic');
        $currentID = $this->input->post('currentID');
        $imgold = $this->input->post('imgold');
				$slide_img = $this->input->post('slide_img');
                                if(($slide_img!='')&&($imgold !='')){
                                    @unlink('./uploadfile/' . $imgold);
                                }
	$upload_path = './uploadfile/';
				$upload_pathName = 'uploadfile/';
				$config['upload_path'] = $upload_path;
				//allowed file types. * means all types
				$config['allowed_types'] = 'jpg|png|gif';
				//allowed max file size. 0 means unlimited file size
				$config['max_size'] = '0';
				//max file name size
				$config['max_filename'] = '255';
				//whether file name should be encrypted or not
				$config['encrypt_name'] = TRUE;
				//store image info once uploaded
				$image_data = array();
				//check for errors
				$is_file_error = FALSE;
		 	
		    $this->load->library('upload', $config);         
				//---------------------------
				$_FILES['userFile']['name'] = $_FILES['slide_img']['name'];
                $_FILES['userFile']['type'] = $_FILES['slide_img']['type'];
                $_FILES['userFile']['tmp_name'] = $_FILES['slide_img']['tmp_name'];
                $_FILES['userFile']['error'] = $_FILES['slide_img']['error'];
                $_FILES['userFile']['size'] = $_FILES['slide_img']['size'];
                $this->upload->initialize($config);
        
                 if($this->upload->do_upload('userFile')){
                    $fileData = $this->upload->data();
                    $uploadData['file_name'] = $fileData['file_name'];
                     $result_id = $this->Package_model->addslide($currentID, $Country, $topic, $uploadData['file_name']);
                }else{
                    $result_id = $this->Package_model->addslide($currentID, $Country, $topic, $imgold);
                }
        echo $result_id;
    }
     //------------------------------- 	
    public function addslideticket() {
      
	$upload_path = './uploadfile/slideticket/';
				$upload_pathName = 'uploadfile/slideticket/';
				$config['upload_path'] = $upload_path;
				//allowed file types. * means all types
				$config['allowed_types'] = 'jpg|png|gif';
				//allowed max file size. 0 means unlimited file size
				$config['max_size'] = '0';
				//max file name size
				$config['max_filename'] = '255';
				//whether file name should be encrypted or not
				$config['encrypt_name'] = TRUE;
				//store image info once uploaded
				$image_data = array();
				//check for errors
				$is_file_error = FALSE;
		 	
		    $this->load->library('upload', $config);         
				//---------------------------
				$_FILES['userFile']['name'] = $_FILES['img']['name'];
                $_FILES['userFile']['type'] = $_FILES['img']['type'];
                $_FILES['userFile']['tmp_name'] = $_FILES['img']['tmp_name'];
                $_FILES['userFile']['error'] = $_FILES['img']['error'];
                $_FILES['userFile']['size'] = $_FILES['img']['size'];
                $this->upload->initialize($config);
        
                 if($this->upload->do_upload('userFile')){
                    $fileData = $this->upload->data();
                    $uploadData['file_name'] = $fileData['file_name'];
                     $result_id = $this->Package_model->addslideticket($uploadData['file_name']);
                }
        echo $result_id;
    }
       //-------------------	
                public function Admin_add() {
                $this->load->view('package/backend/header');
                $this->load->view('package/backend/Admin');
                $this->load->view('package/backend/footer');
                $this->load->view('package/backend/Admin_script');
        }
         //-------------------	
    public function Add_admin($currentID = null) {
        $data['currentID'] = $currentID;
        $this->load->view('package/backend/header');
        $this->load->view('package/backend/admin_add', $data);
        $this->load->view('package/backend/footer');
        $this->load->view('package/backend/admin_add_script');
    }
        //-----------------------------
         public function add_admin1() {
             $Name = $this->input->post('name');
             $username = $this->input->post('user_name');
             $Password = $this->input->post('Password');
             $password_old = $this->input->post('oldpass');
             $dataID = $this->input->post('currentID');
             $result = $this->Package_model->add_admin($Name,$username,$Password,$password_old,$dataID);

		echo $result;
         }




    //-------------------------------------------
    public function searchdata() {
        $SearchBooking = $this->input->post('SearchBooking');
        $datepicker1 = $this->input->post('datepicker1');
        $status = $this->input->post('status');

        if (($datepicker1 != '') && ($datepicker1 != '0000-00-00')) {

            $dateArray = explode("/", $datepicker1);
            $date = $dateArray[0];
            $mon = $dateArray[1];
            $year = $dateArray[2];
            $datepicker1 = $year . "-" . $mon . "-" . $date;
            /* } else {
              $txtWhere2 = ''; */
        }
        $result_id = $this->Package_model->search($SearchBooking, $datepicker1,$status);
        {
            ?>
            <table id="table2" class="table table-hover">
                                <thead>
                                    <tr>
                                       
                                        <th style="text-align:center;">หมายเลขการจอง</th>
                                        <th style="text-align:center;">ชื่อผู้จอง</th>
                                        <th style="text-align:center;">จำนวนเงิน</th>
                                        <th style="text-align:center;">วันที่ทำการจอง</th>
                                        <th style="text-align:center;" width="7%">รายละเอียด</th>
                                        <?php if($status=='1'){?>
                                        <th style="text-align:center;" width="7%">ยกเลิก</th>
                                        <th style="text-align:center;" width="7%">จัดเก็บ</th>
                                        <?php }?>
                                        <th style="text-align:center;" width="7%">ลบ</th>
                                    </tr>
                                </thead>
                                <tbody>
 <?php 
 
    foreach ($result_id->result() AS $Data) {?>	
                                        <tr id="row<?php echo $Data->id ?>" >
                                           
                                            <td><?php echo $Data->booking_id ?></td>
                                            <td style="text-align:center;"><?php echo $Data->customer_name ?> <?php echo $Data->customer_Lastname?><br><?php echo $Data->customer_telephone ?></td>
                                            <td style="text-align:center;">
                                                <?php echo number_format($Data->total_price) ?>
                                            </td>
                                            <td style="text-align:center;"><?php echo $this->Package_model->GetEngDateTime($Data->date_booking);?></td>
                                            <?php if($status=='1'){?>
                                             <?php if($Data->option_id != '0'){?>
                                            <td style="text-align:center;" > <a href="#" onClick="windowOpener('770', '1000', 'windowName', 'email_book_package/<?php echo $Data->booking_id?>')"><button type="button" class="btn btn-xs btn-info btn-sm" data-toggle="button" style="width: 88.28px" >Detail</button></a></td>
                                             <?php }else{?>
                                            <td style="text-align:center;" > <a href="#" onClick="windowOpener('770', '1200', 'windowName', 'email_book_noprice/<?php echo $Data->booking_id?>')"><button type="button" class="btn btn-xs btn-info btn-sm" data-toggle="button" style="width: 88.28px" >Detail</button></a></td>
                                            <?php }?>
                                            <?php }else{?>
                                            <?php if($Data->option_id != '0'){?>
                                            <td style="text-align:center;" > <a href="#" onClick="windowOpener('770', '1000', 'windowName', 'email_book_package/<?php echo $Data->booking_id?>')"><button type="button" class="btn btn-xs btn-info btn-sm" data-toggle="button" style="width: 88.28px" >Detail</button></a></td>
                                             <?php }else{?>
                                            <td style="text-align:center;" > <a href="#" onClick="windowOpener('770', '1200', 'windowName', 'email_book_noprice/<?php echo $Data->booking_id?>')"><button type="button" class="btn btn-xs btn-info btn-sm" data-toggle="button" style="width: 88.28px" >Detail</button></a></td>
                                            <?php }?>
                                            <?php }?>
                                             <?php if($status=='1'){?>
                                           <td style="text-align:center;" >
                                               <button  type="button" class="btn btn-warning btn-sm" onClick="save_data('<?php echo $Data->id ?>', ' tbl_package_booking','3')" ><i class="fa fa-archive"></i></button>
                                             </td>

                                             <td style="text-align:center;">
                                                 <button  type="button" class="btn btn-success btn-sm" onClick="save_data('<?php echo $Data->id ?>', ' tbl_package_booking','2')" ><i class="fa fa-archive"></i></button>
                                             </td>
                                               <?php }?>
                                            <td style="text-align:center;">
                                                <button   type="button" class="btn btn-danger btn-sm" onClick="delete_data('<?php echo $Data->id ?>', 'tbl_package_booking')" ><i class="icon-trash"></i></button>
                                            </td>
                                        </tr>
                                    <?php }?>
                                </tbody>
                            </table>
        <?php } ?>
       <script type="text/javascript">
            $(document).ready(function () {
                $('#table2').DataTable(

                        );
            });
                       //----------------------
	function save_data(dataID,table,status){  
		 var title = '';
            if(status=='2'){
                title = 'Save?';
            }else{
                title = 'Cancel?';
            }
		swal({
                    
           title: title,
           //text: "You won't be able to revert this!",
           type: 'warning',
           showCancelButton: true,
           confirmButtonClass: 'btn btn-confirm mt-2',
           cancelButtonClass: 'btn btn-cancel ml-2 mt-2',
           confirmButtonText: 'Yes'
        }).then(function () {
		   $.post('<?php echo base_url('PackageCMS/saveData')?>' , { dataID : dataID , table : table,status:status }, 
			function(data){
				if(data==1){ 
                	swal({
                        title: 'Data has been save',
                        //text: "Your file has been deleted",
                        type: 'success',
                        confirmButtonClass: 'btn btn-confirm mt-2'
                    });
                    setTimeout(function(){ window.location.href = "<?php echo base_url('PackageCMS/bookinglist')?>"; }, 2000);
				}else{
					swal({
						title: 'Can not save data!',
						//text: "You won't be able to revert this!",
						type: 'warning',
						confirmButtonClass: 'btn btn-confirm mt-2'
					})
				}
			})
		})
	}
        //----------------------
	function delete_data(dataID,table){  
		swal({
           title: 'Delete?',
           //text: "You won't be able to revert this!",
           type: 'warning',
           showCancelButton: true,
           confirmButtonClass: 'btn btn-confirm mt-2',
           cancelButtonClass: 'btn btn-cancel ml-2 mt-2',
           confirmButtonText: 'Delete Data'
        }).then(function () {
		   $.post('<?php echo base_url('PackageCMS/deleteData')?>' , { dataID : dataID , table : table }, 
			function(data){
				if(data==1){ 
                	swal({
                        title: 'Deleted Successfully',
                        //text: "Your file has been deleted",
                        type: 'success',
                        confirmButtonClass: 'btn btn-confirm mt-2'
                    });
                    setTimeout(function(){ window.location.href = "<?php echo base_url('PackageCMS/bookinglist')?>"; }, 2000);
				}else{
					swal({
						title: "Data can't be deleted. !",
						//text: "You won't be able to revert this!",
						type: 'warning',
						confirmButtonClass: 'btn btn-confirm mt-2'
					})
				}
			})
		})
	}
        </script>
        
    <?php
    }

  
//---------------------------------------------------------
    function action() {
        $this->load->library("excel");
        $object = new PHPExcel();

        $object->setActiveSheetIndex(0);

        $table_columns = array("Transfer keygroup", "Check in", "Customer name", "Customer telephone", "Total price", "Date booking", "Status");

        $column = 0;

        foreach ($table_columns as $field) {
            $object->getActiveSheet()->getStyle('1:1')->getFont()->setBold(true);
            $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
            $column++;
        }

        $employee_data = $this->Package_model->fetch_data();

        $excel_row = 2;

        foreach ($employee_data as $row) {
            $cf = '';
            if ($row->cf_status == 1) {
                $cf = 'Pending';
            } else if ($row->cf_status == 2) {
                $cf = 'Confirm';
            } else {
                $cf = 'Cancel';
            }
            $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->transfer_keygroup);
            $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->date_depart);
            $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->customer_name);
            $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->customer_telephone);
            $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->total_price);
            $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->date_booking);
            $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $cf);
            $excel_row++;
        }
        $today = date("d-m-Y");
        $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="Report Package Booking ' . $today . '.xls"');
        $object_writer->save('php://output');
    }

//---------------------------------------------------------
    function action2() {
        $this->load->library("excel");
        $object = new PHPExcel();

        $object->setActiveSheetIndex(0);

        $table_columns = array("Transfer keygroup", "Check in", "Customer name", "Customer telephone", "Total price", "Date booking", "Status");

        $column = 0;

        foreach ($table_columns as $field) {
            $object->getActiveSheet()->getStyle('1:1')->getFont()->setBold(true);
            $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
            $column++;
        }

        $employee_data = $this->Package_model->fetch_data2();

        $excel_row = 2;

        foreach ($employee_data as $row) {
            $cf = '';
            if ($row->cf_status == 1) {
                $cf = 'Pending';
            } else if ($row->cf_status == 2) {
                $cf = 'Confirm';
            } else {
                $cf = 'Cancel';
            }
            $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->transfer_keygroup);
            $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->date_depart);
            $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->customer_name);
            $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->customer_telephone);
            $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->total_price);
            $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->date_booking);
            $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $cf);
            $excel_row++;
        }
        $today = date("d-m-Y");
        $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="Report Package Cancel ' . $today . '.xls"');
        $object_writer->save('php://output');
    }



    //----------------------------------
    function delete_all() {
        if ($this->input->post('checkbox_value')) {
            $id = $this->input->post('checkbox_value');
            for ($count = 0; $count < count($id); $count++) {
                $this->Package_model->delete($id[$count]);
            }
        }
    }

  
    //-----------------------------------------
    public function Reportbooking($status=Null) {
        $data['checkinData'] =$this->Package_model->list_bookingDatasave($status);
        $data['status'] = $status;
        $this->load->view('package/backend/header');
        $this->load->view('package/backend/report_booking_view',$data);
        $this->load->view('package/backend/footer');
        $this->load->view('package/backend/report_booking_view_script');
    }

    //-------------------
    public function saveData() {
        $dataID = $this->input->post('dataID');
        $table = $this->input->post('table');
        $status = $this->input->post('status');
        $result = $this->Package_model->saveData($dataID, $table,$status);
        echo $result;
    }

    //-------------------
    public function cancelData() {
        $dataID = $this->input->post('dataID');
        $table = $this->input->post('table');
        $result = $this->Package_model->cancelData($dataID, $table);
        echo $result;
    }

    //----------------------------------
    function save_all() {
        if ($this->input->post('checkbox_value')) {
            $id = $this->input->post('checkbox_value');
            for ($count = 0; $count < count($id); $count++) {
                $this->Package_model->save_all($id[$count]);
            }
        }
    }

   
    //-----------------------------------------
    public function email_book_package() {
        $this->load->view('package/backend/email_book_package');
    }

    //-----------------------------------------
    public function email_book_noprice() {
        $this->load->view('package/backend/email_book_noprice');
    }

    //----------------------------
    public function confrim_datapackage() {
        $keygroup = $this->input->post('keygroup');
        $textareapdf = $this->input->post('textareapdf');
        $result_id = $this->Package_model->confrim_data($keygroup, $textareapdf);
   if ($result_id == 1) {
           	$txt='';
		/*$emaildata = $this->input->post('email');
		$typedata = $this->input->post('type');
		$userID = $this->input->post('userID');*/		
		$keygroup = $this->input->post('keygroup');				
             $checkinData = $this->Package_model->getbooking($keygroup);
             foreach($checkinData->result() as $Data){} 
             if ($Data->cf_status == 1){ $txt='Pending';}else if($Data->cf_status == 2){ $txt='Confrim ';}else{ $txt='Cancel';}
             
             $table = 'tbl_package_booking';
		$key_value1 = $this->Package_model->generateRandomString();	
		$key_value3 = $this->Package_model->generateRandomString();	
		$date1 = date("d");
		$key_value2 = $key_value1.$keygroup.'#'.$date1.$key_value3;		
		
		$from_email = 'sunnyhatyai@gmail.com';
		$subject = "Booking Package ใบแจ้งการจองแพ็คเกจ";		
		//$to_email = $editor_data2->email;
		//$to_email = $emaildata;
		$to_email = $Data->customer_email;
		$email_body = '<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Booking Package</title>
<style>
	body{
		margin: 15px 0px 0px;
		
	}
	tr td{
		font-family: tahoma, serif;
		font-size: 10pt;
		color: #56201D; 
	}
</style>
</head>
        <link href="'.base_url().'assets/css/icons.css" rel="stylesheet" type="text/css" />
                <link href="'.base_url().'assets/css/style.css" rel="stylesheet" type="text/css" />
                 <link href="'.base_url().'assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#EFEFEF">
  <tbody>
    <tr>
      <td bgcolor="#EFEFEF">
<table width="80%" border="0" align="center" cellpadding="0" cellspacing="0">
 <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
      <td height="120" bgcolor="#E7E7E7"><img src="'.base_url().'images/email/logo.png" align="left" width="550" height="127" style="margin-top: -55px; padding-left: 15px;"></td>
      <td align="right" bgcolor="#E7E7E7"><img src="'.base_url().'images/email/promotion.png" width="167" height="58"  style="padding-right: 50px;" /></td>
    </tr>
    <tr>
      <td height="70" colspan="2" bgcolor="#E7E7E7"><table width="90%"  border="0" cellspacing="2" align="center" cellpadding="0" bgcolor="#FFFFFF">
        <tbody>
          <tr>
            <td width="19%" height="25" align="right"><strong>CUSTOMER NAME : </strong></td>
            <td height="25" colspan="5" align="left">'.$Data->customer_name.' '.$Data->customer_Lastname.'</td>
          </tr>
          <tr>
            <td height="25" align="right"><strong>TEL : </strong></td>
            <td width="19%" height="25" align="left">'.$Data->customer_telephone.'</td>
            <td width="9%" height="25" align="left"><strong>EMAIL : </strong></td>
            <td width="28%" height="25" align="left">'.$Data->customer_email.'</td>
            <td width="10%" height="25" align="left"><strong>ID LINE : </strong></td>
            <td width="15%" height="25" align="left">'.$Data->IDLine.'</td>
          </tr>
        </tbody>
      </table></td>
    </tr>
    <tr>
      <td height="197" colspan="2" bgcolor="#E7E7E7"><table width="90%" align="center" border="0" cellspacing="4" cellpadding="0" bgcolor="#FFFFFF">
              
        <tbody>
          <tr>
            <td width="40%" height="25" align="right"><strong>PACKAGE BOOKING ID : </strong></td>
            <td width="62%" height="25" align="left">'.$keygroup.'</td>
          </tr>
          <tr>
            <td height="25" align="right"><strong>PACKAGE : </strong></td>
            <td height="25" align="left">'.$Data->package_name_en.'</td>
          </tr>
          <tr>
            <td width="40%" height="25" align="right"><strong>DEPARTING : </strong></td>
            <td height="25" align="left">'.$this->Package_model->GetEngDateTime1($Data->date_depart).'</td>
          </tr>
          <tr>
            <td width="40%" height="25" align="right"><strong>ADULT : </strong></td>
            <td height="25" align="left">'.$Data->customer_adult.'</td>
          </tr>
          <tr>
            <td width="40%" height="25" align="right"><strong>CHILDREN (3-10 YEARS) : </strong></td>
            <td height="25" align="left">'.$Data->customer_child.'</td>
          </tr>
            <tr>
            <td width="40%" height="25" align="right"><strong>PAYMENT TOTAL : </strong></td>
            <td height="25" align="left">'. number_format($Data->total_price).'</td>
          </tr>
          <tr>
            <td width="40%" height="25" align="right"><strong>STATUS : </strong></td>
            <td height="25" align="left">'.$txt.'</td>
          </tr>
          <tr>
              <td colspan="2">
                   <div class="about-text">
                            <div class="post post-single">
								<div class="post-meta-share">
								
										<p style="font-size: 18px; color: #2f79b1 !important">ช่องทางการชำระเงิน</p>
									
								</div>
							</div>
                  <div class="about-description">  
                              <table width="100%" border="0" cellspacing="0" cellpadding="0"  style="border:0px;">
								  <tbody>
									<tr>
									  <td align="center" style="background-color: #2f79b1; color: #FFFFFF"><strong>BANK NAME</strong></td>
									  <td align="center" style="background-color: #2f79b1; color: #FFFFFF"><strong>ACCOUNT NAME</strong></td>
									  <td align="center" style="background-color: #2f79b1; color: #FFFFFF"><strong>ACCOUNT NO.</strong></td>
									  <td align="center" style="background-color: #2f79b1; color: #FFFFFF"><strong>SWIFT CODE</strong></td>
									</tr>
									<tr>
									  <td align="center" style="background-color: #cbe3f7;">Kasikorn Bank</td>
									  <td align="center" style="background-color: #cbe3f7;">นายมะสุกรี หีมแอ</td>
									  <td align="center" style="background-color: #cbe3f7;">123-x-xxxxx-x</td>
									  <td align="center" style="background-color: #cbe3f7;">KASITHBK</td>
									</tr>
									<tr>
									  <td align="center" style="background-color: #ddecf9;">Krungthai Bank</td>
									  <td align="center" style="background-color: #ddecf9;">นายมะสุกรี หีมแอ</td>
									  <td align="center" style="background-color: #ddecf9;">123-x-xxxxx-x</td>
									  <td align="center" style="background-color: #ddecf9;">xxxx</td>
									</tr>
									<tr>
									  <td align="center" style="background-color: #cbe3f7;">Bangkok Bank</td>
									  <td align="center" style="background-color: #cbe3f7;">นายมะสุกรี หีมแอ</td>
									  <td align="center" style="background-color: #cbe3f7;">123-x-xxxxx-x</td>
									  <td align="center" style="background-color: #cbe3f7;">xxxxx</td>
									</tr>
								  </tbody>
								</table>                        
                          		
                           		<div style="width: 300px; padding: 5px; margin: 15px 0px;  border-radius: 10px;  background-color: #be1919; color: #FFFFFF; text-align:
                               center"><strong>วิธีเเจ้งการชำระเงิน (เลือกข้อใดข้อหนึ่ง)</strong></div>
                                <p style="padding: 5px 25px;  border-radius: 10px;  background-color: #d8d8d8;">รบกวนถ่ายรูป Capture หรือเก็บสลิปการชำระเงิน และแนบไฟล์ หรือแจ้งให้เราทราบ
									<ul>
										<li>โทรเเจ้งยอดชำระกับทางเจ้าหน้าที่ที่เบอร์ +66 (0) 87-392-2518</li>
										<li>ส่งหลักฐานการการชำระ มาที่อีเมล์ xxxxx@travellipe.com พร้อมระบุชื่อ นามสกุล, เบอร์โทรศัพท์ติดต่อกลับ</li>
										<li>ส่งหลักฐานไปทาง Line: 089-204-0156 </li>
									</ul>                                
                                </p>
                                
                            </div>
                            </div>
              </td>
          </tr>
          </tbody>
      </table>
      </td>
    </tr>
    <tr>
      <td bgcolor="#B8B8B8"><img src="'.base_url().'images/email/address.png" align="left" width="287" height="97"/></td>
      <td align="right" bgcolor="#B8B8B8"><img src="'.base_url().'images/email/logo-header.png" style="padding-right: 50px;" /></td>
    </tr>
  </tbody>
</table>
</body>
</html>';	 	
		
//		$this->email->from($from_email, 'Booking Package Moonlight Travel'); 
//        $this->email->to($to_email);
//        $this->email->subject($subject); 
//       	$this->email->message($email_body); 
//        //Send mail 
//		//$this->email->send();  
//		if($this->email->send()){ 
            $this->email->from($from_email, 'Booking Transport Moonlight Travel');
            $this->email->to($to_email);
            $this->email->subject($subject);
            $this->email->message($email_body);
        if($this->email->send()){ 
		   	$result2 = 1;			
        }	
          	$result = $result2;  
       // }			
        }
        echo $result;
    }

    //----------------------------
    public function confrim_data1() {
        $keygroup = $this->input->post('keygroup');
        $textareapdf = $this->input->post('textareapdf');
        $result_id = $this->Package_model->confrim_data1($keygroup, $textareapdf);
        if ($result_id == 1) {
            $txt = '';
            $r = '';
            //echo '.................................'.$keygroup;
            $getbooking_title = $this->Package_model->getbooking_title($keygroup);
            foreach ($getbooking_title->result() AS $getbooking_title2) {
                
            }
            $adultstravel = $getbooking_title2->adult_traveller;
            $childtravel = $getbooking_title2->child_traveller;
            $totalpeople = $adultstravel + $childtravel;
            if ($getbooking_title2->cf_status == 1) {
                $txt = 'Pending';
            } else if ($getbooking_title2->cf_status == 2) {
                $txt = 'Confrimed ';
            } else {
                $txt = 'Cancel';
            }
            $route_id = $getbooking_title2->route_id;
            $list_route = $this->transport_model->listRoute($r, $route_id);
            foreach ($list_route->result() AS $list_route2) {
                
            }
            $list_placebegin = $this->Package_model->list_placeData($list_route2->begin_place_id);
            foreach ($list_placebegin->result() AS $list_placebegin2) {
                
            }
            $list_placedes = $this->Package_model->list_placeData($list_route2->destination_place_id);
            foreach ($list_placedes->result() AS $list_placedes2) {
                
            }
            $Routetype = $this->transport_model->get_routeType($route_id, $getbooking_title2->route_type_id, $r, 'yes', 'id');
            foreach ($Routetype->result() as $Data) {
                
            }
            $dayofweek = date('l', strtotime($getbooking_title2->date_depart));
            $times = $this->transport_model->get_timeDetail($r, $r, $r, $r, $getbooking_title2->time_id);
            //$numTime = $times->num_rows();
            //if($numTime >0){						   	
            foreach ($times->result() as $times2) {
                
            }
            $times1 = date('H:i', strtotime($times2->arrive_time . '+' . $Data->transfer_h_time . ' hours'));
            $times1 = date('H:i', strtotime($times1 . '+' . $Data->transfer_m_time . ' minutes'));
            $table = 'tbl_package_booking';
            $key_value1 = $this->Package_model->generateRandomString();
            $key_value3 = $this->Package_model->generateRandomString();
            $date1 = date("d");
            $key_value2 = $key_value1 . $keygroup . '#' . $date1 . $key_value3;

            $from_email = 'sunnyhatyai@gmail.com';
            $subject = "Booking Transport ใบแจ้งการจองเรือ";
            //$to_email = $editor_data2->email;
            //$to_email = $emaildata;
            $to_email = $getbooking_title2->cust_email;
            $email_body = '<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Booking Package</title>
<style>
	body{
		margin: 15px 0px 0px;
		
	}
	tr td{
		font-family: tahoma, serif;
		font-size: 10pt;
		color: #56201D; 
	}
</style>
</head>
<body>      
<table width="80%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
      <td height="120" bgcolor="#E7E7E7"><img src="' . base_url() . 'html/images/email/logo-trip.png" align="left" width="550" height="127" style="margin-top: -55px; padding-left: 15px;"></td>
      <td align="right" bgcolor="#E7E7E7"><img src="' . base_url() . 'html/images/email/promotion.png" width="167" height="58"  style="padding-right: 50px;" /></td>
    </tr>
    <tr>
      <td height="70" colspan="2" bgcolor="#E7E7E7"><table width="90%"  border="0" cellspacing="2" align="center" cellpadding="0" bgcolor="#FFFFFF">
        <tbody>
          <tr>
            <td width="19%" height="25" align="right"><strong>CUSTOMER NAME  :</strong></td>
            <td height="25" colspan="5" align="left">' . $getbooking_title2->cust_name . ' ' . $getbooking_title2->cust_lastname . '</td>
          </tr>
          <tr>
            <td height="25" align="right"><strong>TEL :</strong></td>
            <td width="19%" height="25" align="left">' . $getbooking_title2->cust_telephone_num . '</td>
            <td width="9%" height="25" align="left"><strong>EMAIL  :</strong></td>
            <td width="28%" height="25" align="left">' . $getbooking_title2->cust_email . '</td>
            <td width="10%" height="25" align="left"><strong>ID LINE :</strong></td>
            <td width="15%" height="25" align="left">' . $getbooking_title2->cust_line . '</td>
          </tr>
        </tbody>
      </table></td>
    </tr>
    <tr>
      <td height="197" colspan="2" bgcolor="#E7E7E7">
       <table width="90%" align="center" border="0" cellspacing="4" cellpadding="0" bgcolor="#FFFFFF">
        <tbody>
          <tr>
            <td width="40%" height="25" align="right"><strong>BOOKING ID :</strong></td>
            <td width="62%" height="25" align="left">' . $keygroup . '</td>
          </tr>
          <tr>
            <td height="25" align="right"><strong>ROUTING :</strong></td>
            <td height="25" align="left">' . $list_placebegin2->place_name_en . '  to  ' . $list_placedes2->place_name_en . '</td>
          </tr>
          <tr>
            <td width="40%" height="25" align="right"><strong>DEPARTING :</strong></td>
            <td height="25" align="left">' . $dayofweek . ',' . $this->Package_model->GetEngDateTime2($getbooking_title2->date_depart) . '</td>
          </tr>
          <tr>  
            <td width="40%" height="25" align="right"><strong>TIME :</strong></td>
            <td height="25" align="left">' . $times2->arrive_time . ' > ' . $times1 . '</td>
          </tr>
          <tr>
            <td width="40%" height="25" align="right"><strong>ADULT :</strong></td>
            <td height="25" align="left"> ' . $adultstravel . '</td>
          </tr>
          <tr>
            <td width="40%" height="25" align="right"><strong>CHILDREN (3-10 YEARS) :</strong></td>
            <td height="25" align="left"> ' . $childtravel . '</td>
          </tr>
          <tr>
            <td width="40%" height="25" align="right"><strong>PAYMENT TOTAL : </strong></td>
            <td height="25" align="left">' . number_format($getbooking_title2->total_price) . ' THB</td>
          </tr>
          <tr>
            <td width="40%" height="25" align="right"><strong>STATUS : </strong></td>
            <td height="25" align="left">' . $txt . '</td>
          </tr>
          
          <tr>
            <td colspan="2">
            	<!------ Trip Detail ------->         
       			<div style="margin:0 auto; padding: 10px; background-color: #FFFFFF; width: 84%">            
				 <h2 class="title-detail" style="color: #2f79b1;">Trip Details:</h2>
				 <!-- Accordion -->
					  <div class="panel-group no-margin" id="accordion">
								  <!-- Accordion 1 -->
								  <div class="panel">
									 <div id="collapseOne" class="panel-collapse collapse in" aria-labelledby="headingOne">';

            $checkDetail = $this->transport_model->checkDetail($getbooking_title2->time_id);
            $a = 0;
            $priceArray = explode("/", $getbooking_title2->adult_price);
            $priceArray2 = explode("/", $getbooking_title2->child_price);
            foreach ($checkDetail->result() as $checkDetail2) {
                $checkroute = $this->Package_model->list_placeData($checkDetail2->begin_place_id);
                foreach ($checkroute->result() as $checkroute2) {
                    
                }
                $checktransport = $this->Package_model->list_transportData($checkDetail2->transport_id);
                foreach ($checktransport->result() as $checktransport2) {
                    
                }
                $p1 = $priceArray[$a];
                $p2 = $priceArray2[$a];
                $totalprice = ($adultstravel * $p1) + ($childtravel * $p2);
                $checkroute3 = $this->Package_model->list_placeData($checkDetail2->destination_place_id);
                foreach ($checkroute3->result() as $checkroute4) {
                    
                }
                $booking_textAdmin = $this->Package_model->list_booking_textAdmin($getbooking_title2->booking_id, $checkDetail2->transport_id);
                $countbook = $booking_textAdmin->num_rows();
                foreach ($booking_textAdmin->result() as $booking_textAdmin2) {
                    
                }
                $email_body = $email_body . '
										 <div class="panel-body" style="padding-top: 10px;">                                                   
											<div class="" style="background-color: #f1f1f1; border: 1px solid #E5E5E5">
												<div class="row" style="padding: 20px 0px 20px 25px;">
													<div class="col-sm-10">
														<div class="item">
															<span><i class="fa fa-map-marker"></i></span>
															<div><strong>' . $checkDetail2->arrive_time . ' ' . $checkroute2->place_name_en . '</strong></div>														</div>
														<div class="item">															<span><i class="fa fa-ship" aria-hidden="true"  style="color:#2f79b1;"></i></span>
															<div style="color:#2f79b1; padding-top: 20px;  font-size: 14pt"><strong>' . $checktransport2->transport_name_en . '</strong></div>';
                if ($booking_textAdmin2->ticket_number != '') {
                    $email_body = $email_body . '														<p>
																<small><strong>Ticket number : </strong>' . $booking_textAdmin2->ticket_number . '<br></small>
															</p>';
                } $email_body = $email_body . '
<p>
																<small><strong>Note : </strong>' . $checkDetail2->note_checkin_en;
                if ($booking_textAdmin2->note_ckeckin_en != '') {
                    $email_body = $email_body . '                                                                             <br>' . $booking_textAdmin2->note_ckeckin_en . '</small>';
                } $email_body = $email_body . '
															</p>
														
<p style="font-size: 10pt !important"><strong><?php echo $totalpeople?> Travellers = ' . number_format($totalprice) . ' THB</strong> 			
																<ul style="font-size: 10pt; padding-bottom: 15px !important">
																	<li style="font-size: 10pt; font-weight: 100;">' . $adultstravel . ' Adults x ' . number_format($p1) . ' = ' . number_format($adultstravel * $p1) . ' THB</li>
																	<li style="font-size: 10pt; font-weight: 100;">' . $childtravel . ' Children x ' . number_format($p2) . ' = ' . number_format($childtravel * $p2) . ' THB</li>
																</ul>
															</p>															
														</div>

														<div class="item-end">
															<span><i class="fa fa-map-marker"></i></span>
															<div><strong>' . $checkDetail2->depart_time . ' ' . $checkroute4->place_name_en . '</strong></div>																	
														</div>
													</div>														
												</div>                                                    
											 </div>
										 </div>';
                $a++;
            }

            $email_body = $email_body . ' </div>
									 <!-- End Accordion 1 -->                                          
								   </div>
								   <!-- Accordion -->
								</div>
				 <!------ Trip Detail ------->
			   </div>
                           <div class="about-text">
                            <div class="post post-single">
								<div class="post-meta-share">
								
										<p style="font-size: 18px; color: #2f79b1 !important">ช่องทางการชำระเงิน</p>
									
								</div>
							</div>
                                    
                            <div class="about-description">   
                              <table width="100%" border="0" cellspacing="0" cellpadding="0"  style="border:0px;">
								  <tbody>
									<tr>
									  <td align="center" style="background-color: #2f79b1; color: #FFFFFF"><strong>BANK NAME</strong></td>
									  <td align="center" style="background-color: #2f79b1; color: #FFFFFF"><strong>ACCOUNT NAME</strong></td>
									  <td align="center" style="background-color: #2f79b1; color: #FFFFFF"><strong>ACCOUNT NO.</strong></td>
									  <td align="center" style="background-color: #2f79b1; color: #FFFFFF"><strong>SWIFT CODE</strong></td>
									</tr>
									<tr>
									  <td align="center" style="background-color: #cbe3f7;">Kasikorn Bank</td>
									  <td align="center" style="background-color: #cbe3f7;">นายมะสุกรี หีมแอ</td>
									  <td align="center" style="background-color: #cbe3f7;">123-x-xxxxx-x</td>
									  <td align="center" style="background-color: #cbe3f7;">KASITHBK</td>
									</tr>
									<tr>
									  <td align="center" style="background-color: #ddecf9;">Krungthai Bank</td>
									  <td align="center" style="background-color: #ddecf9;">นายมะสุกรี หีมแอ</td>
									  <td align="center" style="background-color: #ddecf9;">123-x-xxxxx-x</td>
									  <td align="center" style="background-color: #ddecf9;">xxxx</td>
									</tr>
									<tr>
									  <td align="center" style="background-color: #cbe3f7;">Bangkok Bank</td>
									  <td align="center" style="background-color: #cbe3f7;">นายมะสุกรี หีมแอ</td>
									  <td align="center" style="background-color: #cbe3f7;">123-x-xxxxx-x</td>
									  <td align="center" style="background-color: #cbe3f7;">xxxxx</td>
									</tr>
								  </tbody>
								</table>                        
                          		
                           		<div style="width: 300px; padding: 5px; margin: 15px 0px;  border-radius: 10px;  background-color: #be1919; color: #FFFFFF; text-align:
                               center"><strong>วิธีเเจ้งการชำระเงิน (เลือกข้อใดข้อหนึ่ง)</strong></div>
                                <p style="padding: 5px 25px;  border-radius: 10px;  background-color: #d8d8d8;">รบกวนถ่ายรูป Capture หรือเก็บสลิปการชำระเงิน และแนบไฟล์ หรือแจ้งให้เราทราบ
									<ul>
										<li>โทรเเจ้งยอดชำระกับทางเจ้าหน้าที่ที่เบอร์ +66 (0) 87-392-2518</li>
										<li>ส่งหลักฐานการการชำระ มาที่อีเมล์ xxxxx@travellipe.com พร้อมระบุชื่อ นามสกุล, เบอร์โทรศัพท์ติดต่อกลับ</li>
										<li>ส่งหลักฐานไปทาง Line: 089-204-0156 </li>
									</ul>                                
                                </p>
                                
                            </div>
                        </div>
            </td>
          </tr>
        </tbody>
      </table>
      
       
      </td>
    </tr>
    
    <tr>
    <td bgcolor="#B8B8B8"><img src="' . base_url() . 'html/images/email/address.png" align="left" width="287" height="97"/></td>
      <td align="right" bgcolor="#B8B8B8"><img src="' . base_url() . 'html/images/email/logo-header.png" style="padding-right: 50px;" /></td>
    </tr>
  </tbody>
</table>
</body>
</html>';

            $this->email->from($from_email, 'Booking Transport Moonlight Travel');
            $this->email->to($to_email);
            $this->email->subject($subject);
            $this->email->message($email_body);
//        //Send mail 
//		//$this->email->send();  
//		if($this->email->send()){ 
//                    $subject = "[For Admin] Booking Transport ใบแจ้งการจองเรือ";		
//                    $this->email->from($from_email, 'Booking Transport Moonlight Travel'); 
//        $this->email->to($from_email);
//        $this->email->subject($subject); 
//       	$this->email->message($email_body); 
            if ($this->email->send()) {
                $result2 = '1';
            }
            $result = $result2;
            //}				
        }
        echo $result;
    }

    //----------------------------
    public function cancel_data() {
        $keygroup = $this->input->post('keygroup');
        $textareapdf = $this->input->post('textareapdf');

        $result_id = $this->Package_model->cancel_data($keygroup, $textareapdf);
        echo $result_id;
    }

    //----------------------------
    public function cancel_data1() {
        $keygroup = $this->input->post('keygroup');
        $textareapdf = $this->input->post('textareapdf');
        $result_id = $this->Package_model->cancel_data1($keygroup, $textareapdf);
        echo $result_id;
    }

    //-----------
    public function insertnotecheckin() {
        //$ticket = $this->input->post('ticket');
        $countTicket = count($this->input->post('ticket'));
        //$Place = $this->input->post('Place');
        $booking_id = $this->input->post('booking_id');
        //$transport_id = $this->input->post('transport_id'); 
        if ($countTicket > 0) {
            for ($i = 0; $i < $countTicket; $i++) {
                $ticket = $this->input->post('ticket')[$i];
                $Place = $this->input->post('Place')[$i];
                $transport_id = $this->input->post('transport_id')[$i];
                $TicketBook = $this->input->post('TicketBook')[$i];

                if (($TicketBook == '') && ($ticket != '') && ($Place != '')) {
                    $result_id = $this->Package_model->insertnotecheckin($ticket, $Place, $booking_id, $transport_id, $TicketBook);
                } else if (($TicketBook != '') && ($ticket != '') && ($Place != '')) {
                    $result_id = $this->Package_model->insertnotecheckin($ticket, $Place, $booking_id, $transport_id, $TicketBook);
                } else if (($TicketBook != '') && ($ticket == '') && ($Place == '')) {
                    $result_id = $this->Package_model->deletenotecheckin($TicketBook);
                }
            }
            $result_id = 1;
        }
        echo $result_id;
    }
        //---------------------------------
    public function subscribe() {
        $this->load->view('package/backend/header');
        $this->load->view('package/backend/subscribe_view');
        $this->load->view('package/backend/footer');
        $this->load->view('package/backend/subscribe_view_script');
    }
       //-------------------
	public function send_mail(){	 
		$txt='';
		/*$emaildata = $this->input->post('email');
		$typedata = $this->input->post('type');
		$userID = $this->input->post('userID');*/		
		$keygroup = $this->input->post('data');				
             $checkinData = $this->Fontend_model->getbooking($keygroup);
             foreach($checkinData->result() as $Data){} 

		$from_email = 'sunnyhatyai@gmail.com';
		$subject = "Booking Package ใบแจ้งยกเลิกการจองแพ็คเกจ";		
		//$to_email = $editor_data2->email;
		//$to_email = $emaildata;
		$to_email = $Data->customer_email;
		$email_body = '<!DOCTYPE html>
<html><head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Sunny Tours Hatyai ซั่นนี่ ทัวร์ หาดใหญ่ ศูนย์รวมการท่องเที่ยว บริการจองตั๋วเครื่องบิน นำเที่ยว จำหน่าย แพ็คเกจทัวร์ในประเทศ แพ็คเกจทัวร์ต่างประเทศ ด้วยบริการที่ดีที่สุด</title>
<meta name="keywords" content="แพคเกจทัวร์, แพ็คเกจทัวร์, แพ็คเก็จทัวร์, ทัวร์ต่างประเทศ, ทัวร์ในประเทศ, ทัวร์ทั่วโลก, ทัวร์ราคาประหยัด, ทัวร์อิสระ, มาเลเซีย, ไต้หวัน, ฮ่องกง, ญี่ปุ่น, เกาหลี, เวียดนาม, รัสเซีย, ออสเตรเรีย, ภาคเหนือ, ภาคใต้, ทัวร์, แลกเงิน, หาดใหญ่, ประเทศไทย, บริษัททัวร์, ราคาถูก, จองตั๋ว, ตั๋วเครื่องบิน, รับทำวีซ่า, วีซ่า" />
<meta name="description" content="ซันนี่ทัวร์ หาดใหญ่ บริการจองตั๋วเครื่องบินหลากหลายสายการบิน  บริการนำเที่ยว จำหน่ายแพ็คเกจทัวร์ในประเทศ ทัวร์ต่างประเทศ วางแผนการท่องเที่ยวของคุณอย่างอิสระ เลือกแพคเกจทัวร์ที่ตรงใจคุณวันนี้ โทร : (081) 990-2137 แผนกตั๋วเครื่องบิน (081) 990-2137">
<meta name="author" content="ME-FI.COM">

<!-- Mobile view -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Favicon -->
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="stylesheet" type="text/css" href="js/bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	
<!-- Google fonts  -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Yesteryear" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Sarabun&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	
	

<link rel="stylesheet" href="'.base_url().'HTML/js/megamenu/stylesheets/screen.css">
<link rel="stylesheet" href="'.base_url().'HTML/css/theme-default.css" type="text/css">
<link rel="stylesheet" href="'.base_url().'HTML/js/loaders/stylesheets/screen.css">
<link rel="stylesheet" href="'.base_url().'HTML/css/shop.css" type="text/css">
<link rel="stylesheet" href="'.base_url().'HTML/fonts/font-awesome/css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" type="text/css" href="'.base_url().'HTML/fonts/Simple-Line-Icons-Webfont/simple-line-icons.css" media="screen" />
<link rel="stylesheet" href="'.base_url().'HTML/fonts/et-line-font/et-line-font.css">
<link rel="stylesheet" type="text/css" href="'.base_url().'HTML/js/revolution-slider/css/settings.css">
<link rel="stylesheet" type="text/css" href="'.base_url().'HTML/js/revolution-slider/css/layers.css">
<link rel="stylesheet" type="text/css" href="'.base_url().'HTML/js/revolution-slider/css/navigation.css">
<link href="'.base_url().'HTML/js/owl-carousel/owl.carousel.css" rel="stylesheet">
<link href="'.base_url().'HTML/js/owl-carousel/owl.theme.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="'.base_url().'HTML/js/cubeportfolio/cubeportfolio.min.css">
<link rel="stylesheet" href="'.base_url().'HTML/css/shortcodes.css" type="text/css">
<link rel="stylesheet" href="'.base_url().'HTML/css/corporate.css" type="text/css">
<link href="'.base_url().'HTML/js/tabs/css/responsive-tabs.css" rel="stylesheet" type="text/css" media="all" />


<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->


<link rel="stylesheet/less" type="text/css" href="'.base_url().'HTML/less/skin.less">


<!-- Skin stylesheet -->

</head>
<body>
<div class="over-loader loader-live">
  <div class="loader">
			<div class="loader-item style9">
				<div></div>
				<div></div>
				<div></div>
			</div>
		</div>
</div>
<!--end loading--> 

<div class="wrapper-boxed">
  <div class="site-wrapper">

    
    <div class="clearfix"></div>
    
    <section>
    <div class="pagenation-holder">
      <div class="container">
        <div class="row">
       		<div class="col-md-6"> <h3>ใบคำขอจองแพ็คเกจทัวร์</h3></div>
        	<div class="col-md-6">
        		'.$Data->booking_id.'
			</div>
        </div>
      </div>
    </div>
  </section>
  <div class="clearfix"></div>
  <!--end section-->
  
    
    
<section class="sec-bpadding-2">
  <div class="container">
  <div class="row">  
  	<!--end right column -->
	<div class="col-md-12">      

	<section class="">	  
		<h4><i class="fa fa-map-marker"></i>&nbsp;&nbsp;'.$Data->package_name_en.'</h4>
                <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$Data->Traveling_date.'</h4>
	</section>
	<div class="clearfix"></div>
	<!-- end section -->
	  
	<section class="sec-padding section-light" style="margin-top: 20px" >
	<div style="display: inline-flex;">
	  <div style="width:50%;"  >	 
	  <h4><span style="color: #fff;  background-color: #ecae3d; padding: 10px;"><i class="fa fa-calendar"></i>&nbsp;&nbsp;จำนวนผู้เดินทาง</span></h4>
	
		  <div class="table-responsive">

	  <table class="sp-cart">
	    <tr>
		 	<th style="width:40%; background-color: #E5E5E5; text-align: center">ประเภทห้อง</th>
			<th style="width:20%; background-color: #E5E5E5; text-align: center">ราคา/คน</th>
			<th style="width:20%; background-color: #E5E5E5; text-align: center">จำนวนผู้เดินทาง</th>
			<th style="width:20%; background-color: #E5E5E5; text-align: center">ราคา/คน</th>
		</tr>

	 <tr>
		<td class="pro-title"><h6><i class="fa fa-calendar"></i>&nbsp;&nbsp; ผู้ใหญ่ (พัก 2-3 ท่าน)</h6></td>
		<td class="pro-des" align="center"a><h6>'.number_format($Data->adult_price).' บาท</h6></td>
		<td class="pro-price" align="center"><h6>'.$Data->customer_adult.'</h6></td>
		<td class="pro-des" align="center"a><h6>'.number_format(intval($Data->adult_price)*intval($Data->customer_adult)).' บาท</h6></td>
	 </tr>  
	  <tr>
		<td class="pro-title"><h6><i class="fa fa-calendar"></i>&nbsp;&nbsp; ผู้ใหญ่ (พักเดี่ยว)</h6></td>
		<td class="pro-des" align="center"a><h6>'.number_format($Data->aloneadult_price).' บาท</h6></td>
		<td class="pro-price" align="center"><h6>'.$Data->customer_adultalone.'</h6></td>
		<td class="pro-des" align="center"a><h6>'.number_format(intval($Data->aloneadult_price)*intval($Data->customer_adultalone)).' บาท</h6></td>
	 </tr>  
	 <tr>
		<td class="pro-title"><h6><i class="fa fa-calendar"></i>&nbsp;&nbsp; เด็ก (ไม่เพิ่มเตียง)</h6></td>
		<td class="pro-des" align="center"a><h6>'.number_format($Data->child_price).' บาท</h6></td>
		<td class="pro-price" align="center"><h6>'.$Data->customer_child.'</h6></td>
		<td class="pro-des" align="center"a><h6>'.number_format(intval($Data->child_price)*intval($Data->customer_child)).' บาท</h6></td>
	 </tr>  
	  <tr>
		<td class="pro-title"><h6><i class="fa fa-calendar"></i>&nbsp;&nbsp; เด็ก (เพิ่มเตียง)</h6></td>
		<td class="pro-des" align="center"a><h6>'.number_format($Data->addchild_price).' บาท</h6></td>
		<td class="pro-price" align="center"><h6>'.$Data->customer_childextra.'</h6></td>
		<td class="pro-des" align="center"a><h6>'.number_format(intval($Data->addchild_price)*intval($Data->customer_childextra)).' บาท</h6></td>
	 </tr>  
	 <tr>
		<td class="pro-title"></td>
		<td class="pro-des" align="center"a></td>
		<td class="pro-price" align="center"><h6>รวม '.$Data->total_customer.'  ท่าน </h6></td>
		<td class="pro-des" align="center"a><h5 style="color: #CF0104; font-weight: 600">'.number_format($Data->total_price).' บาท</h6></td>
	 </tr>  
	  </table>
	   </div> 
	  
		
	  </div>
		
	  <div style="width:50%;padding-left:15px;" >	 
		  <h4><span style="color: #fff;  background-color: #ecae3d; padding: 10px;"><i class="fa fa-user"></i>&nbsp;&nbsp;ข้อมูลการติดต่อ</span></h4>
		  <table class="sp-cart">
			  <tr>
				<th style="width:40%;"></th>
				<th style="width:60%;"></th>
			 </tr>
			 <tr>
				<td class="pro-title"><h6>ชื่อ-นามสกุล ผู้จอง</h6></td>
				<td class="pro-des" align="left"a>'.$Data->customer_name.' '.$Data->customer_Lastname.'</td>
			 </tr>  
			  <tr>
				<td class="pro-title"><h6>โทรศัพท์</h6></td>
				<td class="pro-des" align="left"a>'.$Data->customer_telephone.'</td>
			 <tr>
				<td class="pro-title"><h6>อีเมล</h6></td>
				<td class="pro-des" align="left"a>'.$Data->customer_email.'</td>
			 </tr>  
			  <tr>
				<td class="pro-title"><h6>Line ID</h6></td>
				<td class="pro-des" align="left"a>'.$Data->IDLine.'</td>
			 </tr>  
			 <tr>
				<td class="pro-title"><h6>ความต้องการเพิ่มเติม</h6></td>
				<td class="pro-des" align="left"a>'.$Data->comment.'</td>
			 </tr> 
		  </table>	
		  
		 <div style="background-color: #e2e2e2; margin-right: 20px; padding: 10px;">
			  <h5 style="color:red">ยกเลิกการจองแพ็คเกจ Booking ID '.$Data->booking_id.' </h5>

			  
		  </div>
	  </div>
			
			
			
	</div>
		
		
	</section>
	<div class="clearfix"></div>
 	<!-- end section -->	

		</div>
  	<!--end left column -->
  
  </div>
  </div>
  </section>
	  
	  
	  
<div class="clearfix"></div>
  <!-- end section -->
   


    
  </div>
  <!--end site wrapper--> 
</div>
<!--end wrapper boxed--> 

<!-- Scripts --> 
<script src="'.base_url().'HTML/js/jquery/jquery.js"></script> 
<script src="'.base_url().'HTML/js/bootstrap/bootstrap.min.js"></script> 
<script src="'.base_url().'HTML/js/less/less.min.js" data-env="development"></script> 
<!-- Scripts END --> 
	


<!-- Template scripts --> 
<script src="'.base_url().'HTML/js/tabs/js/responsive-tabs.min.js" type="text/javascript"></script>
<script src="'.base_url().'HTML/js/megamenu/js/main.js"></script> 
<script src="'.base_url().'HTML/js/owl-carousel/owl.carousel.js"></script> 
<script src="'.base_url().'HTML/js/owl-carousel/custom.js"></script> 
<script src="'.base_url().'HTML/js/owl-carousel/owl.carousel.js"></script> 
<script src="'.base_url().'HTML/js/owl-carousel/custom.js"></script> 
<script type="text/javascript" src="'.base_url().'HTML/js/cubeportfolio/jquery.cubeportfolio.min.js"></script> 
<script type="text/javascript" src="'.base_url().'HTML/js/cubeportfolio/main-mosaic3.js"></script> 

<!-- REVOLUTION JS FILES --> 
<script type="text/javascript" src="'.base_url().'HTML/js/revolution-slider/js/jquery.themepunch.tools.min.js"></script> 
<script type="text/javascript" src="'.base_url().'HTML/js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script> 
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
(Load Extensions only on Local File Systems ! 
The following part can be removed on Server for On Demand Loading) --> 
<script type="text/javascript" src="'.base_url().'HTML/js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script> 
<script type="text/javascript" src="'.base_url().'HTML/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script> 
<script type="text/javascript" src="'.base_url().'HTML/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script> 
<script type="text/javascript" src="'.base_url().'HTML/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script> 
<script type="text/javascript" src="'.base_url().'HTML/js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script> 
<script type="text/javascript" src="'.base_url().'HTML/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script> 
<script type="text/javascript" src="'.base_url().'HTML/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script> 
<script type="text/javascript" src="'.base_url().'HTML/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script> 
<script type="text/javascript" src="'.base_url().'HTML/js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script> 
<script type="text/javascript">
	var tpj=jQuery;			
	var revapi4;
	tpj(document).ready(function() {
	if(tpj("#rev_slider").revolution == undefined){
	revslider_showDoubleJqueryError("#rev_slider");
	}else{
		revapi4 = tpj("#rev_slider").show().revolution({
		sliderType:"standard",
		jsFileLocation:"js/revolution-slider/js/",
		sliderLayout:"auto",
		dottedOverlay:"none",
		delay:9000,
		navigation: {
		keyboardNavigation:"off",
		keyboard_direction: "horizontal",
		mouseScrollNavigation:"off",
		onHoverStop:"off",
		arrows: {
		style:"erinyen",
		enable:true,
		hide_onmobile:true,
		hide_under:778,
		hide_onleave:true,
		hide_delay:200,
		hide_delay_mobile:1200,
		tmp:"",
		left: {
		h_align:"left",
		v_align:"center",
		h_offset:80,
		v_offset:0
		},
		right: {
		h_align:"right",
		v_align:"center",
		h_offset:80,
		v_offset:0
		}
		}
		,
		touch:{
		touchenabled:"on",
		swipe_threshold: 75,
		swipe_min_touches: 1,
		swipe_direction: "horizontal",
		drag_block_vertical: false
	}
	,
										
										
										
	},
		viewPort: {
		enable:true,
		outof:"pause",
		visible_area:"80%"
	},
	
	responsiveLevels:[1240,1024,778,480],
	gridwidth:[1240,1024,778,480],
	gridheight:[650,640,1300,820],
	lazyType:"smart",
		parallax: {
		type:"mouse",
		origo:"slidercenter",
		speed:2000,
		levels:[2,3,4,5,6,7,12,16,10,50],
		},
	shadow:0,
	spinner:"off",
	stopLoop:"off",
	stopAfterLoops:-1,
	stopAtSlide:-1,
	shuffle:"off",
	autoHeight:"off",
	hideThumbsOnMobile:"off",
	hideSliderAtLimit:0,
	hideCaptionAtLimit:0,
	hideAllCaptionAtLilmit:0,
	disableProgressBar:"on",
	debugMode:false,
		fallbacks: {
		simplifyAll:"off",
		nextSlideOnWindowFocus:"off",
		disableFocusListener:false,
		}
	});
	}
	});	/*ready*/
</script> 

 
<script>
    $(window).load(function(){
      setTimeout(function(){

        $(".loader-live").fadeOut();
      },1000);
    })

  </script>
<script src="'.base_url().'HTML/js/functions/functions.js"></script>
</body>
</html>
';	 	
		

                    $subject = " Booking Package ใบแจ้งยกเลิกการจองแพ็คเกจ";		
                    $this->email->from($from_email, 'Booking Package Sunny Tour'); 
        $this->email->to($to_email);
        $this->email->subject($subject); 
       	$this->email->message($email_body); 
        if($this->email->send()){ 
		   	$result2 = $keygroup;			
        }
          	$result = $result2;  			
		echo $result;		
	}

    //----- เริ่ม  transport 
}
