/* Created originally by jankoatwarpspeed.com */
(function($) {
    $.fn.formToWizard = function(options) {
        options = $.extend({  
            submitButton: "",
						validate:false //Added new option
        }, options); 
        
        var element = this;

        var steps = $(element).find("fieldset");
        var count = steps.size();
        var submmitButtonName = "#" + options.submitButton;
        $(submmitButtonName).hide();

				//Setup validation if there are validation settings
				if(options.validationSettings  != undefined){
					$(element).validate(options.validationSettings);
					options.validate=true;
				}

        // 2
        $(element).before("<ul id='steps'></ul>");

        steps.each(function(i) {
            $(this).wrap("<div id='step" + i + "'></div>");
            $(this).append("<p id='step" + i + "commands'></p>");

            // 2
            var name = $(this).find("legend").html();
            $("#steps").append("<li id='stepDesc" + i + "'>Step " + (i + 1) + "<span>" + name + "</span></li>");

            if (i == 0) {
                createNextButton(i);
                selectStep(i);
            }
            else if (i == count - 1) {
                $("#step" + i).hide();
                createPrevButton(i);
            }
            else {
                $("#step" + i).hide();
                createPrevButton(i);
                createNextButton(i);
            }
        });

        function createPrevButton(i) {
            var stepName = "step" + i;
            $("#" + stepName + "commands").append("<a href='#' id='" + stepName + "Prev' class='prev'>< Back</a>");

            $("#" + stepName + "Prev").bind("click", function(e) {
                $("#" + stepName).hide();
                $("#step" + (i - 1)).show();
                $(submmitButtonName).hide();
                selectStep(i - 1);
            });
        }

        function createNextButton(i) {
            var stepName = "step" + i;
            $("#" + stepName + "commands").append("<a href='#' id='" + stepName + "Next' class='next'>Next ></a>");

            $("#" + stepName + "Next").bind("click", function(e) {
								var permitted=true;
								if (options.validate){
									var fieldset = $("#" + stepName + "Next").parents("fieldset");
									//Get all inputs in this step
									var fieldsetElements=getFormElementFromFieldset(fieldset);
									//Call validation
									$(element).valid();
									//Get all invalid elements 
									var invalidElements = $(element).validate().invalidElements();
									//Form may be invalid, but if none of the invalid elements are in the fieldset allow Next
									permitted=noMatchesExist(fieldsetElements, invalidElements)

								}
								if (permitted){
                       $(element).validate().resetForm();
									$("#" + stepName).hide();
	                $("#step" + (i + 1)).show();
	                if (i + 2 == count)
	                    $(submmitButtonName).show();
	                selectStep(i + 1);
								}
                
            });
        }

        function selectStep(i) {
            $("#steps li").removeClass("current");
            $("#stepDesc" + i).addClass("current");
        }

				//Two new functions added
				function getFormElementFromFieldset(f){
					var tagNames = ['input', 'select', 'textarea'];
					var elements = [];

					$.each(tagNames, function(i, item) {    
					        $.each($(f).find(item), function (j, element){
					            elements.push(element);
					        });

					    });
					return  elements
				}

				function noMatchesExist(x, y){
				    var match=false
				    $.each(x, function(i, v){
			        $.each(y, function(j, w){
			             if (v==w){
		                 match=true;
		                 return false;
			             }
			        });
		          if (match){
		              return false;
		          }
				    });
				    return !match;
				}

    }
})(jQuery); 