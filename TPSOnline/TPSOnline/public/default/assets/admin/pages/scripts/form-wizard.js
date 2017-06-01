var FormWizard = function () {

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
                case 'radio':
                    this.checked = false;
            }
        });
    }
	
    return {
        //main function to initiate the module
        init: function () {
            if (!jQuery().bootstrapWizard) {
                return;
            }
			
            function format(state) {
                if (!state.id) return state.text; // optgroup
                return "<img class='flag' src='../../assets/global/img/flags/" + state.id.toLowerCase() + ".png'/>&nbsp;&nbsp;" + state.text;
            }

            var form = $('.SubmitFormWizard');
            var error = $('.alert-danger', form);
            var success = $('.alert-success', form);

            form.validate({
                doNotHideMessage: true, //this option enables to show the error/success messages on tab switch.
                errorElement: 'span', //default input error message container
                errorClass: 'help-block help-block-error', // default input error message class
                focusInvalid: false, // do not focus the last invalid input
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
                    success.hide();
                    error.show();
                    Metronic.scrollTo(error, -200);
                },

                highlight: function (element) { // hightlight error inputs
                    $(element)
                        .closest('.form-group').removeClass('has-success').addClass('has-error'); // set error class to the control group
                },

                unhighlight: function (element) { // revert the change done by hightlight
                    $(element)
                        .closest('.form-group').removeClass('has-error'); // set error class to the control group
                },

                success: function (label) {
                    label.closest('.form-group').removeClass('has-error'); // set success class to the control group
                },

                submitHandler: function (form) {
                    success.show();
                    error.hide();
                    $.ajax({
						type: "POST",
						url: $(form).attr('action'),
						data: $(form).serialize(),
						dataType: "json",
						success: function(data) {
							if(data.check_valid == "valid"){
								$('#form_wizard_1').bootstrapWizard('currentIndex');
								$('#form_wizard_1').find("a[href*='tab1']").trigger('click');
								sweetAlert("Success", data.message_info, "success");
								if(data.option == 'add'){
									clear_form_elements(form);
									$("#fileupload").empty();
									$("#files").empty();
								}
								
							} else {
								sweetAlert("Failed", data.message_info, "error");
							}
						} 
					});
                }

            });

            var displayConfirm = function() {
                $('#tab4 .form-control-static', form).each(function(){
                    var input = $('[name="'+$(this).attr("data-display")+'"]', form);
                    if (input.is(":radio")) {
                        input = $('[name="'+$(this).attr("data-display")+'"]:checked', form);
                    }
                    if (input.is(":text") || input.is("textarea")) {
                        $(this).html(input.val());
                    } else if (input.is("select")) {
                        $(this).html(input.find('option:selected').text());
                    } else if (input.is(":radio") && input.is(":checked")) {
                        $(this).html(input.attr("data-title"));
                    }
                });
            }

            var handleTitle = function(tab, navigation, index) {
                var total = navigation.find('li').length;
                var current = index + 1;
                // set wizard title
                $('.step-title', $('#form_wizard_1')).text('Step ' + (index + 1) + ' of ' + total);
                // set done steps
                jQuery('li', $('#form_wizard_1')).removeClass("done");
                var li_list = navigation.find('li');
                for (var i = 0; i < index; i++) {
                    jQuery(li_list[i]).addClass("done");
                }

                if (current == 1) {
                    $('#form_wizard_1').find('.button-previous').hide();
                } else {
                    $('#form_wizard_1').find('.button-previous').show();
                }

                if (current >= total) {
                    $('#form_wizard_1').find('.button-next').hide();
                    $('#form_wizard_1').find('.button-submit').show();
                    displayConfirm();
                } else {
                    $('#form_wizard_1').find('.button-next').show();
                    $('#form_wizard_1').find('.button-submit').hide();
                }
                Metronic.scrollTo($('.page-title'));
            }

            // default form wizard
            $('#form_wizard_1').bootstrapWizard({
                'nextSelector': '.button-next',
                'previousSelector': '.button-previous',
                onTabClick: function (tab, navigation, index, clickedIndex) {
                    success.hide();
                    error.hide();
                    if (form.valid() == false) {
                        return false;
                    }
                    handleTitle(tab, navigation, clickedIndex);
                },
                onNext: function (tab, navigation, index) {
                    success.hide();
                    error.hide();

                    if (form.valid() == false) {
                        return false;
                    }

                    handleTitle(tab, navigation, index);
                },
                onPrevious: function (tab, navigation, index) {
                    success.hide();
                    error.hide();

                    handleTitle(tab, navigation, index);
                },
                onTabShow: function (tab, navigation, index) {
                    var total = navigation.find('li').length;
                    var current = index + 1;
                    var $percent = (current / total) * 100;
                    $('#form_wizard_1').find('.progress-bar').css({
                        width: $percent + '%'
                    });
                }
            });

            $('#form_wizard_1').find('.button-previous').hide();
			$('#form_wizard_1').find('.button-submit').hide();
            
        }

    };

}();