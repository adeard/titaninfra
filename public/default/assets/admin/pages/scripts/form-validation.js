var FormValidation = function () {

    // basic validation
	var clear_form_elements = function(ele) 
	{
        $(ele).find(':input').each(function() {
            switch(this.type) {
                case 'password':
                case 'select-multiple':
                case 'select-one':
                case 'text':
                case 'textarea':
                    $(this).val('');
                    break;
                case 'checkbox':
                    this.checked = false;
            }
        });
    }
	
	var handleSubmitForm = function() 
	{
		var SubmitForm = $('.SubmitForm');
		var error1 = $('.alert-danger', SubmitForm);
		var success1 = $('.alert-success', SubmitForm);
		
		SubmitForm.on('submit', function() {
			for(var instanceName in CKEDITOR.instances) {
				CKEDITOR.instances[instanceName].updateElement();
			}
		})
			
		SubmitForm.validate({
			errorElement: 'span',
			errorClass: 'help-block help-block-error',
			focusInvalid: false,
			ignore: "",
			messages: {
				select_multi: {
					maxlength: jQuery.validator.format("Max {0} items allowed for selection"),
					minlength: jQuery.validator.format("At least {0} items must be selected")
				}
			},
			rules: {
				name: {
					minlength: 2,
					required: true
				},
				email: {
					required: true,
					email: true
				},
				url: {
					required: true,
					url: true
				},
				number: {
					required: true,
					number: true
				},
				digits: {
					required: true,
					digits: true
				},
				creditcard: {
					required: true,
					creditcard: true
				},
				occupation: {
					minlength: 5,
				},
				select: {
					required: true
				},
				select_multi: {
					required: true,
					minlength: 1,
					maxlength: 3
				},
				membership: {
					required: true
				},
				service: {
					required: true,
					minlength: 2
				},
				editor1: {
					required: true
				},
				editor2: {
					required: true
				}
			},
			
			messages: { // custom messages for radio buttons and checkboxes
				membership: {
					required: "Please select a Membership type"
				},
				service: {
					required: "Please select  at least 2 types of Service",
					minlength: jQuery.validator.format("Please select  at least {0} types of Service")
				}
			},
			
			errorPlacement: function (error, element) { // render error placement for each input type
				if (element.parent(".input-group").size() > 0) {
					error.insertAfter(element.parent(".input-group"));
				} else if (element.attr("data-error-container")) { 
					error.appendTo(element.attr("data-error-container"));
				} else if (element.parents('.radio-list').size() > 0) { 
					error.appendTo(element.parents('.radio-list').attr("data-error-container"));
				} else if (element.parents('.radio-inline').size() > 0) { 
					error.appendTo(element.parents('.radio-inline').attr("data-error-container"));
				} else if (element.parents('.checkbox-list').size() > 0) {
					error.appendTo(element.parents('.checkbox-list').attr("data-error-container"));
				} else if (element.parents('.checkbox-inline').size() > 0) { 
					error.appendTo(element.parents('.checkbox-inline').attr("data-error-container"));
				} else {
					error.insertAfter(element); // for other inputs, just perform default behavior
				}
			},
	
			invalidHandler: function (event, validator) { //display error alert on form submit              
				success1.hide();
				error1.show();
				Metronic.scrollTo(error1, -200);
			},
	
			highlight: function (element) { // hightlight error inputs
				$(element)
					.closest('.form-group').addClass('has-error'); // set error class to the control group
			},
	
			unhighlight: function (element) { // revert the change done by hightlight
				$(element)
					.closest('.form-group').removeClass('has-error'); // set error class to the control group
			},
	
			success: function (label) {
				label.closest('.form-group').removeClass('has-error'); // set success class to the control group
			},
	
			submitHandler: function (form) {
				success1.show();
				error1.hide();

				$.ajax({
					type: "POST",
					url: $(form).attr('action'),
					data: $(form).serialize(),
					dataType: "json",
					success: function(data) {
						if(data.check_valid == "valid"){
							sweetAlert("Success", data.message_info, "success");
							clear_form_elements(form);
						} else {
							sweetAlert("Failed", data.message_info, "error");
						}
					} 
				});
			}
		});
		
    }
	
	var handleEditForm = function() 
	{
		var EditForm = $('.EditForm');
		var error1 = $('.alert-danger', EditForm);
		var success1 = $('.alert-success', EditForm);
		
		EditForm.on('submit', function() {
			for(var instanceName in CKEDITOR.instances) {
				CKEDITOR.instances[instanceName].updateElement();
			}
		})
			
		EditForm.validate({
			errorElement: 'span',
			errorClass: 'help-block help-block-error',
			focusInvalid: false,
			ignore: "",
			messages: {
				select_multi: {
					maxlength: jQuery.validator.format("Max {0} items allowed for selection"),
					minlength: jQuery.validator.format("At least {0} items must be selected")
				}
			},
			rules: {
				name: {
					minlength: 2,
					required: true
				},
				email: {
					required: true,
					email: true
				},
				url: {
					required: true,
					url: true
				},
				number: {
					required: true,
					number: true
				},
				digits: {
					required: true,
					digits: true
				},
				creditcard: {
					required: true,
					creditcard: true
				},
				occupation: {
					minlength: 5,
				},
				select: {
					required: true
				},
				select_multi: {
					required: true,
					minlength: 1,
					maxlength: 3
				},
				membership: {
					required: true
				},
				service: {
					required: true,
					minlength: 2
				},
				editor1: {
					required: true
				},
				editor2: {
					required: true
				}
			},
			
			messages: { // custom messages for radio buttons and checkboxes
				membership: {
					required: "Please select a Membership type"
				},
				service: {
					required: "Please select  at least 2 types of Service",
					minlength: jQuery.validator.format("Please select  at least {0} types of Service")
				}
			},
			
			errorPlacement: function (error, element) { // render error placement for each input type
				if (element.parent(".input-group").size() > 0) {
					error.insertAfter(element.parent(".input-group"));
				} else if (element.attr("data-error-container")) { 
					error.appendTo(element.attr("data-error-container"));
				} else if (element.parents('.radio-list').size() > 0) { 
					error.appendTo(element.parents('.radio-list').attr("data-error-container"));
				} else if (element.parents('.radio-inline').size() > 0) { 
					error.appendTo(element.parents('.radio-inline').attr("data-error-container"));
				} else if (element.parents('.checkbox-list').size() > 0) {
					error.appendTo(element.parents('.checkbox-list').attr("data-error-container"));
				} else if (element.parents('.checkbox-inline').size() > 0) { 
					error.appendTo(element.parents('.checkbox-inline').attr("data-error-container"));
				} else {
					error.insertAfter(element); // for other inputs, just perform default behavior
				}
			},
	
			invalidHandler: function (event, validator) { //display error alert on form submit              
				success1.hide();
				error1.show();
				Metronic.scrollTo(error1, -200);
			},
	
			highlight: function (element) { // hightlight error inputs
				$(element)
					.closest('.form-group').addClass('has-error'); // set error class to the control group
			},
	
			unhighlight: function (element) { // revert the change done by hightlight
				$(element)
					.closest('.form-group').removeClass('has-error'); // set error class to the control group
			},
	
			success: function (label) {
				label.closest('.form-group').removeClass('has-error'); // set success class to the control group
			},
	
			submitHandler: function (form) {
				success1.show();
				error1.hide();

				$.ajax({
					type: "POST",
					url: $(form).attr('action'),
					data: $(form).serialize(),
					dataType: "json",
					success: function(data) {
						if(data.check_valid == "valid"){
							sweetAlert("Success", data.message_info, "success");
						} else {
							sweetAlert("Failed", data.message_info, "error");
						}
					} 
				});
			}
		});
		
    }
	
	var handleSubmitFormLoad = function() 
	{
		var SubmitFormLoad = $('.SubmitFormLoad');
		var error1 = $('.alert-danger', SubmitFormLoad);
		var success1 = $('.alert-success', SubmitFormLoad);
		
		SubmitFormLoad.on('submit', function() {
			for(var instanceName in CKEDITOR.instances) {
				CKEDITOR.instances[instanceName].updateElement();
			}
		})
			
		SubmitFormLoad.validate({
			errorElement: 'span',
			errorClass: 'help-block help-block-error',
			focusInvalid: false,
			ignore: "",
			messages: {
				select_multi: {
					maxlength: jQuery.validator.format("Max {0} items allowed for selection"),
					minlength: jQuery.validator.format("At least {0} items must be selected")
				}
			},
			rules: {
				name: {
					minlength: 2,
					required: true
				},
				email: {
					required: true,
					email: true
				},
				url: {
					required: true,
					url: true
				},
				number: {
					required: true,
					number: true
				},
				digits: {
					required: true,
					digits: true
				},
				creditcard: {
					required: true,
					creditcard: true
				},
				occupation: {
					minlength: 5,
				},
				select: {
					required: true
				},
				select_multi: {
					required: true,
					minlength: 1,
					maxlength: 3
				},
				membership: {
					required: true
				},
				service: {
					required: true,
					minlength: 2
				},
				editor1: {
					required: true
				},
				editor2: {
					required: true
				}
			},
			
			messages: { // custom messages for radio buttons and checkboxes
				membership: {
					required: "Please select a Membership type"
				},
				service: {
					required: "Please select  at least 2 types of Service",
					minlength: jQuery.validator.format("Please select  at least {0} types of Service")
				}
			},
			
			errorPlacement: function (error, element) { // render error placement for each input type
				if (element.parent(".input-group").size() > 0) {
					error.insertAfter(element.parent(".input-group"));
				} else if (element.attr("data-error-container")) { 
					error.appendTo(element.attr("data-error-container"));
				} else if (element.parents('.radio-list').size() > 0) { 
					error.appendTo(element.parents('.radio-list').attr("data-error-container"));
				} else if (element.parents('.radio-inline').size() > 0) { 
					error.appendTo(element.parents('.radio-inline').attr("data-error-container"));
				} else if (element.parents('.checkbox-list').size() > 0) {
					error.appendTo(element.parents('.checkbox-list').attr("data-error-container"));
				} else if (element.parents('.checkbox-inline').size() > 0) { 
					error.appendTo(element.parents('.checkbox-inline').attr("data-error-container"));
				} else {
					error.insertAfter(element); // for other inputs, just perform default behavior
				}
			},
	
			invalidHandler: function (event, validator) { //display error alert on form submit              
				success1.hide();
				error1.show();
				Metronic.scrollTo(error1, -200);
			},
	
			highlight: function (element) { // hightlight error inputs
				$(element)
					.closest('.form-group').addClass('has-error'); // set error class to the control group
			},
	
			unhighlight: function (element) { // revert the change done by hightlight
				$(element)
					.closest('.form-group').removeClass('has-error'); // set error class to the control group
			},
	
			success: function (label) {
				label.closest('.form-group').removeClass('has-error'); // set success class to the control group
			},
	
			submitHandler: function (form) {
				success1.show();
				error1.hide();

				$.ajax({
					type: "POST",
					url: $(form).attr('action'),
					data: $(form).serialize(),
					dataType: "json",
					success: function(data) {
						if(data.check_valid == "valid"){
							$(".load-content").load("/akutansi/pendapatan/order/edit/"+data.id);
						} else {
							sweetAlert("Failed", data.message_info, "error");
						}
					} 
				});
			}
		});
		
    }
	
	
	var handleSubmitTableForm = function() 
	{
		var SubmitTableForm = $('.SubmitTableForm');
		var error1 = $('.alert-danger', SubmitTableForm);
		var success1 = $('.alert-success', SubmitTableForm);
		
		SubmitTableForm.on('submit', function() {
			for(var instanceName in CKEDITOR.instances) {
				CKEDITOR.instances[instanceName].updateElement();
			}
		})
			
		SubmitTableForm.validate({
			errorElement: 'span',
			errorClass: 'help-block help-block-error',
			focusInvalid: false,
			ignore: "",
			messages: {
				select_multi: {
					maxlength: jQuery.validator.format("Max {0} items allowed for selection"),
					minlength: jQuery.validator.format("At least {0} items must be selected")
				}
			},
			rules: {
				name: {
					minlength: 2,
					required: true
				},
				email: {
					required: true,
					email: true
				},
				url: {
					required: true,
					url: true
				},
				number: {
					required: true,
					number: true
				},
				digits: {
					required: true,
					digits: true
				},
				creditcard: {
					required: true,
					creditcard: true
				},
				occupation: {
					minlength: 5,
				},
				select: {
					required: true
				},
				select_multi: {
					required: true,
					minlength: 1,
					maxlength: 3
				},
				membership: {
					required: true
				},
				service: {
					required: true,
					minlength: 2
				},
				editor1: {
					required: true
				},
				editor2: {
					required: true
				}
			},
			
			messages: { // custom messages for radio buttons and checkboxes
				membership: {
					required: "Please select a Membership type"
				},
				service: {
					required: "Please select  at least 2 types of Service",
					minlength: jQuery.validator.format("Please select  at least {0} types of Service")
				}
			},
			
			errorPlacement: function (error, element) { // render error placement for each input type
				if (element.parent(".input-group").size() > 0) {
					error.insertAfter(element.parent(".input-group"));
				} else if (element.attr("data-error-container")) { 
					error.appendTo(element.attr("data-error-container"));
				} else if (element.parents('.radio-list').size() > 0) { 
					error.appendTo(element.parents('.radio-list').attr("data-error-container"));
				} else if (element.parents('.radio-inline').size() > 0) { 
					error.appendTo(element.parents('.radio-inline').attr("data-error-container"));
				} else if (element.parents('.checkbox-list').size() > 0) {
					error.appendTo(element.parents('.checkbox-list').attr("data-error-container"));
				} else if (element.parents('.checkbox-inline').size() > 0) { 
					error.appendTo(element.parents('.checkbox-inline').attr("data-error-container"));
				} else {
					error.insertAfter(element); // for other inputs, just perform default behavior
				}
			},
	
			invalidHandler: function (event, validator) { //display error alert on form submit              
				success1.hide();
				error1.show();
				Metronic.scrollTo(error1, -200);
			},
	
			highlight: function (element) { // hightlight error inputs
				$(element)
					.closest('.form-group').addClass('has-error'); // set error class to the control group
			},
	
			unhighlight: function (element) { // revert the change done by hightlight
				$(element)
					.closest('.form-group').removeClass('has-error'); // set error class to the control group
			},
	
			success: function (label) {
				label.closest('.form-group').removeClass('has-error'); // set success class to the control group
			},
	
			submitHandler: function (form) {
				success1.show();
				error1.hide();

				$.ajax({
					type: "POST",
					url: $(form).attr('action'),
					data: $(form).serialize(),
					dataType: "json",
					success: function(data) {
						if(data.check_valid == "valid"){
							sweetAlert("Success", data.message_info, "success");
							clear_form_elements(form);
							if($.fn.dataTable)
							{
								var oTable = $.fn.dataTable.fnTables(true);
								$(oTable).dataTable().fnReloadAjax();
							}
						} else {
							sweetAlert("Failed", data.message_info, "error");
						}
					} 
				});
			}
		});
		
    }
	
	var handleEditTableForm = function() 
	{
		var EditTableForm = $('.EditTableForm');
		var error1 = $('.alert-danger', EditTableForm);
		var success1 = $('.alert-success', EditTableForm);
		
		EditTableForm.on('submit', function() {
			for(var instanceName in CKEDITOR.instances) {
				CKEDITOR.instances[instanceName].updateElement();
			}
		})
			
		EditTableForm.validate({
			errorElement: 'span',
			errorClass: 'help-block help-block-error',
			focusInvalid: false,
			ignore: "",
			messages: {
				select_multi: {
					maxlength: jQuery.validator.format("Max {0} items allowed for selection"),
					minlength: jQuery.validator.format("At least {0} items must be selected")
				}
			},
			rules: {
				name: {
					minlength: 2,
					required: true
				},
				email: {
					required: true,
					email: true
				},
				url: {
					required: true,
					url: true
				},
				number: {
					required: true,
					number: true
				},
				digits: {
					required: true,
					digits: true
				},
				creditcard: {
					required: true,
					creditcard: true
				},
				occupation: {
					minlength: 5,
				},
				select: {
					required: true
				},
				select_multi: {
					required: true,
					minlength: 1,
					maxlength: 3
				},
				membership: {
					required: true
				},
				service: {
					required: true,
					minlength: 2
				},
				editor1: {
					required: true
				},
				editor2: {
					required: true
				}
			},
			
			messages: { // custom messages for radio buttons and checkboxes
				membership: {
					required: "Please select a Membership type"
				},
				service: {
					required: "Please select  at least 2 types of Service",
					minlength: jQuery.validator.format("Please select  at least {0} types of Service")
				}
			},
			
			errorPlacement: function (error, element) { // render error placement for each input type
				if (element.parent(".input-group").size() > 0) {
					error.insertAfter(element.parent(".input-group"));
				} else if (element.attr("data-error-container")) { 
					error.appendTo(element.attr("data-error-container"));
				} else if (element.parents('.radio-list').size() > 0) { 
					error.appendTo(element.parents('.radio-list').attr("data-error-container"));
				} else if (element.parents('.radio-inline').size() > 0) { 
					error.appendTo(element.parents('.radio-inline').attr("data-error-container"));
				} else if (element.parents('.checkbox-list').size() > 0) {
					error.appendTo(element.parents('.checkbox-list').attr("data-error-container"));
				} else if (element.parents('.checkbox-inline').size() > 0) { 
					error.appendTo(element.parents('.checkbox-inline').attr("data-error-container"));
				} else {
					error.insertAfter(element); // for other inputs, just perform default behavior
				}
			},
	
			invalidHandler: function (event, validator) { //display error alert on form submit              
				success1.hide();
				error1.show();
				Metronic.scrollTo(error1, -200);
			},
	
			highlight: function (element) { // hightlight error inputs
				$(element)
					.closest('.form-group').addClass('has-error'); // set error class to the control group
			},
	
			unhighlight: function (element) { // revert the change done by hightlight
				$(element)
					.closest('.form-group').removeClass('has-error'); // set error class to the control group
			},
	
			success: function (label) {
				label.closest('.form-group').removeClass('has-error'); // set success class to the control group
			},
	
			submitHandler: function (form) {
				success1.show();
				error1.hide();

				$.ajax({
					type: "POST",
					url: $(form).attr('action'),
					data: $(form).serialize(),
					dataType: "json",
					success: function(data) {
						if(data.check_valid == "valid"){
							sweetAlert("Success", data.message_info, "success");
						} else {
							sweetAlert("Failed", data.message_info, "error");
						}
					} 
				});
			}
		});
		
    }
	
	var handleProfileForm = function() 
	{
		var ProfileForm = $('.ProfileForm');
		var error1 = $('.alert-danger', ProfileForm);
		var success1 = $('.alert-success', ProfileForm);
		
		ProfileForm.on('submit', function() {
			for(var instanceName in CKEDITOR.instances) {
				CKEDITOR.instances[instanceName].updateElement();
			}
		})
			
		ProfileForm.validate({
			errorElement: 'span',
			errorClass: 'help-block help-block-error',
			focusInvalid: false,
			ignore: "",
			messages: {
				select_multi: {
					maxlength: jQuery.validator.format("Max {0} items allowed for selection"),
					minlength: jQuery.validator.format("At least {0} items must be selected")
				}
			},
			rules: {
				name: {
					minlength: 2,
					required: true
				},
				email: {
					required: true,
					email: true
				},
				url: {
					required: true,
					url: true
				},
				number: {
					required: true,
					number: true
				},
				digits: {
					required: true,
					digits: true
				},
				creditcard: {
					required: true,
					creditcard: true
				},
				occupation: {
					minlength: 5,
				},
				select: {
					required: true
				},
				select_multi: {
					required: true,
					minlength: 1,
					maxlength: 3
				},
				membership: {
					required: true
				},
				service: {
					required: true,
					minlength: 2
				},
				editor1: {
					required: true
				},
				editor2: {
					required: true
				}
			},
			
			messages: { // custom messages for radio buttons and checkboxes
				membership: {
					required: "Please select a Membership type"
				},
				service: {
					required: "Please select  at least 2 types of Service",
					minlength: jQuery.validator.format("Please select  at least {0} types of Service")
				}
			},
			
			errorPlacement: function (error, element) { // render error placement for each input type
				if (element.parent(".input-group").size() > 0) {
					error.insertAfter(element.parent(".input-group"));
				} else if (element.attr("data-error-container")) { 
					error.appendTo(element.attr("data-error-container"));
				} else if (element.parents('.radio-list').size() > 0) { 
					error.appendTo(element.parents('.radio-list').attr("data-error-container"));
				} else if (element.parents('.radio-inline').size() > 0) { 
					error.appendTo(element.parents('.radio-inline').attr("data-error-container"));
				} else if (element.parents('.checkbox-list').size() > 0) {
					error.appendTo(element.parents('.checkbox-list').attr("data-error-container"));
				} else if (element.parents('.checkbox-inline').size() > 0) { 
					error.appendTo(element.parents('.checkbox-inline').attr("data-error-container"));
				} else {
					error.insertAfter(element); // for other inputs, just perform default behavior
				}
			},
	
			invalidHandler: function (event, validator) { //display error alert on form submit              
				success1.hide();
				error1.show();
				Metronic.scrollTo(error1, -200);
			},
	
			highlight: function (element) { // hightlight error inputs
				$(element)
					.closest('.form-group').addClass('has-error'); // set error class to the control group
			},
	
			unhighlight: function (element) { // revert the change done by hightlight
				$(element)
					.closest('.form-group').removeClass('has-error'); // set error class to the control group
			},
	
			success: function (label) {
				label.closest('.form-group').removeClass('has-error'); // set success class to the control group
			},
	
			submitHandler: function (form) {
				success1.show();
				error1.hide();

				$.ajax({
					type: "POST",
					url: $(form).attr('action'),
					data: $(form).serialize(),
					dataType: "json",
					success: function(data) {
						if(data.check_valid == "valid"){
							sweetAlert({
								title: "Success!",
								text: data.message_info,
								type: "success"
							},
							
							function () {
								window.location.href = base_url;
							});
							
						} else {
							sweetAlert("Failed", data.message_info, "error");
						}
					} 
				});
			}
		});
		
    }
	

    var handleWysihtml5 = function() {
        if (!jQuery().wysihtml5) {
            
            return;
        }

        if ($('.wysihtml5').size() > 0) {
            $('.wysihtml5').wysihtml5({
                "stylesheets": [base_url + "public/default/assets/global/plugins/bootstrap-wysihtml5/wysiwyg-color.css"]
            });
        }
    }
	
	/**
	var Script = function () {	
	}
	*/
	
    return {
        //main function to initiate the module
        init: function () {

            handleWysihtml5();
            handleSubmitForm();
			handleEditForm();
			handleSubmitFormLoad();
			handleSubmitTableForm();
			handleEditTableForm();
			handleProfileForm();
			
			$('.group-checkable').change(function () {
				var set = jQuery(this).attr("data-set");
				var checked = jQuery(this).is(":checked");
				jQuery(set).each(function () {
					if (checked) {
						$(this).attr("checked", true);
					} else {
						$(this).attr("checked", false);
					}
				});
				jQuery.uniform.update(set);
			});
			
        }

    };

}();