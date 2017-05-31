var Custom = function () 
{
    var Delete = function(targetUrl, parent, data) 
	{
		swal({
			title: "Item ini akan di hapus",
		  	text: "Apakah Anda Yakin ?",
		  	type: "error",
		  	showCancelButton: true,
		  	confirmButtonColor: "#DD6B55",
		  	confirmButtonText: "Yes",
		  	closeOnConfirm: false
		},
		function(){
		  	swal("Hapus !", "Berhasil dihapus.", "success");
			$.ajax({
				type: "GET",
				url: targetUrl,
				data: data,
				success: function() 
				{
					parent.fadeOut(300,function() 
					{
						parent.remove();
					});
				},
				error: function(xhr, ajaxOptions, thrownError)
				{
					sweetAlert("error");
				}
			});
		
		});
    }
	
	var Approve = function(targetUrl, parent, data) 
	{
		swal({
			title: "Permohonan diterima",
		  	text: "Apakah Anda Yakin ?",
		  	type: "success",
		  	showCancelButton: true,
		  	confirmButtonColor: "#DD6B55",
		  	confirmButtonText: "Yes",
		  	closeOnConfirm: false
		},
		function(){
		  	swal("Permohonan !", "Berhasil diperbaharui.", "success");
			$.ajax({
				type: "GET",
				url: targetUrl,
				data: data,
				success: function() 
				{
					if($.fn.dataTable)
    				{
        				var oTable = $.fn.dataTable.fnTables(true);
						$(oTable).dataTable().fnReloadAjax();
    				}
				},
				error: function(xhr, ajaxOptions, thrownError)
				{
					sweetAlert("error");
				}
			});
		
		});
    }
	
	var Unapprove = function(targetUrl, parent, data) 
	{
		swal({
			title: "Permohonan ditolak",
		  	text: "Apakah Anda Yakin ?",
		  	type: "error",
		  	showCancelButton: true,
		  	confirmButtonColor: "#DD6B55",
		  	confirmButtonText: "Yes",
		  	closeOnConfirm: false
		},
		function(){
		  	swal("Permohonan !", "Berhasil diperbaharui.", "success");
			$.ajax({
				type: "GET",
				url: targetUrl,
				data: data,
				success: function() 
				{
					if($.fn.dataTable)
    				{
        				var oTable = $.fn.dataTable.fnTables(true);
						$(oTable).dataTable().fnReloadAjax();
    				}
				},
				error: function(xhr, ajaxOptions, thrownError)
				{
					sweetAlert("error");
				}
			});
		
		});
    }
	
	var DeleteAll = function(targetUrl, data) 
	{
		swal({
			title: "Item ini akan di hapus",
		  	text: "Apakah Anda Yakin ?",
		  	type: "error",
		  	showCancelButton: true,
		  	confirmButtonColor: "#DD6B55",
		  	confirmButtonText: "Yes",
		  	closeOnConfirm: false
		},
		function(){
		  	swal("Hapus !", "Berhasil dihapus.", "success");
			$.ajax({
				type: "POST",
				url: targetUrl,
				data: data,
				success: function() 
				{
					if($.fn.dataTable)
    				{
        				var oTable = $.fn.dataTable.fnTables(true);
						$(oTable).dataTable().fnReloadAjax();
    				}
				},
				error: function(xhr, ajaxOptions, thrownError)
				{
					sweetAlert("error");
				}
			});
		
		});
    }
	
	var SendAll = function(targetUrl, data) 
	{
		swal({
			title: "Item ini akan di kirim",
		  	text: "Apakah Anda Yakin ?",
		  	type: "error",
		  	showCancelButton: true,
		  	confirmButtonColor: "#DD6B55",
		  	confirmButtonText: "Yes",
		  	closeOnConfirm: false
		},
		function(){
		  	swal("Kirim !", "Berhasil dikirim.", "success");
			$.ajax({
				type: "POST",
				url: targetUrl,
				data: data,
				dataType: "json",
				success: function(data) 
				{
					if(data.check_valid == "valid"){
						sweetAlert("Success", data.message_info, "success");
					} else {
						sweetAlert("Failed", data.message_info, "error");
					}
					
					if($.fn.dataTable)
    				{
        				var oTable = $.fn.dataTable.fnTables(true);
						$(oTable).dataTable().fnReloadAjax();
    				}
				},
				error: function(xhr, ajaxOptions, thrownError)
				{
					sweetAlert("error");
				}
			});
		
		});
    }

    return {
        init: function () {
			$(".delete").live('click', function (e) {
				e.preventDefault();
				var targetUrl 	= $(this).attr("data-href")+"?remove=1";
				var parent 		= $(this).closest('tr'); 
				var data 		= $(this).serialize();
				
                Delete(targetUrl, parent, data);
            }); 
			
			$(".approve").live('click', function (e) {
				e.preventDefault();
				var targetUrl 	= $(this).attr("data-href")+"?approve=yes";
				var data 		= $(this).serialize();
				
                Approve(targetUrl, parent, data);
            }); 
			
			$(".unapprove").live('click', function (e) {
				e.preventDefault();
				var targetUrl 	= $(this).attr("data-href")+"?approve=no"; 
				var data 		= $(this).serialize();
				
                Unapprove(targetUrl, parent, data);
            }); 
			
			$('.DeleteAll').live('submit', function(e) {
				e.preventDefault();
				
				var data 		= $(this).serialize();
				var targetUrl 	= $(this).attr('action')+"?remove=1";
				
                DeleteAll(targetUrl, data);
            }); 
			
			$('.SendAll').live('submit', function(e) {
				e.preventDefault();
				
				var data 		= $(this).serialize();
				var targetUrl 	= $(this).attr('action');
				
                SendAll(targetUrl, data);
            }); 
        }

    };

}();
