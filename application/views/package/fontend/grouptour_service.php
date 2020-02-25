
	<!-- end header --->
	  
    <div class=" clearfix"></div>
    <!--end header section -->
    
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
    <h3 class="uppercase text-white less-mar-1 title">บริการจัดกรุ๊ปทัวร์</h3>
    <h6 class="uppercase text-white sub-title">ซันนี่ทัวร์ บริการวางแผนและจัดการเดินทาง DMC คุณภาพ ครบวงจร จัดกรุ๊ปทัวร์ กรุ๊ปเหมา ทุกรูปแบบ</h6>
    </div>
       </div>       
        </div></div>        
        </div>
      </div>
    </section>
    <div class=" clearfix"></div>
    <!--end header section -->
	  
	   <section>
		<div class="pagenation-holder">
		  <div class="container">
			<div class="row">
		    <div class="col-md-6"> <h3>บริการจัดกรุ๊ปทัวร์</h3></div>
			<div class="col-md-6">
			<ol class="breadcrumb">
				<li><a href="<?php echo base_url('Welcome')?>" style="color:black">หน้าหลัก</a></li>
				<li class="current"><a href="<?php echo base_url('Welcome/Grouptour')?>">บริการจัดกรุ๊ปทัวร์</a></li>
			</ol>  
			</div>          
        </div>
      </div>
    </div>
  </section>
  <div class="clearfix"></div>
  <!--end section-->
	  
	  
	  

   <section class="sec-padding">
  <div class="container">
  <div class="row">
  
  <div class="col-md-9 col-centered text-center">
          <h4 class="text-dark font-weight-4" style="line-height: 32px">รับจัดกรุ๊ปทัวร์ส่วนตัว บริการจัดกรุ๊ปทัวร์ส่วนตัว กรุ๊ปเหมา กรุ๊ปจัดเอง หรือ Private Group โปรแกรมทัวร์ต่างประเทศ เลือกจัดได้ตามความต้องการของคุณ</h4>
    </div>        
          <!--end item-->
          
  </div>
  </div>
  </section>
<div class="clearfix"></div>
  <!-- end section -->
  
  

	<section class="sec-padding section-light" style="margin-top: 20px" >
	  <div class="container">
	  <div class="row" style="padding-left: 30px">
		 <h4><span style="color: #fff;  background-color: #ecae3d; padding: 10px;"><i class="fa fa-book"></i>&nbsp;&nbsp; สนใจจองกรุ๊ปทัวร์ส่วนตัว กรุณากรอกข้อมูลเพื่อติดต่อกลับ</span></h4>

	  <div class="col-md-12">	      
         
		  <br>
		  <div class="col-xs-6 padding">
                      <input class="sp-binfo" type="text" id="name" name="name" placeholder="ชื่อ-สกุลลูกค้า" value="">
		  </div>
		  <div class="col-xs-6 padding">
               <input class="sp-binfo" type="text" id="phone" name="phone" placeholder="เบอร์โทร">
		  </div>
		   <div class="col-xs-6 padding">
			   <input class="sp-binfo" type="text" id="email" name="email" placeholder="อีเมล">
		  </div>
		  <div class="col-xs-6 padding">
		   	   <input class="sp-binfo" type="text" id="line" name="line" placeholder="Line">
		  </div>		  
		  <div class="col-xs-12 padding">
               <input class="sp-binfo" type="text" id="program" name="program" placeholder="โปรแกรม">
          </div>		  
		  <div class="col-xs-3 padding">
                      <label style="padding-top:10px">วันที่เดินทางไป</label>
          </div>
		  <div class="col-xs-3 padding">
                      <input class="sp-binfo" type="date" id="datestart" name="datestart" onchange="getdateend(this.value)">
          </div>
		  <div class="col-xs-3 padding">
                      <label style="padding-top:10px">วันที่เดินทางกลับ</label>
          </div>
		  <div class="col-xs-3 padding">
                      <input class="sp-binfo" type="date" id="dateend" name="dateend" >
          </div>
              <div class="col-xs-3 padding">
                      <label style="padding-top:10px">จำนวนวัน</label>
          </div>
		  <div class="col-xs-3 padding">
               <input class="sp-binfo" type="number" id="day" name="day" placeholder="วัน">
          </div>
              <div class="col-xs-3 padding">
                      <label style="padding-top:10px">จำนวนคืน</label>
          </div>
		  <div class="col-xs-3 padding">
               <input class="sp-binfo" type="number" id="night" name="night" placeholder="คืน">
          </div>
		  <div class="col-xs-6 padding">
                      <input class="sp-binfo" type="number" id="totalcustomer" name="totalcustomer" placeholder="จำนวนผู้เดินทาง">
          </div>
		  <div class="col-xs-6 padding">
               <input class="sp-binfo" type="text" id="Budget" name="Budget" placeholder="Budget บาท/ท่าน">
          </div>
		  <div class="col-xs-12 padding">
               <textarea class="textaria-1" id="comment" name="comment" type="text" class="textaria-1" placeholder="หมายเหตุ"></textarea>			   
		  </div>
		  <div class="col-xs-12 padding">
		       <a class="btn btn-gyellow  btn-fullwidth uppercase center-block" onclick="addgrouptour()" id="buttonClass">ส่งข้อมูลการจอง</a> 
		  </div>
	  </div>
	  <!--end item-->

	  </div>
	  	
		
		</div>
	</section>
	<div class="clearfix"></div>
 	<!-- end section -->	




  <section class="section-side-image section-gyellow clearfix">
      <div class="img-holder col-md-6 col-sm-3 pull-left">
        <div class="background-imgholder" style="background:url(<?php echo base_url('HTML/images/tours/SPRING-in-JAPAN-wallpaper-hd-free-download.jpg')?>);"><img class="nodisplay-image" src="<?php echo base_url('HTML/images/tours/SPRING-in-JAPAN-wallpaper-hd-free-download.jpg')?>" alt=""/> </div>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 col-md-offset-6 col-sm-8 col-sm-offset-4 clearfix align-left">
            <div class="text-box padding-5">
              <div class="ce3-feature-box-7">
                <div class="col-xs-12 nopadding">
                  <div class="sec-title-container less-padding-3 text-left">
                    <div class="ce4-title-line-1 align-left"></div>
                    <h4 class="uppercase font-weight-5 less-mar-1 text-white">รับจัดกรุ๊ปทัวร์ส่วนตัว </h4><br>
                    <div class="clearfix"></div>
                    <p class="by-sub-title"  style="font-size: 16px; color:#ffffff;">บริการจัดกรุ๊ปทัวร์ส่วนตัว กรุ๊ปเหมา กรุ๊ปจัดเอง หรือ Private Group โปรแกรมทัวร์ต่างประเทศ เลือกจัดได้ตามความต้องการของคุณ จะไป ศึกษา ดูงาน สัมมนา ท่องเที่ยว กรุ๊ปเล็กหรือกรุ๊ปใหญ่ เป็นบริษัท หน่วยงานรัฐ เอกชน หรือไปกับกลุ่มเพื่อน ครอบครัวก็ไม่ใช่เรื่องยากอีกต่อไป ด้วยบริการที่มีคุณภาพและราคาถูก เพราะทัวร์ครับเราเต็มเปี่ยมไปด้วย </p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <!--end title-->
                
                <div class="iconlist-2">
                  <div class="icon dark"><i class="fa fa fa-check text-white" aria-hidden="true"></i></div>
                  <div class="text" style="font-size: 16px; color:#ffffff;">ความน่าเชื่อถือที่ไว้ใจได้ </div>
                </div>
                <!--end item-->
                
                <div class="iconlist-2">
                  <div class="icon dark"><i class="fa fa fa-check text-white" aria-hidden="true"></i></div>
                  <div class="text" style="font-size: 16px; color:#ffffff;">บริการดี รวดเร็ว ตอบโจทย์ทุกความต้องการ</div>
                </div>
                <!--end item-->
                
                <div class="iconlist-2">
                  <div class="icon dark"><i class="fa fa fa-check text-white" aria-hidden="true"></i></div>
                  <div class="text" style="font-size: 16px; color:#ffffff;">เราเป็นมืออาชีพมั่นใจในคุณภาพ</div>
                </div>
                <!--end item-->
                
                <div class="iconlist-2">
                  <div class="icon dark"><i class="fa fa fa-check text-white" aria-hidden="true"></i></div>
                  <div class="text" style="font-size: 16px; color:#ffffff;">ช่วยออกแบบทริปส่วนตัว</div>
                </div>
                <!--end item-->
                
                <div class="clearfix"></div>
                <br/>
                <br/>
                <!--<a class="btn btn-gyellow-2 hre#">Read more</a>-->
				</div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class=" clearfix"></div>
    <!--end section-->
   
    <!-- end section -->
 