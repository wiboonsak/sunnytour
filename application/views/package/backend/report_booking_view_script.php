<style>
.removeRow
{

}
</style>
<script type="text/javascript">
    $(document).ready(function () {
    $("#ckbCheckAll").click(function () {
        $(".delete_checkbox").prop('checked', $(this).prop('checked'));
         $(".removech").addClass('removeRow');
    });
      $('#table2').DataTable({
 "ordering": false
 });
	jQuery('#datepicker1 , #datepicker2').datepicker({
			autoclose: true,
			format: "dd/mm/yyyy",			
			todayHighlight: true
		});
    $('.delete_checkbox').click(function(){
  if($(this).is(':checked'))
  {
   $(this).closest('tr').addClass('removeRow');
  }
  else
  {
   $(this).closest('tr').removeClass('removeRow');
  }
 });

 $('#delete_all').click(function(){
  var checkbox = $('.delete_checkbox:checked');
  if(checkbox.length > 0)
  {
   var checkbox_value = [];
   $(checkbox).each(function(){
    checkbox_value.push($(this).val());
   });
   $.ajax({
    url:"<?php echo base_url(); ?>PackageCMS/delete_all",
    method:"POST",
    data:{checkbox_value:checkbox_value},
    success:function()
    {
     $('.removeRow').fadeOut(1500);
     $("#ckbCheckAll").prop('checked',false);
      setTimeout(function(){ window.location.href = "<?php echo base_url('PackageCMS/bookinglist')?>"; }, 1000);
    }
   })
  }
  else
  {
   alert('Select atleast one records');
  }
 });
 $('#save_all').click(function(){
  var checkbox = $('.delete_checkbox:checked');
  if(checkbox.length > 0)
  {
   var checkbox_value = [];
   $(checkbox).each(function(){
    checkbox_value.push($(this).val());
   });
   $.ajax({
    url:"<?php echo base_url(); ?>PackageCMS/save_all",
    method:"POST",
    data:{checkbox_value:checkbox_value},
    success:function()
    {
     $('.removeRow').fadeOut(1500);
     $("#ckbCheckAll").prop('checked',false);
      setTimeout(function(){ window.location.href = "<?php echo base_url('PackageCMS/bookinglist')?>"; }, 1000);
    }
   })
  }
  else
  {
   alert('Select atleast one records');
  }
 });

});
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
                    setTimeout(function(){ window.location.href = "<?php echo base_url('PackageCMS/bookinglist')?>"; }, 1000);
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
        //-------------------------------------------
              function searchinput(status){
	
		var SearchBooking = $('#SearchBooking').val();
		var datepicker1 = $('#datepicker1').val();	
		
			$.post('<?php echo base_url('PackageCMS/searchdata')?>' , { SearchBooking : SearchBooking , datepicker1 : datepicker1 ,status:status } , function(data){ 
				
					$('#showData').empty();		
					$('#showData').html(data);	
			})		
	}
        //--------------------------------------
        	 function windowOpener(windowHeight, windowWidth, windowName, windowUri)
			{
					var centerWidth = (window.screen.width - windowWidth) / 2;
					var centerHeight = (window.screen.height - windowHeight) / 2;
    				newWindow = window.open(windowUri, windowName, 'resizable=1,scrollbars=yes,width=' + windowWidth +  ',height=' + windowHeight +  ',left=' +centerWidth + ',top=' + centerHeight);
					newWindow.focus();
					return newWindow.name;
		}
                 //----------------------
	function save_data(dataID,table,status){ 
            var title = '';
            if(status=='2'){
                title = 'Save';
            }else{
                title = 'Cancel';
            }
		swal({
                    
           title: title+'?',
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
                        title: 'Data has been '+title,
                        //text: "Your file has been deleted",
                        type: 'success',
                        confirmButtonClass: 'btn btn-confirm mt-2'
                    });
                    setTimeout(function(){ window.location.href = "<?php echo base_url('PackageCMS/bookinglist')?>"; }, 1000);
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
	function cancel_data(dataID,table){  
		swal({
           title: 'ต้องการยกเลิกข้อมูลนี้?',
           //text: "You won't be able to revert this!",
           type: 'warning',
           showCancelButton: true,
           confirmButtonClass: 'btn btn-confirm mt-2',
           cancelButtonClass: 'btn btn-cancel ml-2 mt-2',
           confirmButtonText: 'ยกเลิกข้อมูล'
        }).then(function () {
		   $.post('<?php echo base_url('PackageCMS/cancelData')?>' , { dataID : dataID , table : table }, 
			function(data){
				if(data==1){ 
                	swal({
                        title: 'ยกเลิกข้อมูลเรียบร้อยแล้ว',
                        //text: "Your file has been deleted",
                        type: 'success',
                        confirmButtonClass: 'btn btn-confirm mt-2'
                    });
                    setTimeout(function(){ window.location.href = "<?php echo base_url('PackageCMS/bookinglist')?>"; }, 1000);
				}else{
					swal({
						title: 'ไม่สามารถยกเลิกข้อมูลได้!',
						//text: "You won't be able to revert this!",
						type: 'warning',
						confirmButtonClass: 'btn btn-confirm mt-2'
					})
				}
			})
		})
	}
  

</script>	
</body>
</html>
