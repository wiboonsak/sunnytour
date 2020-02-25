<?php

class Package_model extends CI_Model {
     //---------------------- 
    function checklogin($username, $password) {
        $password = md5($password);
        $this->db->where('user_name', $username);
        $this->db->where('password', $password);
        $this->db->where('data_status', '1');
        $query = $this->db->get('tbl_username');

        //SELECT * FROM users WHERE username = '$username' AND password = '$password'
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row)
                ;
            $userdata = array(
                'user_id' => $row->id,
                'name' => $row->user_name,
                'type_user' => $row->type_user
            );

            $this->session->set_userdata($userdata);
            $pass = 1;
            //-----------last update----------//
            date_default_timezone_set('Asia/Bangkok');
            $now = date("Y-m-d H:i:s");
            $data = array(
                'last_login' => $now
            );
            $this->db->where('id', $row->id);
            $this->db->update('tbl_username', $data);
        } else {
            $pass = 0;
        }
        return $pass;
    }

        //---------------------------
    function list_featureData($currentID = NULL) {
        if ($currentID != '') {
            $sql = "SELECT * FROM `tbl_package_feature` WHERE id = '$currentID' AND data_status = '1'";
            $query = $this->db->query($sql);
        } else {
            $sql = "SELECT * FROM `tbl_package_feature` ";
            $query = $this->db->query($sql);
        }
        return $query;
    }
      //-----------------------------------
    function addFeature($currentID = null,  $name = null) {
        $data = array(
            'include_name_en' => $name);
        if ($currentID == '') {
            if ($this->db->insert('tbl_package_feature', $data)) {
                $currentID = $this->db->insert_id();
            } else {
                $currentID = 'Error';
            }
        } else {
            $data = array(
                'include_name_en' => $name);
            $this->db->where('id', $currentID);
            if ($this->db->update('tbl_package_feature', $data)) {
                $currentID = $currentID;
            } else {
                $currentID = 'Error';
            }
        }
        return $currentID;
    } 
    //=----------------
    function included() {
        $sql = $this->db->query("SELECT * FROM `tbl_package_feature` WHERE data_status = '1' ");
        return $sql;
    }
     //---------------------------------
    function deleteData($dataID =null , $table =null) {
       
        $this->db->where('id', $dataID);
        if ($this->db->delete($table)) {
            $pass = 1;
        } else {
            $pass = 0;
        }
    return $pass; 
        }
		  //---------------------------------
    function deleteDataticket($dataID =null , $table =null,$img = null) {
       
        $this->db->where('id', $dataID);
        if ($this->db->delete($table)) {
            $pass = 1;
			 @unlink('./uploadfile/slideticket/' . $img);
        } else {
            $pass = 0;
        }
    return $pass; 
        }
     //---------------------------------
    function deleteData3($dataID =null , $table =null) {
        $data = array('transport_active' => 'N');
        $this->db->where('id', $dataID);
        if ($this->db->update($table, $data)) {
            $pass = 1;
        } else {
            $pass = 0;
        }
    return $pass; 
        }
     //---------------------------------
    function deleteData5($dataID =null , $table =null) {

        $sql = "SELECT * FROM `tbl_booking_title` WHERE id ='".$dataID."' ";
        $query = $this->db->query($sql);
		$row=$query->row();
		$pass = $row->cf_status;
                if($pass == '1'){
                   $this->db->where('id', $dataID); 
                   $this->db->delete($table);
                   $this->db->where('booking_id', $dataID); 
                   $this->db->delete('tbl_booking_detail');
                }else{
  $data = array(
            'booking_status' => '3');

  $this->db->where('id', $dataID);
  $this->db->update($table, $data);
    } 
    return $data = 1;
                }
     //=----------------
    function updateseason($currentID = null, $name = null) {
        $data = array(
            'include_name_en' => $name);

        $this->db->where('id', $currentID);
        if ($this->db->update('tbl_package_feature', $data)) {
            $currentID = 1;
        } else {
            $currentID = 0;
        }return $currentID;
    }
     //=----------------
    function updatecate($currentID = null, $name = null) {
        $data = array(
            'category_title' => $name);

        $this->db->where('id', $currentID);
        if ($this->db->update('tb_category', $data)) {
            $currentID = 1;
        } else {
            $currentID = 0;
        }return $currentID;
    }
     //=----------------
    function updatecatelocal($currentID = null, $name = null) {
        $data = array(
            'category_title' => $name);

        $this->db->where('id', $currentID);
        if ($this->db->update('tb_category_local', $data)) {
            $currentID = 1;
        } else {
            $currentID = 0;
        }return $currentID;
    }
     //=----------------
    function updateexchange($currentID = null, $csname = null,$cname = null,$buy = null,$sell = null) {
        $data = array(
            'currency_short' => $csname,
            'currency_name' => $cname,
            'buying' => $buy,
            'selling' => $sell);

        $this->db->where('id', $currentID);
        if ($this->db->update('tbl_exchange_rates', $data)) {
            $currentID = 1;
        } else {
            $currentID = 0;
        }return $currentID;
    }
            //---------------------------
    function list_packageData($type=null,$currentID = NULL) {
        if ($currentID != '') {
            $sql = "SELECT * FROM `tbl_package` WHERE id = '$currentID' AND type_cate = '$type'";
            $query = $this->db->query($sql);
        } else {
            $sql = "SELECT * FROM `tbl_package` WHERE type_cate = '$type'";
            $query = $this->db->query($sql);
        }
        return $query;
    }
            //---------------------------
    function list_PromotionData($currentID = NULL) {
        if ($currentID != '') {
            $sql = "SELECT * FROM `tbl_promotion` WHERE id = '$currentID' ";
            $query = $this->db->query($sql);
        } else {
            $sql = "SELECT * FROM `tbl_promotion` ";
            $query = $this->db->query($sql);
        }
        return $query;
    }
            //---------------------------
    function list_ExplanationData($currentID = NULL) {
        if ($currentID != '') {
            $sql = "SELECT * FROM `tbl_ticket_text` WHERE id = '$currentID' ";
            $query = $this->db->query($sql);
        } else {
            $sql = "SELECT * FROM `tbl_ticket_text` ";
            $query = $this->db->query($sql);
        }
        return $query;
    }
            //---------------------------
    function list_slideData($currentID = NULL) {
        if ($currentID != '') {
            $sql = "SELECT * FROM `tbl_slide_show` WHERE id = '$currentID' ";
            $query = $this->db->query($sql);
        } else {
            $sql = "SELECT * FROM `tbl_slide_show` ORDER BY slide_order ASC ";
            $query = $this->db->query($sql);
        }
        return $query;
    }
            //---------------------------
    function list_adminData($currentID = NULL) {
        if ($currentID != '') {
            $sql = "SELECT * FROM `tbl_username` WHERE id = '$currentID' ";
            $query = $this->db->query($sql);
        } else {
            $sql = "SELECT * FROM `tbl_username` WHERE type_user != '1' ORDER BY id ASC ";
            $query = $this->db->query($sql);
        }
        return $query;
    }
           //---------------------
    function add_admin($Name=null,$username=null,$Password=null,$password_old=null,$dataID=null) {
       if ($dataID == '') {
                            $Password1 = md5($Password);
                            $data = array(
				'name' => $Name,
				'user_name' => $username,
				'password' => $Password1,
				'data_status' => '1',
				'type_user' => '2');
				if ($this->db->insert('tbl_username', $data)) {
					$dataID = $this->db->insert_id();
				} else {
					$dataID = 'Error';
				}
			} else {
                        if($Password ==''){
                            $Password1 = $password_old;
                        }else{
                            $Password1 = md5($Password);
                        }
				$data = array(
				'name' => $Name,
				'user_name' => $username,
				'password' => $Password1,
				'type_user' => '2');
				$this->db->where('id', $dataID);
				if($this->db->update('tbl_username', $data)){
					$dataID = $dataID;
				} else {
					$dataID = 'Error';
				}
			}
			return $dataID;
    }
    //--------------------------- 
    function addslide($currentID= NULL, $Country= NULL, $topic= NULL,$img=null) {
        $sql = $this->db->query("SELECT MAX(slide_order) AS nNax FROM tbl_slide_show ");
        foreach ($sql->result() AS $data) {
        }
        $nMaxIns = $data->nNax + 1;
        $today = date("Y-m-d H:i:s");
        $data = array('Country' => $Country,
            'topic' => $topic,
            'img_name' => $img,
            'date_add' => $today,
            'slide_order' => $nMaxIns,
            'show_onweb' => '1' );
        if ($currentID == '') {
            if ($this->db->insert('tbl_slide_show', $data)) {
                $currentID = $this->db->insert_id();
            } else {
                $currentID = 'Error';
            }
        } else {
            $data1 = array('Country' => $Country,
            'topic' => $topic,
            'img_name' => $img,
            'date_add' => $today);
            $this->db->where('id', $currentID);
            if ($this->db->update('tbl_slide_show', $data1)) {
                $currentID = $currentID;
            } else {
                $currentID = 'Error';
            }
        }
        return $currentID;
    }
	//--------------------------- 
    function addslideticket($img=null) {
        $sql = $this->db->query("SELECT MAX(slide_order) AS nNax FROM tbl_ticket_slide ");
        foreach ($sql->result() AS $data) {
        }
        $nMaxIns = $data->nNax + 1;
        $today = date("Y-m-d H:i:s");
        $data = array(
            'img' => $img,
            'date_add' => $today,
            'slide_order' => $nMaxIns,
            'show_onweb' => '1' );
            if ($this->db->insert('tbl_ticket_slide', $data)) {
                $currentID = $this->db->insert_id();
            } else {
                $currentID = 'Error';
            }
       
        return $currentID;
    }
    //--------------------------- 
    function addExplanation($currentID= NULL, $Explanation= NULL) {
        $today = date("Y-m-d H:i:s");
        $data = array('explanation' => $Explanation,
            'date_add' => $today);
        if ($currentID == '') {
            if ($this->db->insert('tbl_ticket_text', $data)) {
                $currentID = $this->db->insert_id();
            } else {
                $currentID = 'Error';
            }
        } else {
            $this->db->where('id', $currentID);
            if ($this->db->update('tbl_ticket_text', $data)) {
                $currentID = $currentID;
            } else {
                $currentID = 'Error';
            }
        }
        return $currentID;
    }
    //--------------------------- 
    function addpromotion($currentID= NULL, $name= NULL, $desc= NULL,$condition=NULL,$img=null) {
        $today = date("Y-m-d H:i:s");
        $data = array('topic' => $name,
            'promotion_detail' => $desc,
            'position_Condition' => $condition,
            'img' => $img,
            'date_add' => $today,
            'show_onweb' => '1' );
        if ($currentID == '') {
            if ($this->db->insert('tbl_promotion', $data)) {
                $currentID = $this->db->insert_id();
            } else {
                $currentID = 'Error';
            }
        } else {
            $this->db->where('id', $currentID);
            if ($this->db->update('tbl_promotion', $data)) {
                $currentID = $currentID;
            } else {
                $currentID = 'Error';
            }
        }
        return $currentID;
    }
    //--------------------------- 
    function addpackage($currentID= NULL, $name= NULL, $desc= NULL,$condition = NULL,$include=null,$product_category=null,$img=null,$duration=NULL,$period=NULL,$airline=NULL,$price=NULL,$package_discount=NULL,$highlight=NULL,$Code=NULL) {
        $today = date("Y-m-d H:i:s");
        $data = array('package_name_en' => $name,
            'package_detail' => $desc,
            'package_Condition' => $condition,
            'category_id' => $product_category,
            'img' => $img,
            'duration' => $duration,
            'period_of_time' => $period,
            'airline' => $airline,
            'date_add' => $today,
            'package_price' => $price,
            'package_discount' => $package_discount,
            'code_package' => $Code,
            'detailHighlight_Tour' => $highlight,
            'type_cate' => '2',
            'data_status' => '1' );
        if ($currentID == '') {
            if ($this->db->insert('tbl_package', $data)) {
                $currentID = $this->db->insert_id();
            } else {
                $currentID = 'Error';
            }
        } else {
            $this->db->where('id', $currentID);
            if ($this->db->update('tbl_package', $data)) {
                $currentID = $currentID;
            } else {
                $currentID = 'Error';
            }
        }
         if(count($include >0)){
            $this->db->where('package_id', $currentID);
            $this->db->delete('tbl_package_include') ;
        
          for($i=0;$i<count($include);$i++){
              $data = array('feature_id' => $include[$i],
            'package_id' => $currentID );
            $this->db->insert('tbl_package_include', $data);
          }
          $currentID = $currentID;
        }
        return $currentID;
    }
    //--------------------------- 
    function addpackagelocal($currentID= NULL, $name= NULL, $desc= NULL,$condition=NULL,$include=null,$product_category=null,$img=null,$duration=NULL,$period=NULL,$airline=NULL,$price=NULL,$package_discount=NULL,$highlight=NULL,$Code=NULL) {
        $today = date("Y-m-d H:i:s");
        $data = array('package_name_en' => $name,
            'package_detail' => $desc,
            'package_Condition' => $condition,
            'category_id' => $product_category,
            'img' => $img,
            'duration' => $duration,
            'period_of_time' => $period,
            'airline' => $airline,
            'date_add' => $today,
            'package_price' => $price,
            'package_discount' => $package_discount,
            'code_package' => $Code,
            'detailHighlight_Tour' => $highlight,
            'type_cate' => '1',
            'data_status' => '1' );
        if ($currentID == '') {
            if ($this->db->insert('tbl_package', $data)) {
                $currentID = $this->db->insert_id();
            } else {
                $currentID = 'Error';
            }
        } else {
            $this->db->where('id', $currentID);
            if ($this->db->update('tbl_package', $data)) {
                $currentID = $currentID;
            } else {
                $currentID = 'Error';
            }
        }
         if(count($include >0)){
            $this->db->where('package_id', $currentID);
            $this->db->delete('tbl_package_include') ;
        
          for($i=0;$i<count($include);$i++){
              $data = array('feature_id' => $include[$i],
            'package_id' => $currentID );
            $this->db->insert('tbl_package_include', $data);
          }
          $currentID = $currentID;
        }
        return $currentID;
    }
                //-------------------------------
    	function addyoutube ($dataID=null , $value=null) {
       		$today = date("Y-m-d H:i:s");
        	$data = array('linkyoutube' => $value,
            	'package_id' =>$dataID,
            	'date_add' => $today
        	);
            if ($this->db->insert('tbl_youtube', $data)) {
                $dataID = $this->db->insert_id();
            } else {
                $dataID = 'Error';
            }   
    	}
    //--------------------------- 
    function addoption($currentID=null, $currentID2=null, $Traveling_date=null, $duration=null, $Adult=null, $aloneAdult=null, $Child=null,$Childadd=null ) {
        $data = array('Traveling_date' => $Traveling_date,
            'adult_price' => $Adult,
            'aloneadult_price' => $aloneAdult,
            'child_price' => $Child,
            'addchild_price' => $Childadd,
            'package_id' => $currentID,
            'duration' => $duration,
            'data_status' => '1' );
        if ($currentID2 == '') {
            if ($this->db->insert('tbl_price_option', $data)) {
                $currentID2 = $this->db->insert_id();
            } else {
                $currentID2 = 'Error';
            }
        } else {
            $this->db->where('id', $currentID);
            if ($this->db->update('tbl_price_option', $data)) {
                $currentID2 = $currentID;
            } else {
                $currentID2 = 'Error';
            }
        } 
        return $currentID;
    }

        //=----------------
    function addimgpromo($img = null,$currentID = null) {
          $sql = $this->db->query("SELECT MAX(sort_number) AS nNax FROM tbl_promotion_image WHERE promotion_id  ='".$currentID."'");
        foreach ($sql->result() AS $data) {
        }
        $nMaxIns = $data->nNax + 1;
        $sql = "INSERT INTO `tbl_promotion_image`(`promotion_id`, `images_name`, `sort_number`) VALUES ('" . $currentID . "','" . $img . "','" . $nMaxIns . "')";
        $query = $this->db->query($sql);
        return $query;
    }
        //=----------------
    function addimg($img = null,$currentID = null) {
          $sql = $this->db->query("SELECT MAX(sort_number) AS nNax FROM tbl_package_image WHERE package_id  ='".$currentID."'");
        foreach ($sql->result() AS $data) {
        }
        $nMaxIns = $data->nNax + 1;
        $sql = "INSERT INTO `tbl_package_image`(`package_id`, `images_name`, `sort_number`) VALUES ('" . $currentID . "','" . $img . "','" . $nMaxIns . "')";
        $query = $this->db->query($sql);
        return $query;
    }
        //=----------------
    function addfile($img = null,$currentID = null) {
          $sql = $this->db->query("SELECT MAX(sort_number) AS nNax FROM tbl_package_pdf WHERE package_id  ='".$currentID."'");
        foreach ($sql->result() AS $data) {
        }
        $nMaxIns = $data->nNax + 1;
        $sql = "INSERT INTO `tbl_package_pdf`(`package_id`, `images_name`, `sort_number`) VALUES ('" . $currentID . "','" . $img . "','" . $nMaxIns . "')";
        $query = $this->db->query($sql);
        return $query;
    }
        //=----------------
    function addincluded($included = null,$currentID = null) {
      $sql = "INSERT INTO `tbl_package_includ`(`feature_id`, `package_id`) VALUES ('" . $included . "','" . $currentID . "')";
        $query = $this->db->query($sql);
        return $query;
    }
        //---------------------------
    function loadImgpromo($ProID) {
        $sql = $this->db->query("SELECT * FROM `tbl_promotion_image` WHERE promotion_id ='" . $ProID . "' ORDER BY sort_number ASC");
        return $sql;
    }
        //---------------------------
    function loadImg($ProID) {
        $sql = $this->db->query("SELECT * FROM `tbl_package_image` WHERE package_id ='" . $ProID . "' ORDER BY sort_number ASC");
        return $sql;
    }
        //---------------------------
    function loadfile($ProID) {
        $sql = $this->db->query("SELECT * FROM `tbl_package_pdf` WHERE package_id ='" . $ProID . "' ORDER BY sort_number ASC");
        return $sql;
    }
        //---------------------------
    function loadfilelimit1($ProID) {
        $sql = $this->db->query("SELECT * FROM `tbl_package_pdf` WHERE package_id ='" . $ProID . "' ORDER BY sort_number ASC LIMIT 1");
        return $sql;
    }
        //------------------------------------
    function updateOrderpromo($dataID, $changeValue) {
        $data = array('sort_number' => $changeValue);
        $this->db->where('id', $dataID);
        if ($this->db->update('tbl_promotion_image', $data)) {
            $pass = 1;
        } else {
            $pass = 0;
        }
        return $pass;
    }
        //------------------------------------
    function updateOrder($dataID, $changeValue) {
        $data = array('sort_number' => $changeValue);
        $this->db->where('id', $dataID);
        if ($this->db->update('tbl_package_image', $data)) {
            $pass = 1;
        } else {
            $pass = 0;
        }
        return $pass;
    }
        //------------------------------------
    function updateOrderpdf($dataID, $changeValue) {
        $data = array('sort_number' => $changeValue);
        $this->db->where('id', $dataID);
        if ($this->db->update('tbl_package_pdf', $data)) {
            $pass = 1;
        } else {
            $pass = 0;
        }
        return $pass;
    }
   
    //----------------------------------------
     function deleteimgpromo($DataID, $fileType, $fileName) {
        if ($fileType == 'imgfile') {
            $this->db->where('images_name', $fileName);
            if ($this->db->delete('tbl_promotion_image')) {
                $pass = 1;
                @unlink('./uploadfile/promotion_img/' . $fileName);
            } else {
                $pass = 0;
            }
        } 
        return $pass;
    }
    //----------------------------------------
     function deletepackageimg($DataID, $fileType, $fileName) {
        if ($fileType == 'imgfile') {
            $this->db->where('images_name', $fileName);
            if ($this->db->delete('tbl_package_image')) {
                $pass = 1;
                @unlink('./uploadfile/package_img/' . $fileName);
            } else {
                $pass = 0;
            }
        } 
        return $pass;
    }
    //----------------------------------------
     function deletepackagepdf($DataID, $fileType, $fileName) {
        if ($fileType == 'imgfile') {
            $this->db->where('images_name', $fileName);
            if ($this->db->delete('tbl_package_pdf')) {
                $pass = 1;
                @unlink('./uploadfile/package_pdf/' . $fileName);
            } else {
                $pass = 0;
            }
        } 
        return $pass;
    }
     //---------------------------------
       function loadImgpack($ProID) {
        $sql = $this->db->query("SELECT * FROM `tbl_package` WHERE id ='" . $ProID . "'  ");
        return $sql;
    }
     //---------------------------------
       function loadImgpromotion($ProID) {
        $sql = $this->db->query("SELECT * FROM `tbl_promotion` WHERE id ='" . $ProID . "'  ");
        return $sql;
    }
     //---------------------------------
       function loadImgslide($ProID) {
        $sql = $this->db->query("SELECT * FROM `tbl_slide_show` WHERE id ='" . $ProID . "'  ");
        return $sql;
    }
     //------------------------------------------
     function deletecateimg($DataID, $fileName,$img) { 
         $data = array('img' => $img
        );
            $this->db->where('id', $DataID);
            if ($this->db->update('tbl_package', $data)) {
                $pass = 1;
                @unlink('./uploadfile/package_img/'.$fileName);
            } else {
                $pass = 0;
            }
        return $pass;
    }
     //------------------------------------------
     function deletepromotionimg($DataID, $fileName,$img) { 
         $data = array('img' => $img
        );
            $this->db->where('id', $DataID);
            if ($this->db->update('tbl_promotion', $data)) {
                $pass = 1;
                @unlink('./uploadfile/promotion_img/'.$fileName);
            } else {
                $pass = 0;
            }
        return $pass;
    }
     //------------------------------------------
     function deleteslideimg($DataID, $fileName,$img) { 
         $data = array('img_name' => $img
        );
            $this->db->where('id', $DataID);
            if ($this->db->update('tbl_slide_show', $data)) {
                $pass = 1;
                @unlink('./uploadfile/'.$fileName);
            } else {
                $pass = 0;
            }
        return $pass;
    }

 
         //---------------------------	 
    function ShowOnWeb($dataID = NULL, $check = NULL, $table = NULL) {
        $data = array(
            'show_onweb' => $check
        );
        $this->db->where('id', $dataID);
        if ($this->db->update($table, $data)) {
            $pass = 1;
        } else {
            $pass = 0;
            //$this->db->_error_message(); 
        }
        return $pass;
    }
         //---------------------------	 
    function Show_index($dataID = NULL, $check = NULL, $table = NULL) {
        $data = array(
            'Show_index' => $check
        );
        $this->db->where('id', $dataID);
        if ($this->db->update($table, $data)) {
            $pass = 1;
        } else {
            $pass = 0;
            //$this->db->_error_message(); 
        }
        return $pass;
    }
             //------------------------------ 
	function count_option($option=NULL){
				 
		$sql = "SELECT * FROM `tbl_price_option` WHERE price_option ='".$option."' ";
        $query = $this->db->query($sql);
		$numberCount = $query->num_rows();			
		return $numberCount;		
	}
           //-------------------------
    function listpackage_option($packageID = null) {
        $sql = $this->db->query("SELECT * FROM tbl_price_option WHERE package_id='" . $packageID . "'");
        return $sql;
    }
         //=----------------
    function updateoption($currentID= null, $Traveling= null,  $adult_price= null, $aloneadult_price= null, $child_price= null,$addchild_price= null) {
        $data = array(
            'Traveling_date' => $Traveling,
            'adult_price' => $adult_price,
            'aloneadult_price' => $aloneadult_price,
            'child_price' => $child_price,
            'addchild_price' => $addchild_price,
            'data_status' => '1'
            );

        $this->db->where('id', $currentID);
        if ($this->db->update('tbl_price_option', $data)) {
            $currentID = 1;
        } else {
            $currentID = 0;
        }return $currentID;
    }
                //---------------------------
    function list_cateabroadData($type = NULL,$currentID = NULL) {
        if ($currentID != '') {
            $sql = "SELECT * FROM `tb_category` WHERE id = '$currentID' AND type_cate = '$type'";
            $query = $this->db->query($sql);
        } else {
            $sql = "SELECT * FROM `tb_category` WHERE  show_onweb = '1' AND type_cate = '$type' ORDER BY category_order ASC";
            $query = $this->db->query($sql);
        }
        return $query;
    }
                //---------------------------
    function list_catelocalData($type = NULL,$currentID = NULL) {
        if ($currentID != '') {
            $sql = "SELECT * FROM `tb_category_local` WHERE id = '$currentID' AND type_cate = '$type'";
            $query = $this->db->query($sql);
        } else {
            $sql = "SELECT * FROM `tb_category_local` WHERE  type_cate = '$type' ORDER BY category_order ASC";
            $query = $this->db->query($sql);
        }
        return $query;
    }
	            //---------------------------
    function list_slideticket() {
        
            $sql = "SELECT * FROM `tbl_ticket_slide` ORDER BY slide_order ASC";
            $query = $this->db->query($sql);

        return $query;
    }
    //--------------------------- 
    function addcate($currentID=null, $name=null) {
        if ($currentID == '') {
            $sql = $this->db->query("SELECT MAX(category_order) AS nNax FROM tb_category  ");
            foreach ($sql->result() AS $data) {
                
            }
            $nMaxIns = $data->nNax + 1;

            $data = array('category_title' => $name, 'category_order' => $nMaxIns,'type_cate' => '2');
            if ($this->db->insert('tb_category', $data)) {
                $pass = $this->db->insert_id();
                ;
            } else {
                $pass = 'Error';
            }
        } else {
            $data = array('category_title' => $name);
            $this->db->where('id', $currentID);
            if ($this->db->update('tb_category', $data)) {
                $pass = $currentID;
            } else {
                $pass = 'Error';
            }
        }

        return $pass;
    }
    //--------------------------- 
    function addcateLocal($currentID=null, $name=null) {
        if ($currentID == '') {
            $sql = $this->db->query("SELECT MAX(category_order) AS nNax FROM tb_category_local  ");
            foreach ($sql->result() AS $data) {
                
            }
            $nMaxIns = $data->nNax + 1;

            $data = array('category_title' => $name, 'category_order' => $nMaxIns,'type_cate' => '1');
            if ($this->db->insert('tb_category_local', $data)) {
                $pass = $this->db->insert_id();
                ;
            } else {
                $pass = 'Error';
            }
        } else {
            $data = array('category_title' => $name);
            $this->db->where('id', $currentID);
            if ($this->db->update('tb_category_local', $data)) {
                $pass = $currentID;
            } else {
                $pass = 'Error';
            }
        }

        return $pass;
    }
       //-----------------------------
    function updateOrderslide($dataID, $changeValue) {
        $data = array('slide_order' => $changeValue);
        $this->db->where('id', $dataID);
        if ($this->db->update('tbl_slide_show', $data)) {
            $pass = 1;
        } else {
            $pass = 0;
        }
        return $pass;
    }
       //-----------------------------
    function updateOrderCate($dataID, $changeValue) {
        $data = array('category_order' => $changeValue);
        $this->db->where('id', $dataID);
        if ($this->db->update('tb_category', $data)) {
            $pass = 1;
        } else {
            $pass = 0;
        }
        return $pass;
    }
       //-----------------------------
    function updateOrderCatelocal($dataID, $changeValue) {
        $data = array('category_order' => $changeValue);
        $this->db->where('id', $dataID);
        if ($this->db->update('tb_category_local', $data)) {
            $pass = 1;
        } else {
            $pass = 0;
        }
        return $pass;
    }
	 //-----------------------------
    function updateOrderticket($dataID, $changeValue) {
        $data = array('slide_order' => $changeValue);
        $this->db->where('id', $dataID);
        if ($this->db->update('tbl_ticket_slide', $data)) {
            $pass = 1;
        } else {
            $pass = 0;
        }
        return $pass;
    }
       //-----------------------------
    function updateOrderexchange($dataID, $changeValue) {
        $data = array('exchange_order' => $changeValue);
        $this->db->where('id', $dataID);
        if ($this->db->update('tbl_exchange_rates', $data)) {
            $pass = 1;
        } else {
            $pass = 0;
        }
        return $pass;
    }
     //---------------------------
    function list_checkinData($currentID = NULL) {
        if ($currentID != '') {
            $sql = "SELECT * FROM `tbl_checkin_place` WHERE id = '$currentID' ";
            $query = $this->db->query($sql);
        } else {
            $sql = "SELECT * FROM `tbl_checkin_place` WHERE place_active = '1' ";
            $query = $this->db->query($sql);
        }
        return $query;
    }
     //--------------------------- 
    function addcheckin($currentID= NULL, $name= NULL,$telephone= NULL, $comment= NULL) {
        $data = array('checkin_name_en' => $name,
            'checkin_telephone' => $telephone,
            'checkin_map' => $comment,
            'place_active' => '1');
        if ($currentID == '') {
            if ($this->db->insert('tbl_checkin_place', $data)) {
                $currentID = $this->db->insert_id();
            } else {
                $currentID = 'Error';
            }
        } else {
            $this->db->where('id', $currentID);
            if ($this->db->update('tbl_checkin_place', $data)) {
                $currentID = $currentID;
            } else {
                $currentID = 'Error';
            }
        }
        return $currentID;
    }

                //-------------------------
    function getCategory($datatype = null,$typecate = null) {
        $sql = $this->db->query("SELECT * FROM tb_category WHERE show_onweb ='" . $datatype . "' AND type_cate = '".$typecate."' ORDER BY category_order ASC ");
        return $sql;
    }
    function getCategorylocal($datatype = null,$typecate = null) {
        $sql = $this->db->query("SELECT * FROM tb_category_local WHERE show_onweb ='" . $datatype . "' AND type_cate = '".$typecate."' ORDER BY category_order ASC ");
        return $sql;
    }
   
 
     //=----------------
    function addimg2($img = null, $currentID = null) {
        $sql = "INSERT INTO `tbl_transport_img`(`transport_id`, `images`,`data_status`) VALUES ('" . $currentID . "','" . $img . "','1')";
        $query = $this->db->query($sql);
        return $query;
    }
     //----------------------
    function deleteProductFile1($DataID, $fileType, $fileName) {
        if ($fileType == 'imgfile') {
            $this->db->where('images', $fileName);
            $this->db->where('id', $DataID);
            if ($this->db->delete(' tbl_transport_img')) {
                $pass = 1;
                @unlink('./uploadfile/' . $fileName);
            } else {
                $pass = 0;
            }
        } else {
            $pass = 0;
        }
        return $pass;
    }
        //-------------------------------------
    function doChangePass($newpass,$id) {
        $newpass = md5($newpass);
        $sql = "UPDATE tbl_username SET `password` = '" . $newpass . "' WHERE id = '".$id."' ";
        if ($this->db->query($sql)) {
            return 1;
        } else {
            return 0;
        }
    }
      //---------------------------
    function list_bookingData($booking_id = NULL) {
        if ($booking_id != '') {
            $sql = "SELECT * FROM `tbl_package_booking` WHERE booking_id = '$booking_id' ";
            $query = $this->db->query($sql);
        } else {
            $sql = "SELECT * FROM `tbl_package_booking` WHERE data_status ='1' ORDER BY date_booking DESC ";
            $query = $this->db->query($sql);
        }
        return $query;
    }
      //---------------------------
    function list_bookingDatasave($status=null) {

            $sql = "SELECT * FROM `tbl_package_booking` WHERE data_status ='$status' ORDER BY date_booking DESC ";
            $query = $this->db->query($sql);
        return $query;
    }
                    //---------------------------
    function list_exchangeData($currentID = NULL) {
        if ($currentID != '') {
            $sql = "SELECT * FROM `tbl_exchange_rates` WHERE id = '$currentID' ";
            $query = $this->db->query($sql);
        } else {
            $sql = "SELECT * FROM `tbl_exchange_rates` ORDER BY exchange_order ASC";
            $query = $this->db->query($sql);
        }
        return $query;
    }
    //--------------------------- 
    function addexchange($currentID = NULL, $csname = NULL,$cname = NULL,$Buying = NULL,$Selling = NULL) {
        if ($currentID == '') {
            $sql = $this->db->query("SELECT MAX(exchange_order) AS nNax FROM tbl_exchange_rates  ");
            foreach ($sql->result() AS $data) {
                
            }
            $nMaxIns = $data->nNax + 1;
            $today = date("Y-m-d H:i:s");
            $data = array('currency_short' => $csname, 
                'currency_name' => $cname,
                'buying' => $Buying,
                'selling' => $Selling,
                'exchange_order' => $nMaxIns,
                'show_onweb' => '1',
                'date_add' => $today);
            if ($this->db->insert('tbl_exchange_rates', $data)) {
                $pass = $this->db->insert_id();
            } else {
                $pass = 'Error';
            }
        } else {
             $data = array('currency_short' => $csname, 
                'currency_name' => $cname,
                'buying' => $Buying,
                'selling' => $Selling,
                'date_add' => $today);
            $this->db->where('id', $currentID);
            if ($this->db->update('tbl_exchange_rates', $data)) {
                $pass = $currentID;
            } else {
                $pass = 'Error';
            }
        }

        return $pass;
    }
  //---------------------------  
	function GetEngDateTime($day){
		$DateTimeArray= explode(" ",$day);
		$dateArray = explode("-",$DateTimeArray[0]);
		$date= $dateArray[2];
		$mon= $dateArray[1];
		$year= $dateArray[0] ;
		//$monthArray = array("01"=>"มกราคม","02"=>"กุมภาพันธ์","03"=>"มีนาคม","04"=>"เมษายน", "05"=>"พฤษภาคม","06"=>"มิถุนายน","07"=>"กรกฏาคม","08"=>"สิงหาคม","09"=>"กันยายน","10"=>"ตุลาคม","11"=>"พฤศจิกายน","12"=>"ธันวาคม");
       $monthArray=Array("01"=>"January","02"=>"February","03"=>"March","04"=>"April","05"=>"May","06"=>"June","07"=>"July","08"=>"August","09"=>"September","10"=>"October","11"=>"November","12"=>"December");
		if($date < 10){ $date = str_replace("0", "", $date); } 
		return $date."&nbsp;".$monthArray[$mon]."&nbsp;".$year."<br>".$DateTimeArray[1];
	} 
  //---------------------------  
	function GetEngDateTime1($day){
		$DateTimeArray= explode(" ",$day);
		$dateArray = explode("-",$DateTimeArray[0]);
		$date= $dateArray[2];
		$mon= $dateArray[1];
		$year= $dateArray[0] ;
		//$monthArray = array("01"=>"มกราคม","02"=>"กุมภาพันธ์","03"=>"มีนาคม","04"=>"เมษายน", "05"=>"พฤษภาคม","06"=>"มิถุนายน","07"=>"กรกฏาคม","08"=>"สิงหาคม","09"=>"กันยายน","10"=>"ตุลาคม","11"=>"พฤศจิกายน","12"=>"ธันวาคม");
       $monthArray=Array("01"=>"January","02"=>"February","03"=>"March","04"=>"April","05"=>"May","06"=>"June","07"=>"July","08"=>"August","09"=>"September","10"=>"October","11"=>"November","12"=>"December");
		if($date < 10){ $date = str_replace("0", "", $date); } 
		return $date."&nbsp;".$monthArray[$mon]."&nbsp;".$year;
	} 
  //---------------------------  
	function GetEngDateTime2($day){
		$DateTimeArray= explode(" ",$day);
		$dateArray = explode("-",$DateTimeArray[0]);
		$date= $dateArray[2];
		$mon= $dateArray[1];
		$year= $dateArray[0] ;
		//$monthArray = array("01"=>"มกราคม","02"=>"กุมภาพันธ์","03"=>"มีนาคม","04"=>"เมษายน", "05"=>"พฤษภาคม","06"=>"มิถุนายน","07"=>"กรกฏาคม","08"=>"สิงหาคม","09"=>"กันยายน","10"=>"ตุลาคม","11"=>"พฤศจิกายน","12"=>"ธันวาคม");
       $monthArray=Array("01"=>"January","02"=>"February","03"=>"March","04"=>"April","05"=>"May","06"=>"June","07"=>"July","08"=>"August","09"=>"September","10"=>"October","11"=>"November","12"=>"December");
		if($date < 10){ $date = str_replace("0", "", $date); } 
		return $monthArray[$mon]."&nbsp;".$date.","."&nbsp;".$year;
	} 
            //-------------------------------------
	 function search($txtSearch=null,$dateStart=null,$status=NULL){
             $txtWhere2 = '';
             $txtWhere3 = '';
             $txtWhere4 = '';
            //if(($txtSearch != '')&&($dateStart!= '')){ $txtWhere4 = 'AND';}
             
		 if(($dateStart != '')&&($dateStart!= '0000-00-00')){
			$txtWhere2 = " a.date_booking LIKE '%".$dateStart."%' AND";
		}
                if($txtSearch != ''){
			$txtWhere3 = "( a.customer_name LIKE '%".$txtSearch."%' OR a.booking_id LIKE '%".$txtSearch."%') AND ";
             } 	 
             
		 $sql="SELECT a.* ,b.* ,c.* FROM tbl_package_booking a LEFT JOIN tbl_package b ON a.package_id = b.id LEFT JOIN tbl_price_option AS c ON a.option_id = c.id WHERE $txtWhere2 $txtWhere4 $txtWhere3 a.data_status ='$status' ORDER BY a.date_booking DESC";
		 $query=$this->db->query($sql);
		 return $query;
	 }
            //-------------------------------------
	 function searchdatasave($txtSearch=null,$dateStart=null){
             $txtWhere2 = '';
             $txtWhere3 = '';
             $txtWhere4 = '';
            //if(($txtSearch != '')&&($dateStart!= '')){ $txtWhere4 = 'AND';}
             
		 if(($dateStart != '')&&($dateStart!= '0000-00-00')){
//			$dateArray = explode("/",$dateStart);
//			$date= $dateArray[0];
//			$mon= $dateArray[1];
//			$year= $dateArray[2];			
//			$dateStart = $year."-".$mon."-".$date;
			$txtWhere2 = " a.date_depart = '$dateStart' AND";
		/*} else {
			$txtWhere2 = '';*/
		}
                if($txtSearch != ''){
			$txtWhere3 = " (a.customer_name LIKE '%".$txtSearch."%' OR a.booking_id LIKE '%".$txtSearch."%') AND";
		/*} else {
			$txtWhere2 = '';*/
             } 	 
             
		 $sql="SELECT * FROM  tbl_package_booking WHERE $txtWhere2 $txtWhere4 $txtWhere3 booking_status ='4' ";
		 $query=$this->db->query($sql);
		 return $query;
//                 SELECT * FROM  tbl_package_booking WHERE  customer_name LIKE '%wut%' OR transfer_keygroup LIKE '%wut%' AND date_depart = '2018-12-30'
	 }
            //-------------------------------------
	 function searchdatacancel($txtSearch=null,$dateStart=null){
             $txtWhere2 = '';
             $txtWhere3 = '';
             $txtWhere4 = '';
           // if(($txtSearch != '')&&($dateStart!= '')){ $txtWhere4 = 'AND';}
             
		 if(($dateStart != '')&&($dateStart!= '0000-00-00')){
//			$dateArray = explode("/",$dateStart);
//			$date= $dateArray[0];
//			$mon= $dateArray[1];
//			$year= $dateArray[2];			
//			$dateStart = $year."-".$mon."-".$date;
			$txtWhere2 = " date_depart = '$dateStart' AND";
		/*} else {
			$txtWhere2 = '';*/
		}
                if($txtSearch != ''){
			$txtWhere3 = " (customer_name LIKE '%".$txtSearch."%' OR transfer_keygroup LIKE '%".$txtSearch."%') AND";
		/*} else {
			$txtWhere2 = '';*/
             } 	 
		 $sql="SELECT * FROM  tbl_package_booking WHERE $txtWhere2 $txtWhere4 $txtWhere3  cf_status ='3' ";
		 $query=$this->db->query($sql);
		 return $query;
//                 SELECT * FROM  tbl_package_booking WHERE  customer_name LIKE '%wut%' OR transfer_keygroup LIKE '%wut%' AND date_depart = '2018-12-30'
	 }
            //-------------------------------------
	 function search2($txtSearch=null,$dateStart=null){
             $txtWhere2 = '';
             $txtWhere3 = '';
             $txtWhere4 = '';
           // if(($txtSearch != '')&&($dateStart!= '')){ $txtWhere4 = 'AND';}
             
		 if(($dateStart != '')&&($dateStart!= '0000-00-00')){
//			$dateArray = explode("/",$dateStart);
//			$date= $dateArray[0];
//			$mon= $dateArray[1];
//			$year= $dateArray[2];			
//			$dateStart = $year."-".$mon."-".$date;
			$txtWhere2 = " date_depart = '$dateStart' AND";
		/*} else {
			$txtWhere2 = '';*/
		}
                if($txtSearch != ''){
			$txtWhere3 = " (a.cust_name LIKE '%".$txtSearch."%' OR a.transfer_keygroup LIKE '%".$txtSearch."%') AND";
		/*} else {
			$txtWhere2 = '';*/
             } 	
		 $sql="SELECT a.* ,b.* FROM tbl_booking_title a LEFT JOIN tbl_booking_detail b ON a.id = b.booking_id WHERE $txtWhere2 $txtWhere4 $txtWhere3  cf_status !='3' AND booking_status !='4' ";
		 $query=$this->db->query($sql);
		 return $query;
//                 SELECT * FROM  tbl_package_booking WHERE  customer_name LIKE '%wut%' OR transfer_keygroup LIKE '%wut%' AND date_depart = '2018-12-30'
	 }

        
         //-------------------------------
          function fetch_data()
 {
  $this->db->order_by("id");
  $this->db->where('booking_status','4' );
  $query = $this->db->get("tbl_package_booking");
  return $query->result();
 }
         //-------------------------------
          function fetch_data2()
 {
  $this->db->order_by("id");
  $this->db->where('cf_status','3' );
  $query = $this->db->get("tbl_package_booking");
  return $query->result();
 }
         //-------------------------------
          function fetch_datatran2()
 {
              $this->db->select('*');
$this->db->from('tbl_booking_title');
$this->db->where('cf_status','3' );
$this->db->join('tbl_booking_detail', 'tbl_booking_detail.booking_id = tbl_booking_title.id', 'left');
$query = $this->db->get(); 
  return $query->result();
 }
         //-------------------------------
          function fetch_datatran()
 {
              $this->db->select('*');
$this->db->from('tbl_booking_title');
$this->db->where('booking_status','4' );
$this->db->join('tbl_booking_detail', 'tbl_booking_detail.booking_id = tbl_booking_title.id', 'left');
$query = $this->db->get(); 
  return $query->result();
 }

 //-----------------------------
  function delete($id)
 {
  $sql = "SELECT * FROM `tbl_package_booking` WHERE id ='".$id."' ";
        $query = $this->db->query($sql);
		$row=$query->row();
		$pass = $row->cf_status;
                if($pass == '1'){
                   $this->db->where('id', $id); 
                   $this->db->delete('tbl_package_booking'); 
                }else{
  $data = array(
            'booking_status' => '3');

  $this->db->where('id', $id);
  $this->db->update('tbl_package_booking', $data);
 }
 }
 //-----------------------------
  function delete_alltransport($id)
 {
  $sql = "SELECT * FROM `tbl_booking_title` WHERE id ='".$id."' ";
        $query = $this->db->query($sql);
		$row=$query->row();
		$pass = $row->cf_status;
                if($pass == '1'){
                   $this->db->where('id', $id); 
                   $this->db->delete('tbl_booking_title'); 
                }else{
  $data = array(
            'booking_status' => '3');

  $this->db->where('id', $id);
  $this->db->update('tbl_booking_title', $data);
 }
 }

  
     //---------------------------------
    function saveData($dataID =null , $table =null,$status=null) {
       $data = array(
            'data_status' => $status
            );
        $this->db->where('id', $dataID);
        if ($this->db->update($table, $data)) {
            $currentID = 1;
        } else {
            $currentID = 0;
        }return $currentID;
    }
   
     //-----------------------------
  function save_all($id)
 {
       $sql = "SELECT * FROM `tbl_package_booking` WHERE id ='".$id."' ";
        $query = $this->db->query($sql);
		$row=$query->row();
		$pass = $row->cf_status;
                if($pass == '1'){
  $data = array(
            'booking_status' => '4');

  $this->db->where('id', $id);
  $this->db->update('tbl_package_booking', $data);
 }
 }
 
     //-----------------------------
  function save_allTransport($id)
 {
  $sql = "SELECT * FROM `tbl_booking_title` WHERE id ='".$id."' ";
        $query = $this->db->query($sql);
		$row=$query->row();
		$pass = $row->cf_status;
                if($pass == '2'){
  $data = array(
            'booking_status' => '4');

  $this->db->where('id', $id);
  $this->db->update('tbl_booking_title', $data);
 }
 }
 
   //------------------------------------ 
    function getpackageList() {

        $sql = $this->db->query("SELECT a.* ,  b.images_name  FROM tbl_package a LEFT JOIN tbl_package_image b ON b.package_id = a.id WHERE a.data_status = '1' AND a.show_onweb = '1' AND b.sort_number = '1' ORDER BY id DESC LIMIT 4 ");
        return $sql;
    }
   //------------------------------------ 
    function getpackageListall($currentID=null) {
        if ($currentID != '') {
             $sql = $this->db->query("SELECT a.* ,  b.images_name FROM tbl_package a LEFT JOIN tbl_package_image b ON b.package_id = a.id WHERE a.data_status = '1' AND a.show_onweb = '1' AND a.id = '$currentID'  ");
        } else {
        $sql = $this->db->query("SELECT a.* ,  b.images_name FROM tbl_package a LEFT JOIN tbl_package_image b ON b.package_id = a.id WHERE a.data_status = '1' AND a.show_onweb = '1' AND b.sort_number = '1' ");
    }
    return $sql;
    }
   //------------------------------------ 
    function getpackageimg($currentID=null) {
             $sql = $this->db->query("SELECT a.* ,  b.images_name FROM tbl_package a LEFT JOIN tbl_package_image b ON b.package_id = a.id WHERE a.data_status = '1' AND a.show_onweb = '1' AND a.id = '$currentID' AND b.sort_number = '1' "); 
    return $sql;
    }
    
   //------------------------------------ 
    function Listpackageinclude($currentId =null) {

        $sql = $this->db->query("SELECT a.* ,  b.* FROM  tbl_package_include a LEFT JOIN tbl_package_feature b ON b.id = a.feature_id WHERE package_id = '.$currentId.' ");
        return $sql;
    }
           //=----------------
    function confrim_data($keygroup = null,$textareapdf=null) {
       $data = array(
            'comment' => $textareapdf);
       if ($keygroup == '') {
            if ($this->db->insert('tbl_package_booking', $data)) {
                $currentID = 1;
            } else {
                $currentID = 0;
            }
        } else {
        $data = array(
            'cf_status' => '2',
            'comment' => $textareapdf);

        $this->db->where('transfer_keygroup', $keygroup);
        if ($this->db->update('tbl_package_booking', $data)) {
            $pass = 1;
        } else {
            $pass = 0;
        }return $pass;
    }
    }
           //=----------------
    function confrim_data1($keygroup = null,$textareapdf=null) {
        $data = array(
            'cf_status' => '2',
            'comment' => $textareapdf);

        $this->db->where('transfer_keygroup', $keygroup);
        if ($this->db->update('tbl_booking_title', $data)) {
            $pass = 1;
        } else {
            $pass = 0;
        }return $pass;
    }
    
  
           //=----------------
    function cancel_data($keygroup = null,$textareapdf=null) {
       $data = array(
            'comment' => $textareapdf);
       if ($keygroup == '') {
            if ($this->db->insert('tbl_package_booking', $data)) {
                $currentID = 1;
            } else {
                $currentID = 0;
            }
        } else {
        $data = array(
            'cf_status' => '3',
            'comment' => $textareapdf);

        $this->db->where('transfer_keygroup', $keygroup);
        if ($this->db->update('tbl_package_booking', $data)) {
            $currentID = 1;
        } else {
            $currentID = 0;
        }return $currentID;
    }
    }
           //=----------------
    function cancel_data1($keygroup = null,$textareapdf=null) {
       $data = array(
            'comment' => $textareapdf);
       if ($keygroup == '') {
            if ($this->db->insert('tbl_booking_title', $data)) {
                $currentID = 1;
            } else {
                $currentID = 0;
            }
        } else {
        $data = array(
            'cf_status' => '3',
            'comment' => $textareapdf);

        $this->db->where('transfer_keygroup', $keygroup);
        if ($this->db->update('tbl_booking_title', $data)) {
            $currentID = 1;
        } else {
            $currentID = 0;
        }return $currentID;
    }
    }
    //--------------------------------
    function generateRandomString() {
		$alphabet = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
		$pass = array(); //remember to declare $pass as an array
		$alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
		for ($i = 0; $i < 8; $i++) {
			$n = rand(0, $alphaLength);
			$pass[] = $alphabet[$n];
		}
		return implode($pass); //turn the array into a string
	}
         //--------------------------- 
    function AddBooking($Departing= null, $Adults= null, $Children= null, $Name = null,$Last= null,$Email= null,$Line= null,$Phone= null,$currentID= null,$price= null,$keygroup= null,$accept=null) {
               $today = date("Y-m-d H:i:s");
               $total_customer = $Adults + $Children;
               //$total_price = $Adults * $price;
               $total_price = $price;
               
        $data = array('date_depart' => $Departing,
            'customer_adult' => $Adults,
            'customer_child' => $Children,
            'adult_price' => $price,
            'total_customer' => $total_customer,
            'total_price' => $total_price,
            'package_id' => $currentID,
            'customer_name' => $Name,
            'customer_Lastname' => $Last,
            'customer_email' => $Email,
            'IDLine' => $Line,
            'transfer_keygroup' => $keygroup,
            'date_booking' => $today,
            'not_travel' => $accept,
            'cf_status' => '1',
            'customer_telephone' => $Phone);
            if ($this->db->insert('tbl_package_booking', $data)) {
                $pass = 1;
            } else {
                $pass = 0;
            }
        return $pass;
    }
       //------------------------------ 
	function check_keygroup($keygroup=NULL){
		$sql = "SELECT * FROM `tbl_package_booking` WHERE transfer_keygroup ='".$keygroup."' ";
        $query = $this->db->query($sql);
		$numkeygroup = $query->num_rows();			
		return $numkeygroup;		
	}
               //---------------------------
    function getbooking($keygroup=NULL) {
            $sql = "SELECT a.* ,b.* FROM tbl_package_booking a LEFT JOIN tbl_package b ON a.package_id = b.id WHERE a.transfer_keygroup = '".$keygroup."'";
            $query = $this->db->query($sql);

        return $query;
    }
               //---------------------------
    function getbookingTransport($keygroup=NULL) {
            $sql = "SELECT a.* ,b.* FROM tbl_booking_title a LEFT JOIN tbl_booking_detail b ON a.id = b.booking_id WHERE a.transfer_keygroup = '".$keygroup."'";
            $query = $this->db->query($sql);

        return $query;
    }
  
        //---------------------------	 
	function update_keyValue($key_value2=NULL,$keygroup=NULL,$table=NULL){			 
		
		 $data = array(
         'key_value' => $key_value2);
		 
		 $this->db->where('transfer_keygroup', $keygroup);
		 if($this->db->update($table, $data)){
		 	$pass = 1;
		 }else{
		     $pass=0;
		 }
		return $pass;
	} 
        //---------------------------	 
	function update_keyValue2($key_value2=NULL,$keygroup=NULL,$table=NULL){			 
		
		 $data = array(
         'key_value' => $key_value2);
		 
		 $this->db->where('transfer_keygroup', $keygroup);
		 if($this->db->update($table, $data)){
		 	$pass = 1;
		 }else{
		     $pass=0;
		 }
		return $pass;
	} 
 //---------------------------	 
        function totaladult($Adults=NULL,$currentID=NULL){		
//           $sql = $this->db->query("SELECT * FROM `tbl_price_option` WHERE package_id = '.$currentID.' AND '.$Adults.' BETWEEN min_person AND max_person");
       
           $sql = "SELECT * FROM `tbl_price_option` WHERE package_id = '".$currentID."' AND ('".$Adults."' BETWEEN min_person AND max_person)";
        $query = $this->db->query($sql);
        $numsql = $query->num_rows();
        if ($numsql>0){
		$row = $query->row();
//		$total = round($Adults/$row->max_person);
//		$total2 = $total*$row->adult_price;
		return $row->adult_price;
        }else{
           $sql = "SELECT * FROM `tbl_price_option` WHERE package_id = '".$currentID."'  ORDER BY max_person DESC LIMIT 1";
        $query = $this->db->query($sql);
        $row = $query->row();
        $price1 = floor($Adults/$row->max_person);
        $totalprice = $price1*$row->adult_price;
        
        $people = $Adults%$row->max_person;
        if($people>0){
        $sql1 = "SELECT * FROM `tbl_price_option` WHERE package_id = '".$currentID."' AND ('".$people."' BETWEEN min_person AND max_person)";
        $query1 = $this->db->query($sql1);
        $row1 = $query1->row();
        $price2 = $row1->adult_price;
        } else {
            $price2 = 0;
        }        
        $totalprice2 = $totalprice+$price2;
        
        
//		$total = round($Adults/$row->max_person);
//		$total2 = $total*$row->adult_price;
		return $totalprice2;
        }}
          //------------------------------------ 
        //เริ่ม transport 
    function getrouteList() {
        $sql = $this->db->query("SELECT b.begin_place_id , p.* FROM `tbl_route_data` AS b LEFT JOIN tbl_place_data AS p ON b.begin_place_id = p.id    WHERE b.show_onweb = '1' AND b.rout_active = '1' GROUP BY b.begin_place_id ");
        return $sql;
    }
    //-------------------------------------
    function placedataupdate($changeValue=null) {
        $sql = $this->db->query("SELECT d.destination_place_id , p.* FROM `tbl_route_data` AS d LEFT JOIN tbl_place_data AS p ON d.destination_place_id = p.id WHERE d.show_onweb = '1' AND d.rout_active = '1' AND d.begin_place_id = '".$changeValue."' GROUP BY d.destination_place_id ORDER BY p.place_name_en ASC");
        return $sql;
    }
      //---------------------------  
	function GetEngDateTimeshot($day){
		$dateArray = explode("/",$day);
		$date= $dateArray[0];
		$mon= $dateArray[1];
		$year= $dateArray[2];
		//$monthArray = array("01"=>"มกราคม","02"=>"กุมภาพันธ์","03"=>"มีนาคม","04"=>"เมษายน", "05"=>"พฤษภาคม","06"=>"มิถุนายน","07"=>"กรกฏาคม","08"=>"สิงหาคม","09"=>"กันยายน","10"=>"ตุลาคม","11"=>"พฤศจิกายน","12"=>"ธันวาคม");
       $monthArray=Array("01" => "Jan", "02" => "Feb", "03" => "Mar", "04" => "Apr", "05" => "May", "06" => "Jun", "07" => "Jul", "08" => "Aug", "09" => "Sep", "10" => "Oct", "11" => "Nov", "12" => "Dec");
		if($date < 10){ $date = str_replace("0", "", $date); } 
		$s = $date."&nbsp;".$monthArray[$mon]."&nbsp;".$year;
                return $s;} 
     //-----------------------------
     function list_researchClusters($dataID=NULL){
		if($dataID !=''){ 
			$this->db->where('id', $dataID);
		} 
		
		//$this->db->where('user_update', $userupdate);
		$this->db->where('transport_active', 'Y');
		$this->db->select('*');
		$this->db->order_by('id','desc');
		$query = $this->db->get('tbl_transport_type');
		
		return $query;		
	} 
     //=----------------------------
    function selecttrip($timesid=NULL,$transportid=NULL,$priceAdults=NULL,$priceChildren=NULL,$pricetotal=NULL,$Adults=NULL,$Children=NULL,$datedata=NULL,$routeid=NULL,$keygroup=null) {
        $today = date("Y-m-d H:i:s");
       $data = array(
            'transfer_keygroup' => $keygroup,
            'tranfer_round' => '1',
            'cf_status' => '0');
            if ($this->db->insert('tbl_booking_title', $data)) {
                $booking_id = $this->db->insert_id();
              $data1 = array(
            'time_id' => $timesid,
            'route_type_id' => $transportid,
            'adult_price' => $priceAdults,
            'child_price' => $priceChildren,
            'total_price' => $pricetotal,
            'adult_traveller' => $Adults,
            'child_traveller' => $Children,
            'date_depart' => $datedata,
            'booking_id' => $booking_id,
            'date_booking' => $today,
            'route_id' => $routeid);
            if ($this->db->insert('tbl_booking_detail', $data1)) {
                $pass = 1;
            } else {
                $pass = 0;
            }
           }

        return $pass;
    
    }
  //---------------------------------------
	function getbooking_title($key_group=NULL){
            if($key_group!=''){
		$sql = "SELECT a.* ,b.booking_id, b.route_id,b.route_type_id,b.time_id,b.date_depart,b.adult_traveller,b.child_traveller,b.adult_price,b.child_price,b.total_price FROM `tbl_booking_title` AS a LEFT JOIN `tbl_booking_detail` AS b ON a.id = b.booking_id WHERE a.transfer_keygroup = '".$key_group."' ";
        $query = $this->db->query($sql);
            }else{
                $sql = "SELECT a.* , b.route_id,b.route_type_id,b.time_id,b.date_depart,b.adult_traveller,b.child_traveller,b.adult_price,b.child_price,b.total_price,b.date_booking FROM `tbl_booking_title` AS a LEFT JOIN `tbl_booking_detail` AS b ON a.id = b.booking_id WHERE cf_status !='0'AND booking_status = '0' AND cf_status !='3' ORDER BY b.date_booking DESC ";
        $query = $this->db->query($sql);
            }
		return $query;	 
	} 
            //------------------------------ 
	function get_routebooking($routeid=NULL){
		$sql = "SELECT b.begin_place_id , p.* FROM `tbl_route_data` AS b LEFT JOIN tbl_place_data AS p ON b.begin_place_id = p.id   WHERE b.show_onweb = '1' AND b.rout_active = '1' AND b.id ='".$routeid."' GROUP BY b.begin_place_id   ";
        $query = $this->db->query($sql);			
		return $query;		
	}  
    //=----------------
    function AddBookingTransport($Name=NULL ,$Last=NULL,$Email=NULL,$Line=NULL,$Phone=NULL,$keygroub=NULL,$accept=null) {
       
        $data = array(
            'cust_name' => $Name,
            'cust_lastname' => $Last,
            'cust_telephone_num' => $Phone,
            'cust_email' => $Email,
            'cust_line' => $Line,
            'not_travel' => $accept,
            'cf_status' => '1');

        $this->db->where('transfer_keygroup', $keygroub);
        if ($this->db->update('tbl_booking_title', $data)) {
            $pass = 1;
        } else {
            $pass = 0;
        }return $pass;
    }
            //------------------------------ 
	function count_email($mail=NULL){
				 
		$sql = "SELECT * FROM `tbl_subscribe` WHERE subscribe ='".$mail."' ";
        $query = $this->db->query($sql);
		$numberCount = $query->num_rows();			
		return $numberCount;		
	}
           //--------------------------
        function addsub($sub=null){
             $today =  $today = date("Y-m-d H:i:s");
             $data = array('subscribe' => $sub,
            'date_add' => $today
        );
        $result = $this->db->insert('tbl_subscribe', $data);
        return '1';
         }
                   //=----------------
    function insertnotecheckin($ticket=null,$Place=null,$booking_id=null,$transport_id=null,$TicketBook=null) {
       $datatickket = array(
            'ticket_number' => $ticket,
            'note_ckeckin_en' => $Place,
            'booking_id' => $booking_id,
            'transport_id' => $transport_id,
            'user_update' => $this->session->userdata('user_id')
           );
       if($TicketBook ==''){
            if ($this->db->insert('tbl_booking_textAdmin', $datatickket)) {
                $pass = 1;
            } else {
                $pass = 0;
            }
       }else{
           $this->db->where('id', $TicketBook);
        if ($this->db->update('tbl_booking_textAdmin', $datatickket)) {
            $pass = 1;
        } else {
            $pass = 0;
        }
       }
   return $pass;
    }
            //---------------------------------
    function deletenotecheckin($TicketBook =null ) {
       $this->db->where('id', $TicketBook);
        if ($this->db->delete('tbl_booking_textAdmin')) {
            $pass = 1;
        } else {
            $pass = 0;
        }
    
    return $pass; 
        }
              //---------------------------
    function list_Subscribe() {

            $sql = "SELECT * FROM `tbl_subscribe` ORDER BY date_add DESC ";
            $query = $this->db->query($sql);
        return $query;
    }
         //----------------------------------
       function getlinkyoutube($dataid) {
        $sql = $this->db->query("SELECT * FROM `tbl_youtube` WHERE package_id = '".$dataid."'  ");
        return $sql;
    }
              //------------------------------------------
        function delete_data($dataID = NULL, $table = NULL) {
			$data = array('id' => $dataID,);
			if ($this->db->delete($table, $data)) {
				$pass = 1;
			} else {
				$pass = 0;
				//$this->db->_error_message(); 
			}
			return $pass;
    	}
                 //-------------------------
    function listpackage_include($packageID = null) {
        $sql = $this->db->query("SELECT * FROM tbl_package_include WHERE package_id ='" . $packageID . "'");
        return $sql;
    }
           //-------------------------
    function listpackage_feature($datatype = null) {
        $sql = $this->db->query("SELECT * FROM tbl_package_feature WHERE data_status='" . $datatype . "'");
        return $sql;
    }
     //---------------------------  
	function remove_included($featureid=NULL, $packageid=NULL){
	 
	 	$this->db->where('feature_id', $featureid);
	 	$this->db->where('package_id', $packageid);
                if($this->db->delete('tbl_package_include')){
                    return 1 ;
                }else{
                    return 2 ;
                }
               
        }

}
 
