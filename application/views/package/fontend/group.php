
    <div class="clearfix"></div>
    
     <section class="section-side-image clearfix">
      <div class="img-holder col-md-12 col-sm-12 col-xs-12">
        <div class="background-imgholder" style="background:url(<?php echo base_url('HTML/images/bg_tour.jpg')?>);"><img class="nodisplay-image" src="<?php echo base_url('HTML/images/bg_tour.jpg')?>" alt=""/> </div>
      </div>
      <div class="container-fluid" >
        <div class="row">       
        <div class="col-md-12 col-sm-12 col-xs-12 clearfix nopadding">
        <div class="header-inner less-height">        
       <div class="overlay">       
       <div class="text text-center">
    <h3 class="uppercase text-white less-mar-1 title">Group Tour Detail</h3>
    <h6 class="uppercase text-white sub-title">รายละเอียดกรุ๊ปทัวร์ส่วนตัว</h6>
    </div>
       </div>       
        </div></div>        
        </div>
      </div>
    </section>
    <div class=" clearfix"></div>
    <!--end header section -->
    <?php 
    foreach ($checkinData->result() AS $Data){}?>
    <section>
    <div class="pagenation-holder">
      <div class="container">
        <div class="row">
       		<div class="col-md-12"> <h3>ใบคำขอจองกรุ๊ปทัวร์ส่วนตัว</h3></div>
        	
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

	
	<div class="clearfix"></div>
	<!-- end section -->
	  
	<section class="sec-padding section-light" style="margin-top: 20px" >
	<div class="row">
            <div class="col-md-12" style="padding-left:50px">	 
		  <h4><span style="color: #fff;  background-color: #ecae3d; padding: 10px;"><i class="fa fa-user"></i>&nbsp;&nbsp;ข้อมูลการเดินทาง</span></h4>
		  <table style="width:100%">
			  <tr>
				<th class="col-md-4"></th>
				<th class="col-md-8"></th>
			 </tr>
			 <tr>
				<td class="pro-title"><h6>ชื่อ-นามสกุล ผู้จอง</h6></td>
				<td class="pro-des" align="left"a><?php echo $Data->name?> </td>
			 </tr>  
			  <tr>
				<td class="pro-title"><h6>โทรศัพท์</h6></td>
				<td class="pro-des" align="left"a><?php echo $Data->phone?></td>
			 <tr>
				<td class="pro-title"><h6>อีเมล</h6></td>
				<td class="pro-des" align="left"a><?php echo $Data->email?></td>
			 </tr>
                         <?php if($Data->line!=''){?>
			  <tr>
				<td class="pro-title"><h6>Line ID</h6></td>
				<td class="pro-des" align="left"a><?php echo $Data->line?></td>
			 </tr>  
                         <?php }?>
			  <tr>
				<td class="pro-title"><h6>โปรแกรม</h6></td>
				<td class="pro-des" align="left"a><?php echo $Data->program?></td>
			 </tr>  
			  <tr>
				<td class="pro-title"><h6>วันที่เดินทางไป</h6></td>
				<td class="pro-des" align="left"a><?php echo $this->Fontend_model->getDayMonthYearthai($Data->date_start)?></td>
			 </tr>  
			  <tr>
				<td class="pro-title"><h6>วันที่เดินทางกลับ</h6></td>
				<td class="pro-des" align="left"a><?php echo $this->Fontend_model->getDayMonthYearthai($Data->date_end)?></td>
			 </tr>
                          <?php if($Data->day!=''){?>
			  <tr>
				<td class="pro-title"><h6>จำนวนวันและคืน</h6></td>
				<td class="pro-des" align="left"a><?php echo $Data->day?> วัน <?php echo $Data->night?> คืน</td>
			 </tr>
                          <?php }?>
			  <tr>
				<td class="pro-title"><h6>ผู้เดินทางทั้งหมด</h6></td>
				<td class="pro-des" align="left"a><?php echo $Data->total_customer?> ท่าน </td>
			 </tr> 
                         <?php if($Data->bugjet!=''){?>
			  <tr>
				<td class="pro-title"><h6>Budget</h6></td>
				<td class="pro-des" align="left"a><?php echo number_format($Data->bugjet)?> บาท/ท่าน </td>
			 </tr> 
                         <?php }?>
                         <?php if($Data->note!=''){?>
			 <tr>
				<td class="pro-title"><h6>หมายเหตุ</h6></td>
				<td class="pro-des" align="left"a><?php echo $Data->note?> </td>
			 </tr> 
                         <?php }?>
		  </table>	
		  
		 <div style="background-color: #e2e2e2; margin-right: 20px; padding: 10px;">
			  <h5>เราได้รับข้อมูลของคุณเรียบร้อย อีเมลยืนยันการจองส่งไปแล้วที่: <?php echo $Data->email?></h5>

			  <p style="color:#B50003">ขณะนี้เจ้าหน้าที่กำลังตรวจสอบที่นั่งให้กับคุณ และจะติดต่อกลับ อย่างเร็วที่สุดใน 1-3 วัน<br><br>

				หมายเหตุ<br>
				1. การจองผ่านเว็บเป็นการส่งคำจองที่นั่งกับบริษัทเท่านั้น และจะยังไม่ได้รับการยืนยันจนกว่า จะมีเจ้าหน้าที่ติดต่อกลับหาคุณ<br>
			  </p>
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
  