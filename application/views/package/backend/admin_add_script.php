
<script type="text/javascript">
    $(document).ready(function () {
          loadImages('<?php echo $currentID ?>');
          loadImgpromotion('<?php echo $currentID ?>');
$('.summernote').summernote({
                    height: 350,                 // set editor height
                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor
                    focus: false                 // set focus to editable area after initializing summernote
                });	
	
        // Default Datatable
    });
              //---------------------- txtTitle catFiles 
   //---------------------------------
	function Addadmin(){
		var Name = $("#name").val();
		var user_name = $("#user_name").val();
                var Password = $("#Password").val();
                var ComfirmPassword = $("#ComfirmPassword").val();
                var password_old = $("#oldpass").val();
                var dataID = $("#currentID").val();
               
    if(Name == ''){  
         swal({
              title: "Please enter user name ",
                type: "warning",
                closeOnConfirm: false,
                showLoaderOnConfirm: true  
            });
    }else if(user_name ==''){
            swal({
              title: "Please enter user name ",
                type: "warning",
                closeOnConfirm: false,
                showLoaderOnConfirm: true  
            });
        }else if((Password == '')&&(password_old == '')){
             swal({
              title: "Please enter Password ",
                type: "warning",
                closeOnConfirm: false,
                showLoaderOnConfirm: true  
            });
        }else if ((ComfirmPassword == '')&&(password_old == '')){
                swal({
              title: "Please enter Comfirm Password ",
                type: "warning",
                closeOnConfirm: false,
                showLoaderOnConfirm: true  
            }); 
        }else{
             var postData = new FormData($("#adminForm")[0]);
                $.ajax({
                    type: 'POST',
                    url: '<?php echo base_url('PackageCMS/add_admin1') ?>',
                    processData: false,
                    contentType: false,
                    data: postData,
                    success: function (data, status) {
                        //console.log(data);
                        $('#currentID').val(data);
                        if (status == 'success') {
                             swal({
                                title: 'Save data successfully..',
                                text: 'Saved successfully',
                                type: 'success',
                                confirmButtonClass: 'btn btn-confirm mt-2'
                            });
                            setTimeout(function () {
                                window.location.href = "<?php echo base_url('PackageCMS/Add_admin/')?>"+data;
                            }, 1000);
                        } else {
                            swal({
                                title: 'Can not be saved.!',
                                text: "Can not be saved.!",
                                type: 'warning',
                                confirmButtonClass: 'btn btn-confirm mt-2'
                            });
                        }
                    }
                });

	}
        }
      //---------------------------------
        function chkpass(pass){
            var pass1 = $('#Password').val();
            if(pass != pass1){
                alert('password is not match');
                $('#ComfirmPassword').val('');
                $('#ComfirmPassword').focus();
            }
                    }
  
   
  

</script>	
</body>
</html>
