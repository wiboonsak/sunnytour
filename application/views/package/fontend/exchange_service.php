
	  
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
    <h3 class="uppercase text-white less-mar-1 title">บริการแลกเงินตราต่างประเทศ</h3>
    <h6 class="uppercase text-white sub-title">มั่นใจทุกการแลกเปลี่ยน สะดวกทุกครั้งเมื่อใช้บริการ มั่นใจด้วยระบบอัตราแลกเปลี่ยนระดับมาตรฐานสากล และสกุลเงินที่หลากหลาย</h6>
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
		    <div class="col-md-6"> <h3>บริการแลกเงินตราต่างประเทศ</h3></div>
			<div class="col-md-6">
			<ol class="breadcrumb">
                            <li><a href="<?php echo base_url('Welcome')?>">หน้าหลัก</a></li>
				<li class="current"><a href="<?php echo base_url('Exchange')?>">บริการแลกเงินตราต่างประเทศ</a></li>
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
          <h4 class="text-dark font-weight-4" style="line-height: 36px;">มั่นใจทุกการแลกเปลี่ยน สะดวกทุกครั้งเมื่อใช้บริการ มั่นใจด้วยระบบอัตราแลกเปลี่ยนระดับมาตรฐานสากล และสกุลเงินที่หลากหลาย</h4>
    </div>        
          <!--end item-->
          
  </div>
  </div>
  </section>
<div class="clearfix"></div>
  <!-- end section -->
	  
	  
	  
 <section>
      <div class="divider-line solid light"></div>
      <div class="container">
        <div class="row sec-padding">
          <div class="col-md-6 col-sm-6 col-xs-12 margin-bottom">
            <div class="col-xs-12 nopadding">
              <div class="sec-title-container less-padding-3 text-left">
                <h4 class="uppercase font-weight-5 less-mar-1">Currency Exchange Rate<span class="text-gyellow">s.</span></h4>
                <div class="ce4-title-line-1 align-left"></div>
              </div>
            </div>
            <div class="clearfix"></div>
            <!--end title-->
			  
          <div class="domain-pricing-table">
          <table class="table-style-2">
            <thead>
              <tr>
                <th>Currency</th>
                <th>Buying</th>
                <th>Selling</th>
              </tr>
            </thead>
            <tbody>
                <?php foreach ($exchangeDetail->result() AS $data){?>
			  <tr>
                <td><?php echo $data->currency_short?><br><font style="font-size: 10px"><?php echo $data->currency_name?></font></td>
                <td><?php echo $data->buying?></td>
                <td><?php echo $data->selling?></td>
              </tr>
                <?php }?>        
            </tbody>
          </table>
        </div>    
		</div>
        <!--end item-->
          
          <div class="col-md-6 col-sm-6 col-xs-12 padding-top-3"> <img src="<?php echo base_url('HTML/images/ce4-8.png')?>" alt="" class="img-responsive padding-top-3"/> 
			  <h4>SUNNY TOURS บริการแลกเปลี่ยนเงินตราต่างประเทศ</h4>
			  <p>มั่นใจทุกการแลกเปลี่ยน สะดวกทุกครั้งเมื่อใช้บริการ มั่นใจด้วยระบบอัตราแลกเปลี่ยนระดับมาตรฐานสากล และสกุลเงินที่หลากหลาย</p>
		</div>
          <!--end item--> 
        </div>
      </div>
	
 </section>
 <div class="clearfix"></div>
 <!-- end section -->

