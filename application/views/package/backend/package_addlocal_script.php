
<script type="text/javascript">
    $(document).ready(function () {
          loadImages('<?php echo $currentID ?>');
          loadfile('<?php echo $currentID ?>');
          loadImagespack('<?php echo $currentID ?>');
$('.summernote').summernote({
                    height: 350,                 // set editor height
                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor
                    focus: false                 // set focus to editable area after initializing summernote
                });	
	var Code = $('#Code').val();
        if(Code == ' '){
            $('#Code').val();
        }
        // Default Datatable
    });
              //---------------------- txtTitle catFiles 
    function Add() {
        var name = $('#name').val();
        var duration = $('#duration').val();
        var period = $('#period').val();
        var airline = $('#airline').val();
        var price = $('#price').val();
        var Code = $('#Code').val();
        var product_category = $('#product_category').val();
        var desc = $('#desc').summernote('code');
        var condition = $('#condition').summernote('code');
        var highlight = $('#highlight').summernote('code');
    var currentID = $('#currentID').val();
    var pack_img = $('#pack_img').val();
    var imgold = $('#imgold').val();
    var chtxt = $('#chtxt').val();
    if(product_category == '0'){
           swal(
                    {
                        title: 'Please select Package Category!',
                        confirmButtonClass: 'btn btn-confirm mt-2',
                        type: 'warning'
                    }
            )
    }else if (name == ' ') {
            swal(
                    {
                        title: 'Please enter Package name!',
                        confirmButtonClass: 'btn btn-confirm mt-2',
                        type: 'warning'
                    }
            ) 
    }else if (period == ' ') {
            swal(
                    {
                        title: 'Please enter period of time!',
                        confirmButtonClass: 'btn btn-confirm mt-2',
                        type: 'warning'
                    }
            ) 
    }else if (airline == ' ') {
            swal(
                    {
                        title: 'Please enter airline!',
                        confirmButtonClass: 'btn btn-confirm mt-2',
                        type: 'warning'
                    }
            ) 
    }else if (duration == ' ') {
            swal(
                    {
                        title: 'Please enter Traveling Time!',
                        confirmButtonClass: 'btn btn-confirm mt-2',
                        type: 'warning'
                    }
            ) 
    }else if (price == ' ') {
            swal(
                    {
                        title: 'Please enter Package Price!',
                        confirmButtonClass: 'btn btn-confirm mt-2',
                        type: 'warning'
                    }
            )
    }else if (Code == ' ') {
            swal(
                    {
                        title: 'Please enter Code!',
                        confirmButtonClass: 'btn btn-confirm mt-2',
                        type: 'warning'
                    }
            ) 
    }else if (highlight == ' ') {
            swal(
                    {
                        title: 'Please enter Detail Highlight Tour!',
                        confirmButtonClass: 'btn btn-confirm mt-2',
                        type: 'warning'
                    }
            ) 
     }else if(desc == ' '){ 
			    swal(
					{
						title: ' Please enter Package detail!',
						confirmButtonClass: 'btn btn-confirm mt-2',
						type: 'warning'
					}
				)
     }else if(condition == ' '){ 
			    swal(
					{
						title: ' Please enter Package condition!',
						confirmButtonClass: 'btn btn-confirm mt-2',
						type: 'warning'
					}
				)
     }else if(chtxt == ''){ 
			    swal(
					{
						title: ' Please Select included name !',
						confirmButtonClass: 'btn btn-confirm mt-2',
						type: 'warning'
					}
				)
     }else if((pack_img == '')&&(imgold == '')){ 
			    swal(
					{
						title: ' Please Select Package Image!',
						confirmButtonClass: 'btn btn-confirm mt-2',
						type: 'warning'
					}
				)
        } else {
            //---------------------------------------------
            var postData = new FormData($("#packageForm")[0]);
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url('PackageCMS/addpackagelocal') ?>',
                processData: false,
                contentType: false,
                data: postData,
                success: function (data, status) {
                    console.log(data);
                    $('#currentID').val(data);
                    console.log('data->' + data + '  status->' + status);
                    if (status == 'success') {
                        swal({
                            title: 'Successfully saved.',
                            //text: 'You clicked the button!',
                            type: 'success',
                            confirmButtonClass: 'btn btn-confirm mt-2'
                            });
                     setTimeout(function(){ window.location.href = "<?php echo base_url('PackageCMS/packageAddLocal/')?>"+data; }, 1000);
        } else {
                        swal({
                            title: 'can not be saved.!',
                            //text: "You won't be able to revert this!",
                            type: 'warning',
                            confirmButtonClass: 'btn btn-confirm mt-2'
                        });
                    }
    }
            });
       }

   }
    //--------------------------------------------------
    $(".fileupload-exists").click(function () {
        $("#upload_preview").empty();
        $("#upload_preview").addClass("fileupload-exists");
        $("#upload_new").removeClass("fileupload-exists");
        $("#img").val("");
        $("[data-provides=fileupload]").removeClass("fileupload-exists");
        $("[data-provides=fileupload]").addClass("fileupload-new");
    });
    //--------------------------------------
    function Addimg() {
        var currentID = $('#currentID2').val();
        var postData = new FormData($("#imgForm")[0]);
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url('PackageCMS/addimg') ?>',
            processData: false,
            contentType: false,
            data: postData,
            success: function (data, status) {
                //console.log(data);
                $('#currentID').val(data);
                //console.log('data->' + data + '  status->' + status);
                if (status == 'success') {
                    swal({
                        title: 'Successfully saved.',
                        //text: 'You clicked the button!',
                        type: 'success',
                        confirmButtonClass: 'btn btn-confirm mt-2'
                    });
                    setTimeout(function () {
                        window.location.href = "<?php echo base_url('PackageCMS/packageAddLocal/') ?>" + currentID;
                    }, 1000);
                } else {
                    swal({
                        title: 'Can not be saved!',
                        //text: "You won't be able to revert this!",
                        type: 'warning',
                        confirmButtonClass: 'btn btn-confirm mt-2'
                    });
                }
            }
        });
    }
    //--------------------------------------
    function Addfile() {
        var currentID = $('#currentID2').val();
        var postData = new FormData($("#fileForm")[0]);
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url('PackageCMS/addfile') ?>',
            processData: false,
            contentType: false,
            data: postData,
            success: function (data, status) {
                //console.log(data);
                $('#currentID').val(data);
                //console.log('data->' + data + '  status->' + status);
                if (status == 'success') {
                    swal({
                        title: 'Successfully saved.',
                        //text: 'You clicked the button!',
                        type: 'success',
                        confirmButtonClass: 'btn btn-confirm mt-2'
                    });
                    setTimeout(function () {
                        window.location.href = "<?php echo base_url('PackageCMS/packageAddLocal/') ?>" + currentID;
                    }, 1000);
                } else {
                    swal({
                        title: 'Can not be saved!',
                        //text: "You won't be able to revert this!",
                        type: 'warning',
                        confirmButtonClass: 'btn btn-confirm mt-2'
                    });
                }
            }
        });
    }
    //--------------------------- 
    function  loadImages(ProID) {
        $.post('<?php echo base_url('PackageCMS/loadImg') ?>', {ProID: ProID}, function (data) {
            $('#showImage').empty();
            $('#showImage').html(data);
        });
    }
    //--------------------------- 
    function  loadfile(ProID) {
        $.post('<?php echo base_url('PackageCMS/loadfile') ?>', {ProID: ProID}, function (data) {
            $('#showfile').empty();
            $('#showfile').html(data);
        });
    }
                 //==================================
    function updateOrder(dataID, FieldName, changeValue) {
    var currentID = $('#currentID').val();
        if ((changeValue == '')) {
            swal({
                title: 'Warning !',
                text: "Please enter a Order.",
                type: 'warning',
                confirmButtonClass: 'btn btn-confirm mt-2'
            }) 
        } else {
            $.post('<?php echo base_url('PackageCMS/updateorder') ?>', {dataID: dataID, FieldName: FieldName, changeValue: changeValue});
             setTimeout(function () {
                        window.location.href = "<?php echo base_url('PackageCMS/packageAddLocal/') ?>" + currentID;
                    }, 1000);
        }
    }
    function updateOrderpdf(dataID, FieldName, changeValue) {
    var currentID = $('#currentID').val();
        if ((changeValue == '')) {
            swal({
                title: 'Warning !',
                text: "Please enter a Order.",
                type: 'warning',
                confirmButtonClass: 'btn btn-confirm mt-2'
            }) 
        } else {
            $.post('<?php echo base_url('PackageCMS/updateorderpdf') ?>', {dataID: dataID, FieldName: FieldName, changeValue: changeValue});
             setTimeout(function () {
                        window.location.href = "<?php echo base_url('PackageCMS/packageAddLocal/') ?>" + currentID;
                    }, 1000);
        }
    }
     //---------------------------------------- 
    function comfirmDelete(DataID, fileType, FileName) {
        var currentID = $('#currentID').val();
        swal({
            title: 'Delete Data ?',
            text: "Please confirm the delete !",
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Confirm delete',
            cancelButtonText: 'Cancel',
            confirmButtonClass: 'btn btn-success mt-2',
            cancelButtonClass: 'btn btn-danger ml-2 mt-2',
            buttonsStyling: false
        }).then(function () {
            $.post('<?php echo base_url('PackageCMS/deletepackageimg') ?>', {DataID: DataID, fileType: fileType, FileName: FileName}, function (data) {
                console.log(data);
                if (data == '1') {
                    swal({
                        title: 'Deleted !',
                        text: "Data has been successfully deleted.",
                        type: 'success',
                        confirmButtonClass: 'btn btn-confirm mt-2'
                    })
                    setTimeout(function () {
                        window.location.href = "<?php echo base_url('PackageCMS/packageAddLocal/') ?>" + currentID;
                    }, 1000);
                } else {
                    swal({
                        title: 'Error',
                        text: "Can not be deleted.",
                        type: 'error',
                        confirmButtonClass: 'btn btn-confirm mt-2'
                    })
                }
            });
        }, function (dismiss) {
            if (dismiss === 'cancel') {
                swal({
                    title: 'Cancelled',
                    text: "You have canceled the data.",
                    type: 'error',
                    confirmButtonClass: 'btn btn-confirm mt-2'
                })
            }
        })
    }
     //---------------------------------------- 
    function comfirmDeletepdf(DataID, fileType, FileName) {
        var currentID = $('#currentID').val();
        swal({
            title: 'Delete Data ?',
            text: "Please confirm the delete !",
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Confirm delete',
            cancelButtonText: 'Cancel',
            confirmButtonClass: 'btn btn-success mt-2',
            cancelButtonClass: 'btn btn-danger ml-2 mt-2',
            buttonsStyling: false
        }).then(function () {
            $.post('<?php echo base_url('PackageCMS/deletepackagepdf') ?>', {DataID: DataID, fileType: fileType, FileName: FileName}, function (data) {
                console.log(data);
                if (data == '1') {
                    swal({
                        title: 'Deleted !',
                        text: "Data has been successfully deleted.",
                        type: 'success',
                        confirmButtonClass: 'btn btn-confirm mt-2'
                    })
                    setTimeout(function () {
                        window.location.href = "<?php echo base_url('PackageCMS/packageAddLocal/') ?>" + currentID;
                    }, 1000);
                } else {
                    swal({
                        title: 'Error',
                        text: "Can not be deleted.",
                        type: 'error',
                        confirmButtonClass: 'btn btn-confirm mt-2'
                    })
                }
            });
        }, function (dismiss) {
            if (dismiss === 'cancel') {
                swal({
                    title: 'Cancelled',
                    text: "You have canceled the data.",
                    type: 'error',
                    confirmButtonClass: 'btn btn-confirm mt-2'
                })
            }
        })
    }
    function checkout(featureid,dataID,ischecked){
			if(ischecked==false){ 
				$('#include'+dataID).prop('checked',false);   
				$.post('<?php echo base_url('PackageCMS/remove_included')?>' , { featureid : featureid , dataID : dataID }, function(data){ })
			}			
		}
    //-------------------------------

   $('.chbox').change(function() {
        if(this.checked == true) {
            $('.chbox').prop("checked", false);
            $(this).prop("checked",true);
            $('#chtxt').val('1');
        }
             
    });
    //-------------------------
    function Option(packageId) {
        $.post('<?php echo base_url('PackageCMS/Option') ?>', {packageId:packageId}, function (data) {
            $('#myModal .modal-body').empty();
            $('#myModalLabel').text('Price Option');
            $('.bodyA').html(data);
            $('#myModal').modal('show');
        })
    }
                //---------------------- txtTitle catFiles 
    function addOption() {
        var Option = $('#Option').val();
        var minperson = $('#minperson').val();
        var maxperson = $('#maxperson').val();
        var Adult = $('#Adult').val();
    var currentID = $('#currentID').val();
        if (Option == '') {
            swal(
                    {
                        title: 'Please enter Package Option name!',
                        confirmButtonClass: 'btn btn-confirm mt-2',
                        type: 'warning'
                    }
            ) 
        } else if(minperson ==''){
            swal(
                    {
                        title: 'Please enter Min person!',
                        confirmButtonClass: 'btn btn-confirm mt-2',
                        type: 'warning'
                    }
            ) 
        } else if(maxperson ==''){
            swal(
                    {
                        title: 'Please enter Max person!',
                        confirmButtonClass: 'btn btn-confirm mt-2',
                        type: 'warning'
                    }
            ) 
        } else if(Adult ==''){
            swal(
                    {
                        title: 'Please enter Adult Price!',
                        confirmButtonClass: 'btn btn-confirm mt-2',
                        type: 'warning'
                    }
            ) 
        } else {
            //---------------------------------------------
            var postData = new FormData($("#optionForm")[0]);
            console.log (postData);
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url('PackageCMS/addoption') ?>',
                processData: false,
                contentType: false,
                data: postData,
                success: function (data, status) {
                    console.log(data);
                    $('#currentID').val(data);
                    console.log('data->' + data + '  status->' + status);
                    if (status == 'success') {
                        swal({
                            title: 'Successfully saved.',
                            //text: 'You clicked the button!',
                            type: 'success',
                            confirmButtonClass: 'btn btn-confirm mt-2'
                            })
                                    .then(okay => {
                                if (okay) {
                                    location.reload();
                                }
                            });
        } else {
                        swal({
                            title: 'can not be saved.!',
                            //text: "You won't be able to revert this!",
                            type: 'warning',
                            confirmButtonClass: 'btn btn-confirm mt-2'
                        });
                    }
    }
            });
       }

   }
         //-----------------------------
        function checkoption(option){
			$.post('<?php echo base_url('PackageCMS/checkoption')?>',{ option:option }, function(data){
			if(data >0){
				alert('This option is already a mamber.');
                                $('#Option').val('');
                                $('#Option').focus();
                                return false;
				} ;
			});
		
                    }
    //---------------------------------------
    function updateThis(dataID,packageID) {
        var Traveling = $('#Traveling' + dataID).val(); 
        var Total = $('#Total' + dataID).val(); 
        var adult_price = $('#adult_price' + dataID).val(); 
        var aloneadult_price = $('#aloneadult_price' + dataID).val(); 
        var child_price = $('#child_price' + dataID).val(); 
        var addchild_price = $('#addchild_price' + dataID).val(); 
        if (Traveling == '') {
            swal(
                    {
                        title: '	Please enter Traveling date !',
                        confirmButtonClass: 'btn btn-confirm mt-2',
                        type: 'warning'
                    }
            );
        } else {
            swal({
                title: 'Edit data?',
                type: 'warning',
                showCancelButton: true,
                confirmButtonClass: 'btn btn-confirm mt-2',
                cancelButtonClass: 'btn btn-cancel ml-2 mt-2',
                confirmButtonText: 'Edit data'
            }).then(function () {
                $.post('<?php echo base_url('PackageCMS/updateThis1') ?>', {Traveling: Traveling,Total:Total,adult_price:adult_price, aloneadult_price:aloneadult_price,child_price:child_price,addchild_price:addchild_price,currentID: dataID}, function (data) {
                    if (data > 0) {
                        swal({
                            title: 'Edit data successfully.',
                            type: 'success',
                            confirmButtonClass: 'btn btn-confirm mt-2'
                        })
                        setTimeout(function () {
                            window.location.href = "<?php echo base_url('PackageCMS/packageAddLocal/') ?>" + packageID;}, 1000);
                    } else {
                        swal({
                            title: 'Can not be edited!',
                            type: 'warning',
                            confirmButtonClass: 'btn btn-confirm mt-2'

                        })
                    }
                })
            });
        }
    }
     //----------------------
	function delete_data(dataID,table,packageID){  
		swal({
           title: 'Delete ?',
           //text: "You won't be able to revert this!",
           type: 'warning',
           showCancelButton: true,
           confirmButtonClass: 'btn btn-confirm mt-2',
           cancelButtonClass: 'btn btn-cancel ml-2 mt-2',
           confirmButtonText: 'Delete' 
        }).then(function () {
		   $.post('<?php echo base_url('PackageCMS/deleteData')?>' , { dataID : dataID , table : table }, 
			function(data){
				if(data==1){ 
                	swal({
                        title: 'Data was deleted successfully.',
                        //text: "Your file has been deleted",
                        type: 'success',
                        confirmButtonClass: 'btn btn-confirm mt-2'
                    });
                   setTimeout(function () {
                            window.location.href = "<?php echo base_url('PackageCMS/packageAddLocal/') ?>" + packageID;}, 1000);
				}else{
					swal({
						title: 'Cannot delete data!',
						//text: "You won't be able to revert this!",
						type: 'warning',
						confirmButtonClass: 'btn btn-confirm mt-2'
					})
				}
			})
		})
	} 
                        //==================================
    function minpersonx(changeValue) {
    $('#maxperson').val(changeValue);
    }
    function ADDyoutube(){
             
        var num = $('.youtube3').length;
        num = num + 1;
        $('#linkyoutube_a').append("<br><input name='youtube[]' type='text' id='inputyoutube"+num+"' class='form-control form-control-sm youtube3' value=''>");
        
       
    
        }
                           //----------------------
	function deleteyoutube(dataID,table){  
            	var currentID = $('#currentID').val();
       swal({
                title: 'Delete ?',
                text: "Please confirm the delete of the data. !",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes',
                cancelButtonText: 'Cancel',
                confirmButtonClass: 'btn btn-success mt-2',
                cancelButtonClass: 'btn btn-danger ml-2 mt-2',
                buttonsStyling: false
            }).then(function () {
		   		$.post('<?php echo base_url('PackageCMS/deleteyoutube')?>', { dataID : dataID , table : table }, function(data){  
					console.log(data);
					   if(data=='1'){
						     swal({
								title: 'Deleted !',
								text: "Data has been deleted successfully.",
								type: 'success',
								confirmButtonClass: 'btn btn-confirm mt-2'   
							}) 
						  setTimeout(function () {
                        window.location.href = "<?php echo base_url('PackageCMS/packageAddLocal/') ?>"+currentID ;
                    }, 1000);
						   //------ images RowImg   file RowFile
					   }else{
						   swal({
							title: 'Error',
							text: "Cannot delete data",
							type: 'error',
							confirmButtonClass: 'btn btn-confirm mt-2'
                    		})
					   }
				});
               
            }, function (dismiss) {
                // dismiss can be 'cancel', 'overlay',
                // 'close', and 'timer'
                if (dismiss === 'cancel') {
                    swal({
                        title: 'Cancelled',
                        text: "You have canceled the data deletion.",
                        type: 'error',
                        confirmButtonClass: 'btn btn-confirm mt-2'
                    })
                }
            })

	} 
        //-----------------------
	function  loadImagespack(ProID){
		$.post('<?php echo base_url('PackageCMS/loadImgpack')?>' , { ProID : ProID }, function(data){
			$('#showImagepack').empty();
			$('#showImagepack').html(data);
			
		})
		
	}
        	function imgDelete(DataID , FileName){
		var currentID = $('#currentID').val();
       swal({
                title: 'Delete ?',
                text: "Please confirm the delete of the data. !",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes',
                cancelButtonText: 'Cancel',
                confirmButtonClass: 'btn btn-success mt-2',
                cancelButtonClass: 'btn btn-danger ml-2 mt-2',
                buttonsStyling: false
            }).then(function () {
		   		$.post('<?php echo base_url('PackageCMS/deletecateimg')?>', { DataID : DataID ,  FileName : FileName }, function(data){  
					console.log(data);
					   if(data=='1'){
						     swal({
								title: 'Deleted !',
								text: "Data has been deleted successfully.",
								type: 'success',
								confirmButtonClass: 'btn btn-confirm mt-2'   
							}) 
 setTimeout(function(){ window.location.href = "<?php echo base_url('PackageCMS/packageAddLocal/')?>"+currentID; }, 1000);
						   //------ images RowImg   file RowFile
					   }else{
						   swal({
							title: 'Error',
							text: "Cannot delete data",
							type: 'error',
							confirmButtonClass: 'btn btn-confirm mt-2'
                    		})
					   }
				});
               
            }, function (dismiss) {
                // dismiss can be 'cancel', 'overlay',
                // 'close', and 'timer'
                if (dismiss === 'cancel') {
                    swal({
                        title: 'Cancelled',
                        text: "You have canceled the data deletion.",
                        type: 'error',
                        confirmButtonClass: 'btn btn-confirm mt-2'
                    })
                }
            })

	} 
    

</script>	
</body>
</html>
