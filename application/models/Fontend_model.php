<?php

class Fontend_model extends CI_Model {
               //-------------------------
    function getCategorylimit($limit = null) {
        $sql = $this->db->query("SELECT * FROM tb_category WHERE show_onweb = '1' ORDER BY category_order ASC LIMIT $limit ");
        return $sql;
    }
               //-------------------------
    function getCategory($datatype = null) {
        $sql = $this->db->query("SELECT * FROM tb_category WHERE type_cate ='" . $datatype . "' AND show_onweb = '1' ORDER BY category_order ASC ");
        return $sql;
    }
    //-------------------------------
    function getCategorylocal($datatype = null) {
        $sql = $this->db->query("SELECT * FROM tb_category_local WHERE type_cate ='" . $datatype . "' AND show_onweb = '1' ORDER BY category_order ASC ");
        return $sql;
    }
      //----------------------------------------
    function getpromotionDetail($limit = null, $notUse = null, $start = null, $perpage = null) {
        if ($limit != '') {
            $txtWhere = 'LIMIT ' . $limit;
        } else {
            $txtWhere = '';
        }if ($notUse != '') {
            $txtNot = "AND id !='" . $notUse . "' ";
        } else {
            $txtNot = '';
        }
        if (($start >= 0) && ($perpage >= 0)) {
            $txtStart = 'LIMIT ' . $start . ',' . $perpage;
        } else {
            $txtStart = '';
        }
        $sql = $this->db->query("SELECT * FROM  tbl_promotion WHERE show_onweb = '1' $txtNot ORDER BY date_add DESC  $txtWhere  $txtStart  " );
        return $sql;
    }
      //------------------------------
    function str_limit_html($value, $limit) {

        if (mb_strwidth($value, 'UTF-8') <= $limit) {
            return $value;
        }

        // Strip text with HTML tags, sum html len tags too.
        // Is there another way to do it?
        do {
            $len = mb_strwidth($value, 'UTF-8');
            $len_stripped = mb_strwidth(strip_tags($value), 'UTF-8');
            $len_tags = $len - $len_stripped;

            $value = mb_strimwidth($value, 0, $limit + $len_tags, '', 'UTF-8');
        } while ($len_stripped > $limit);

        // Load as HTML ignoring errors
        $dom = new DOMDocument();
        @$dom->loadHTML('<?xml encoding="utf-8" ?>' . $value, LIBXML_HTML_NODEFDTD);

        // Fix the html errors
        $value = $dom->saveHtml($dom->getElementsByTagName('body')->item(0));

        // Remove body tag
        $value = mb_strimwidth($value, 6, mb_strwidth($value, 'UTF-8') - 13, '', 'UTF-8'); // <body> and </body>
        // Remove empty tags
        return preg_replace('/<(\w+)\b(?:\s+[\w\-.:]+(?:\s*=\s*(?:"[^"]*"|"[^"]*"|[\w\-.:]+))?)*\s*\/?>\s*<\/\1\s*>/', '', $value);
    }
     //------------------------------------
    function getDay($strDate = NULL) {
        $dateArray = explode("-", $strDate);
        $date2 = $dateArray[2];
        $mon = $dateArray[1];
        $year = $dateArray[0];


        $monthArray = array("01" => "Jan", "02" => "Feb", "03" => "Mar", "04" => "Apr", "05" => "May", "06" => "Jun", "07" => "Jul", "08" => "Aug", "09" => "Sep", "10" => "Oct", "11" => "Nov", "12" => "Dec");
        if ($dateArray[0] == 2018) {
            $year = $dateArray[0] + 543;
        }
        if ($date2 < 10) {
            $date2 = str_replace("0", "", $date2);
        }
        $day = $date2 . "&nbsp;&nbsp;" . $monthArray[$mon] . "&nbsp;&nbsp;" . $year;
        return $date2;
    }

//------------------------------------
    function getMonth($strDate = NULL) {
        $dateArray = explode("-", $strDate);
        $date2 = $dateArray[2];
        $mon = $dateArray[1];
        $year = $dateArray[0];


        $monthArray = array("01" => "Jan", "02" => "Feb", "03" => "Mar", "04" => "Apr", "05" => "May", "06" => "Jun", "07" => "Jul", "08" => "Aug", "09" => "Sep", "10" => "Oct", "11" => "Nov", "12" => "Dec");
        if ($dateArray[0] == 2018) {
            $year = $dateArray[0] + 543;
        }
        if ($date2 < 10) {
            $date2 = str_replace("0", "", $date2);
        }
        $day = $date2 . "&nbsp;&nbsp;" . $monthArray[$mon] . "&nbsp;&nbsp;" . $year;
        return $monthArray[$mon];
    }

//------------------------------------
    function getYear($strDate = NULL) {
        $dateArray = explode("-", $strDate);
        $date2 = $dateArray[2];
        $mon = $dateArray[1];
        $year = $dateArray[0];


        $monthArray = array("01" => "Jan", "02" => "Feb", "03" => "Mar", "04" => "Apr", "05" => "May", "06" => "Jun", "07" => "Jul", "08" => "Aug", "09" => "Sep", "10" => "Oct", "11" => "Nov", "12" => "Dec");
        if ($dateArray[0] == 2018) {
            $year = $dateArray[0];
        }
        if ($date2 < 10) {
            $date2 = str_replace("0", "", $date2);
        }
        $day = $date2 . "&nbsp;&nbsp;" . $monthArray[$mon] . "&nbsp;&nbsp;" . $year;
        return $year;
    }

    //$strMonthCut =array("01"=>"Jan","02"=>"Feb","03"=>"Mar","04"=>"Apr","05"=>"May","06"=>"Jun","07"=>"Jul","08"=>"Aug","09"=>"Sep","10"=>"Oct","11"=>"Nov","12"=>"Dec");
    //------------------------------------
    function getDayMonthYear($strDate = NULL) {
        $dateArray = explode("-", $strDate);
        $date2 = $dateArray[2];
        $mon = $dateArray[1];
        $year = $dateArray[0];


        $monthArray = array("01" => "Jan", "02" => "Feb", "03" => "Mar", "04" => "Apr", "05" => "May", "06" => "Jun", "07" => "Jul", "08" => "Aug", "09" => "Sep", "10" => "Oct", "11" => "Nov", "12" => "Dec");
        if ($dateArray[0] == 2018) {
            $year = $dateArray[0];
        }
        if ($date2 < 10) {
            $date2 = str_replace("0", "", $date2);
        }
        $day = $date2 . "&nbsp;&nbsp;" . $monthArray[$mon] . "&nbsp;&nbsp;" . $year;
        return $day;
    }
    //---------------------------  
	function get_shortEngDate($day2){
		$DateTimeArray= explode(" ",$day2);
		$dateArray = explode("-",$DateTimeArray[0]);
		
		$date= $dateArray[2];
		$mon= $dateArray[1];
		$year= $dateArray[0];
		$monthArray3 = Array("01"=>"Jan","02"=>"Feb","03"=>"March","04"=>"Apr","05"=>"May","06"=>"Jun","07"=>"Jul","08"=>"Aug","09"=>"Sep","10"=>"Oct","11"=>"Nov","12"=>"Dec");
		if($date < 10){ $date = str_replace("0", "", $date); } 
		return $date."&nbsp;&nbsp;".$monthArray3[$mon]."&nbsp;&nbsp;".$year;
	} 
         //------------------------------------
    function getDayMonthYearthai($strDate = NULL) {
        $dateArray = explode("-", $strDate);
        $date2 = $dateArray[2];
        $mon = $dateArray[1];
        $year = $dateArray[0];


        $monthArray = array("01" => "มกราคม", "02" => "กุมภาพันธ์", "03" => "มีนาคม", "04" => "เมษายน", "05" => "พฤษภาคม", "06" => "มิถุนายน", "07" => "กรกฎาคม", "08" => "สิงหาคม", "09" => "กันยายน", "10" => "ตุลาคม", "11" => "พฤศจิกายน", "12" => "ธันวาคม");
        if ($dateArray[0] == 2018) {
            $year = $dateArray[0];
        }
        if ($date2 < 10) {
            $date2 = str_replace("0", "", $date2);
        }
        $day = $date2 . "&nbsp;&nbsp;" . $monthArray[$mon] . "&nbsp;&nbsp;" . $year;
        return $day;
    }
               //----------------------------------------
    function getpromotionDetailByID($productID) {
        $sql = $this->db->query("SELECT * FROM  tbl_promotion WHERE id = '" . $productID . "' AND show_onweb = '1' ");
        return $sql;
    }
         //----------------------------
    function loadpromotionImg($ProID) {
        $sql = $this->db->query("SELECT * FROM `tbl_promotion_image` WHERE promotion_id ='" . $ProID . "'  ORDER BY sort_number ASC");
        return $sql;
    }
    function promotionDetail(){
         $sql = $this->db->query("SELECT * FROM  tbl_promotion WHERE show_onweb = '1' AND Show_index = '1' ORDER BY date_add DESC" );
        return $sql;
    }
                //---------------------------
    function list_slideData() {
       
            $sql = "SELECT * FROM `tbl_slide_show` WHERE show_onweb = '1' ORDER BY slide_order ASC ";
            $query = $this->db->query($sql);
        return $query;
    }
	            //---------------------------
    function list_slideticket() {
       
            $sql = "SELECT * FROM `tbl_ticket_slide` WHERE show_onweb = '1' ORDER BY slide_order ASC ";
            $query = $this->db->query($sql);
        return $query;
    }
	            //---------------------------
    function list_ticket_text() {
       
            $sql = "SELECT * FROM `tbl_ticket_text`";
            $query = $this->db->query($sql);
        return $query;
    }
                //---------------------------
    function getpackageDetail() {
       
            $sql = "SELECT * FROM `tbl_package` WHERE show_onweb = '1' AND type_cate = '2'  ORDER BY date_add DESC LIMIT 9";
            $query = $this->db->query($sql);
        return $query;
    }
                //---------------------------
    function exchangeDetail() {
       
            $sql = "SELECT * FROM `tbl_exchange_rates` WHERE show_onweb = '1' ORDER BY exchange_order ASC ";
            $query = $this->db->query($sql);
        return $query;
    }
      //----------------------------------------
    function getpackageDetail1($limit = null, $notUse = null, $start = null, $perpage = null,$cate_id=null,$type=null) {
        
        if ($limit != '') {
            $txtWhere = 'LIMIT ' . $limit;
        } else {
            $txtWhere = '';
        }if ($notUse != '') {
            $txtNot = "AND id !='" . $notUse . "' ";
        } else {
            $txtNot = '';
        }
        if (($start >= 0) && ($perpage >= 0)) {
            $txtStart = 'LIMIT ' . $start . ',' . $perpage;
        } else {
            $txtStart = '';
        }
        if($cate_id != ''){
            $txtcate = "AND category_id = '".$cate_id."' ";
        }else{
            $txtcate = '';
        }
         if($type != ''){
            $txttype = "AND type_cate = '".$type."' ";
        }else{
            $txttype = '';
        }
        $sql = $this->db->query("SELECT * FROM  tbl_package WHERE show_onweb = '1' $txtNot $txtcate $txttype ORDER BY date_add DESC  $txtWhere  $txtStart  " );
        return $sql;
    }
                  //---------------------------
    function getlastpackage() {
       
            $sql = "SELECT * FROM `tbl_package` WHERE show_onweb = '1' ORDER BY date_add DESC LIMIT 3  ";
            $query = $this->db->query($sql);
        return $query;
    }
                  //-------------------------
    function getCategorybyid($cateid = null) {
        $sql = $this->db->query("SELECT * FROM tb_category WHERE id ='" . $cateid . "'  ");
        return $sql;
    }
                  //-------------------------
    function getCategorylocalbyid($cateid = null) {
        $sql = $this->db->query("SELECT * FROM tb_category_local WHERE id ='" . $cateid . "' ");
        return $sql;
    }
      //------------------------------------ 
    function Listpackageinclude($currentId =null) {

        $sql = $this->db->query("SELECT a.* ,  b.* FROM  tbl_package_include a LEFT JOIN tbl_package_feature b ON b.id = a.feature_id WHERE package_id = '.$currentId.' ");
        return $sql;
    }
                 //----------------------------------------
    function getpackageDetailByID($productID) {
        $sql = $this->db->query("SELECT * FROM  tbl_package WHERE id = '" . $productID . "' AND show_onweb = '1' ");
        return $sql;
    }
          //----------------------------
    function loadpackageImg($ProID) {
        $sql = $this->db->query("SELECT * FROM `tbl_package_image` WHERE package_id ='" . $ProID . "'  ");
        return $sql;
    }
                 //----------------------------------------
    function getprice_option($productID) {
        $sql = $this->db->query("SELECT * FROM  tbl_price_option WHERE package_id = '" . $productID . "' AND data_status = '1' ");
        return $sql;
    }
                      //-------------------------
    function getCategorybyidbycate($cateid = null,$typecate = null) {
        $sql = $this->db->query("SELECT category_title,type_cate FROM tb_category WHERE id = '".$cateid."' AND type_cate = '".$typecate."' UNION SELECT category_title,type_cate FROM tb_category_local WHERE  id = '".$cateid."' AND type_cate = '".$typecate."' ");
        return $sql;
    }
        //--------------------------------
    function getbookingid($code=null) {
		$querylast = "SELECT DATE(date_booking) AS date_booking FROM `tbl_package_booking` WHERE booking_id LIKE '%$code%' ORDER BY `id` DESC LIMIT 1 ";
                $last = $this->db->query($querylast);
                $numlast = $last->num_rows();
                if($numlast>0){
                foreach ($last->result() AS $last2){}
                $lastdate = $last2->date_booking;
                $today = date("Y-m-d");
                if($lastdate != $today){
                    $top_id = '1';
                }else{
                    $query = "SELECT * FROM `tbl_package_booking` WHERE booking_id LIKE '%$code%' ORDER BY id DESC LIMIT 1";
                    $data = $this->db->query($query);
                    foreach ($data->result() AS $data2){}
                    $top_id = substr($data2->numberbook,6);
                    $top_id = intval($top_id)+1;
                }
                }else{
                     $top_id = '1';
                }
                $loop = 4 - strlen($top_id);
                $x = '';
                for($i = 1;$i <= $loop; $i++){
                    $x = $x."0";
                }
                $id = $x.$top_id;
               $orderid = $code.'-'.date("dmy").$id;
               return $orderid;
	}
          //--------------------------------
    function getnumberbook($code=null) {
		$querylast = "SELECT DATE(date_booking) AS date_booking FROM `tbl_package_booking` WHERE booking_id LIKE '%$code%' ORDER BY `id` DESC LIMIT 1 ";
                $last = $this->db->query($querylast);
                $numlast = $last->num_rows();
                if($numlast>0){
                foreach ($last->result() AS $last2){}
                $lastdate = $last2->date_booking;
                $today = date("Y-m-d");
                if($lastdate != $today){
                    $top_id = '1';
                }else{
                    $query = "SELECT * FROM `tbl_package_booking` WHERE booking_id LIKE '%$code%' ORDER BY id DESC LIMIT 1";
                    $data = $this->db->query($query);
                    foreach ($data->result() AS $data2){}
                    $top_id = substr($data2->numberbook,6);
                    $top_id = intval($top_id)+1;
                }
                }else{
                     $top_id = '1';
                }
                $loop = 4 - strlen($top_id);
                $x = '';
                for($i = 1;$i <= $loop; $i++){
                    $x = $x."0";
                }
                $id = $x.$top_id;
               $orderid = date("dmy").$id;
               return $orderid;
	}
          //------------------------------ 
	function check_bookingid($keygroup=NULL){
		$sql = "SELECT * FROM `tbl_package_booking` WHERE booking_id ='".$keygroup."' ";
        $query = $this->db->query($sql);
		$numkeygroup = $query->num_rows();			
		return $numkeygroup;		
	}
        //--------------------------- 
    function addgrouptour($name=NULL,$phone=NULL,$email=NULL,$line=NULL,$program=NULL,$datestart=NULL,$dateend=NULL,$day=NULL,$night=NULL,$totalcustomer=NULL,$Budget=NULL,$comment=NULL) {
        $today = date("Y-m-d H:i:s");
        $data = array('name' => $name,
            'phone' => $phone,
            'email' => $email,
            'line' => $line,
            'program' => $program,
            'date_start' => $datestart,
            'date_end' => $dateend,
            'day' => $day,
            'night' => $night,
            'total_customer' => $totalcustomer,
            'bugjet' => $Budget,
            'note' => $comment,
            'date_add' => $today);
            if ($this->db->insert('tbl_grouptour', $data)) {
                $currentID = $this->db->insert_id();
            } else {
                $currentID = 'Error';
            }
        return $currentID;
    }
        //--------------------------- 
    function Addbooking($name=NULL, $surname=NULL,$phone=NULL,$email=NULL,$line=NULL,$keygroup=NULL,$comment=NULL,$people1=NULL,$people2=NULL,$people3=NULL,$people4=NULL,$totalpeople1=NULL,$total2=NULL,$optionid=NULL,$numberbook=NULL,$Dataid=NULL) {
        $today = date("Y-m-d H:i:s");
        $data = array('customer_name' => $name,
            'customer_Lastname' => $surname,
            'customer_telephone' => $phone,
            'customer_email' => $email,
            'IDLine' => $line,
            'booking_id' => $keygroup,
            'comment' => $comment,
            'customer_adult' => $people1,
            'customer_adultalone' => $people2,
            'customer_child' => $people3,
            'customer_childextra' => $people4,
            'total_customer' => $totalpeople1,
            'total_price' => $total2,
            'option_id' => $optionid,
            'numberbook' => $numberbook,
            'date_booking' => $today,
            'package_id' => $Dataid,
            'data_status' => '1' );
            if ($this->db->insert('tbl_package_booking', $data)) {
                $currentID = $keygroup;
            } else {
                $currentID = 'Error';
            }
        return $currentID;
    }
           //--------------------------- 
    function Addbooking2($name=NULL, $surname=NULL,$phone=NULL,$email=NULL,$line=NULL,$keygroup=NULL,$comment=NULL,$datestart=NULL,$dateend=NULL,$adult=NULL,$child=NULL,$totalpeople1=NULL,$numberbook=NULL,$Dataid=NULL) {
        $today = date("Y-m-d H:i:s");
        $data = array('customer_name' => $name,
            'customer_Lastname' => $surname,
            'customer_telephone' => $phone,
            'customer_email' => $email,
            'IDLine' => $line,
            'booking_id' => $keygroup,
            'comment' => $comment,
            'date_start' => $datestart,
            'date_end' => $dateend,
            'customer_adult' => $adult,
            'customer_child' => $child,
            'total_customer' => $totalpeople1,
            'numberbook' => intval($numberbook),
            'date_booking' => $today,
            'package_id' => $Dataid,
            'data_status' => '1' );
            if ($this->db->insert('tbl_package_booking', $data)) {
                $currentID = $keygroup;
            } else {
                $currentID = 'Error';
            }
        return $currentID;
    }
                   //---------------------------
    function getgrouptour($id=NULL) {
            $sql = "SELECT * FROM tbl_grouptour WHERE id = '$id'";
            $query = $this->db->query($sql);

        return $query;
    }
                   //---------------------------
    function getbooking($keygroup=NULL) {
            $sql = "SELECT a.* ,b.* ,c.* FROM tbl_package_booking a LEFT JOIN tbl_package b ON a.package_id = b.id LEFT JOIN tbl_price_option AS c ON a.option_id = c.id WHERE a.booking_id = '".$keygroup."'";
            $query = $this->db->query($sql);

        return $query;
    }
                   //---------------------------
    function getbooking2($keygroup=NULL) {
            $sql = "SELECT a.* ,b.* FROM tbl_package_booking a LEFT JOIN tbl_package b ON a.package_id = b.id WHERE a.booking_id = '".$keygroup."'";
            $query = $this->db->query($sql);

        return $query;
    }
     function search($txtSearch=null){
		 	 
		 $sql="SELECT a.*,b.category_title FROM  tbl_package AS a LEFT JOIN tb_category AS b ON a.category_id = b.id WHERE a.show_onweb = '1' AND a.package_name_en LIKE '%".$txtSearch."%' OR b.category_title LIKE '%".$txtSearch."%'  ORDER BY a.date_add DESC ";
		 $query=$this->db->query($sql);
		 return $query;
	 }
                    //---------------------------
    function checkdata($arrayinout=NULL,$arrayfeature=NULL) {
        if(($arrayinout !='')&&($arrayfeature != '')){
             $include = "SELECT package_id FROM tbl_package_include  WHERE feature_id in ($arrayfeature)";
            $package_id = $this->db->query($include);
            $numid = $package_id->num_rows();
            if($numid>0){
             //$packid = array();
             $packid = '';
            foreach ($package_id->result() AS $id){
               // array_push($packid,$id->package_id);
                
                $packid = $packid.",'".$id->package_id."'";
            } 
            $packid1 = substr($packid, 1);
            $sql="SELECT a.*,b.category_title FROM  tbl_package AS a LEFT JOIN tb_category AS b ON a.category_id = b.id WHERE a.show_onweb = '1' AND a.id in ($packid1) AND a.type_cate in ($arrayinout) ORDER BY a.date_add DESC ";
            }else{
              $sql="SELECT a.*,b.category_title FROM  tbl_package AS a LEFT JOIN tb_category AS b ON a.category_id = b.id WHERE a.show_onweb = '1' AND a.type_cate in ($arrayinout) ORDER BY a.date_add DESC ";  
            }
        }else if($arrayinout !=''){
            $sql="SELECT a.*,b.category_title FROM  tbl_package AS a LEFT JOIN tb_category AS b ON a.category_id = b.id WHERE a.show_onweb = '1' AND a.type_cate in ($arrayinout) ORDER BY a.date_add DESC ";
        }else{
            $include = "SELECT package_id FROM tbl_package_include  WHERE feature_id in ($arrayfeature)";
            $package_id = $this->db->query($include);
            $numid = $package_id->num_rows();
            if($numid>0){
             //$packid = array();
             $packid = '';
            foreach ($package_id->result() AS $id){
               // array_push($packid,$id->package_id);
                
                $packid = $packid.",'".$id->package_id."'";
            } 
            $packid1 = substr($packid, 1);
            
            $sql="SELECT a.*,b.category_title FROM  tbl_package AS a LEFT JOIN tb_category AS b ON a.category_id = b.id WHERE a.show_onweb = '1' AND a.id in ($packid1) ORDER BY a.date_add DESC ";
            }else{
               $sql = "SELECT a.*,b.category_title FROM  tbl_package AS a LEFT JOIN tb_category AS b ON a.category_id = b.id WHERE a.show_onweb = '1' AND a.id = '' ORDER BY a.date_add DESC" ;
            }
           
        }
        $query=$this->db->query($sql);
        return $query;
    }
    
    
    

}
 
