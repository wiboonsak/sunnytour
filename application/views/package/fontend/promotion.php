
	<!-- header  -->

	<!-- end header --->
	 <style>
    
    .isDisabled {
  pointer-events: none;
  cursor: not-allowed !important;
  opacity: 0.5;
  text-decoration: none;
}
</style> 
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
    <h3 class="uppercase text-white less-mar-1 title">Promotions</h3>
    <h6 class="uppercase text-white sub-title">พบกับโปรโมชั่นกิจกรรมน่าสนใจมากมายจากซันนี่ทัวร์</h6>
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
		    <div class="col-md-6"> <h3>Promotions</h3></div>
			<div class="col-md-6">
			<ol class="breadcrumb">
				<li><a href="<?php echo base_url('Welcome')?>" style="color:black">หน้าหลัก</a></li>
                                <li class="current"><a href="<?php echo base_url('Promotion')?>">Promotions</a></li>
			</ol>  
			</div>          
        </div>
      </div>
    </div>
  </section>  
<div class=" clearfix"></div>
    
    <section class="sec-padding section-light">
      <div class="container">
        <div class="row">
        <?php 
         $limit =''; $notUse ='';                            
$countAll=$this->Fontend_model->getpromotionDetail($limit,$notUse,'-100','-100');

        $countRow = $countAll->num_rows(); 
        $totalRow = ceil($countRow/$perpage);
        foreach ($promotionDetail->result() AS $promotionDetail2){
        ?>
            <div class="col-md-4 col-sm-6 col-xs-12" style="padding-top: 10px;" > 
           <div class="bg2-featurebox-3">
              <div class="img-box">
                <img src="<?php echo base_url('uploadfile/promotion_img/').$promotionDetail2->img?>" alt="" class="img-responsive"/> </div>
                <div class="postinfo-box" style="background-color:white;height: 400px">
                  <h4 class="dosis uppercase title" style="padding: 15px 15px 0px 15px "><a href="<?php echo base_url('Promotion/promotion_Detail/').$promotionDetail2->id?>" style="color:black"><?php echo $promotionDetail2->topic?></a></h4>
                <div class="blog-post-info" style="padding: 0px 15px 0px 15px "> <span><i class="fa fa-calendar"></i><?php echo $this->Fontend_model->get_shortEngDate($promotionDetail2->date_add)?></span></div>
                <br/>
                <div style="padding: 0px 15px 0px 15px "><?php echo $this->Fontend_model->str_limit_html($promotionDetail2->promotion_detail,180)?></div>
                <br/>
                <div style="text-align:center">
                <a class="btn btn-dark-3 btn-small uppercase" href="<?php echo base_url('Promotion/promotion_Detail/').$promotionDetail2->id?>" >Read more</a> </div>
			   </div>
            </div>
            <!--end post item-->
          </div>
          <!--end col main-->
        <?php }?>
          
          
        </div>
          
          <div class="col-md-12 text-center">
               <?php 
                                                    $page2 =$page-1; 
                                                    $page3 =$page+1; 
                                                    
                                                    ?>
			<ul class="pagination style-2">
                            <li <?php if($page == 1){?>class="isDisabled"<?php }?>> <a href="<?php echo base_url('Promotion/Page/').$page2?> " >
								<span>
                      <i class="fa fa-angle-left"></i>
								</span>
                                                                </a>
							</li>
                                                                   <?php for($i=1;$i<=$totalRow;$i++){ ?>     
                                                        <li <?php if($page == $i){?>class="active"<?php }?> >
                                                             <a href="<?php echo base_url('Promotion/Page/').$i?>  " >
								<span><?php echo $i?><span class="sr-only">(current)</span></span>
                                                                </a>
							</li>
<?php }?>    
             <li <?php if($totalRow == 1){?>class="isDisabled"<?php }?>>
                                                            <a href="<?php echo base_url('Promotion/Page/').$page3?> " >
								<span>
                     <i class="fa fa-angle-right"></i>
								</span>
                                                                </a>
							</li>
                           </ul>  
	  	</div>
      </div>
    </section>
    <div class="clearfix"></div>
    <!-- end section -->


  
