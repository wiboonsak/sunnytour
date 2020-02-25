
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
    <h3 class="uppercase text-white less-mar-1 title">บริการจองตั๋วเครื่องบิน</h3>
    <h6 class="uppercase text-white sub-title">ซันนี่ทัวร์ บริการจองตั๋วเครื่องบิน ทุกสายการบิน ทุกเส้นทาง เช็คราคา จองตั๋วเครื่องบินออนไลน์</h6>
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
		    <div class="col-md-6"> <h3>บริการจองตั๋วเครื่องบิน</h3></div>
			<div class="col-md-6">
			<ol class="breadcrumb">
                            <li><a href="<?php echo base_url('Welcome')?>" style="color:black">หน้าหลัก</a></li>
				<li class="current"><a href="<?php echo base_url('Welcome/Ticket')?>">บริการจองตั๋วเครื่องบิน</a></li>
			</ol>  
			</div>          
        </div>
      </div>
    </div>
  </section>
  <div class="clearfix"></div>
  <!--end section-->
	  
	  
	  

   <section class="sec-padding" style="padding-bottom: 10px !important">
  <div class="container">
  <div class="row">
  
  <div class="col-md-9 col-centered text-center">
          <h4 class="text-dark font-weight-4" style="line-height: 36px;">ซันนี่ทัวร์ บริการจองตั๋วเครื่องบิน ทุกสายการบิน ทุกเส้นทาง เช็คราคา จองตั๋วเครื่องบินออนไลน์</h4>
    </div>        
          <!--end item-->
          
  </div>
  </div>
  </section>
<div class="clearfix"></div>
  <!-- end section -->
  <section class="sec-padding">
	<div class="container">
	   <div class="row slide-controls-2">
		<!-- Slide ถ้ามี Tab รายละเอียด Slide จะไม่แสดงค่ะ -->
		<div id="owl-demo2" class="owl-carousel owl-theme">
<?php foreach($slidedata->result() AS $DATA){?>
			<div class="item">
			<div class="col-md-12">
			  <img src="<?php echo base_url('uploadfile/slideticket/').$DATA->img?>" alt="" class="img-responsive"/>                           
			  </div> 

			</div>
			<!--end carousel item -->

<?php }?>
		</div>
		<!--end carousel-->
	  </div>

	 <div class="col-divider-margin-6"></div>
	</div>
</section>
  

    
  
  <section class="section-side-image section-gyellow clearfix">
      <div class="img-holder col-md-6 col-sm-3 pull-left">
        <div class="background-imgholder" style="background:url(<?php echo base_url('HTML/images/plane.jpg')?>);"><img class="nodisplay-image" src="<?php echo base_url('HTML/images/plane.jpg')?>" alt=""/> </div>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 col-md-offset-6 col-sm-8 col-sm-offset-4 clearfix align-left">
            <div class="text-box padding-5">
              <div class="ce3-feature-box-7">
                <div class="col-xs-12 nopadding">
                  <div class="sec-title-container less-padding-3 text-left">
                    <div class="ce4-title-line-1 align-left"></div>
                    <?php foreach ($list_ticket_text->result() AS $list_ticket_text2){}
                    echo $list_ticket_text2->explanation
                    ?>
<!--                    <h4 class="uppercase font-weight-5 less-mar-1 text-white">บริการจองตั๋วเครื่องบิน</h4><br>
                    <div class="clearfix"></div>
                    <p class="by-sub-title"  style="font-size: 16px; color:#ffffff;">
						ซันนี่ทัวร์ บริการจองตั๋วเครื่องบิน ทุกสายการบิน ทุกเส้นทาง เช็คราคา จองตั๋วเครื่องบินออนไลน์<br><br>
						สำหรับลูกค้านิติบุคคล บริษัท ร้านค้า ที่เดินทางโดยเครื่องบินทั้งในประเทศและต่างประเทศเป็นประจำ เรามีข้อเสนอพิเศษช่วยให้คุณประหยัดค่าเดินทาง กรุณาติดต่อแผนกตั๋วเครื่องบินเพื่อขอข้อมูลเพิ่มเติม โทร. <a href="tel:+66074354444">074-354-444</a><br><br>
						ให้คุณไม่พลาดทุกการเดินทางไม่ว่าจะใกล้หรือไกลในราคาสุดประหยัด กับตั๋วเครื่องบินราคาโปรโมชั่นหลากหลายสายการบินทั้งในและต่างประเทศ เพื่อให้คุณได้ตั๋วเครื่องบินในราคาที่ดีที่สุด<br><br>
						เจ้าหน้าที่ของเรายังสามารถนำเสนอราคาของแต่ละสายการบิน ได้ตรงตามความต้องการของลูกค้า รวมทั้งยังสามารถแจ้งข้อมูลตารางเที่ยวบิน ภาษีน้ำมันและภาษีสนามบิน ได้อย่างละเอียดครบถ้วน<br><br>
						นอกจากตั๋วเครื่องบินราคาถูก รวมทั้งตั๋วโปรโมชั่นราคาพิเศษที่มัชรูมทราเวลคัดสรรมาเพื่อท่านแล้ว เรายังมีบริการหลังการขายให้คำปรึกษาและอำนวยความสะดวกแก่ท่านจนกว่าจะถึงจุดหมายปลายทางโดยปลอดภัย รวมถึงบริการ Refund คืนเงินเมื่อยกเลิกการเดินทางตามเงื่อนไขของตั๋ว					  
					  </p>-->
                  </div>
                </div>
                <div class="clearfix"></div>
                <!--end title-->
                <!--<a class="btn btn-gyellow-2 hre#">Read more</a>-->
				</div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class=" clearfix"></div>
    <!--end section-->
 