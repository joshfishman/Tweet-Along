 <style type="text/css">
       
        #header { text-align:center; border-bottom:solid 1px #b2b3b5; margin: 0 0 20px 0; }
        legend { font-size:18px; margin:0px; padding:10px 0px; color:#b0232a; font-weight:bold;}
        .prev, .next { background-color:#b0232a; padding:5px 10px; color:#fff; text-decoration:none;}
        .prev:hover, .next:hover { background-color:#000; text-decoration:none;}
        .prev { float:left;}
        .next { float:right;}
        #steps { list-style:none; width:100%; overflow:hidden; margin:0px; padding:0px;}
        #steps li {font-size:24px; float:left; padding:10px; color:#b0b1b3;}
        #steps li span {font-size:11px; display:block;}
        #steps li.current { color:#000;}
        #makeWizard { background-color:#b0232a; color:#fff; padding:5px 10px; text-decoration:none; font-size:18px;}
        #makeWizard:hover { background-color:#000;}
		input.error { border: 1px solid red; }
		label.error {
			background: url('http://dev.jquery.com/view/trunk/plugins/validate/demo/images/unchecked.gif') no-repeat;
			padding-left: 16px;
			margin-left: .3em;
			color: red;
		}
		div.error {
			background: url('http://dev.jquery.com/view/trunk/plugins/validate/demo/images/unchecked.gif') no-repeat;
			margin-left: .3em;
			color: red;
		}
		label.valid {
			background: url('http://dev.jquery.com/view/trunk/plugins/validate/demo/images/checked.gif') no-repeat;
			display: block;
			width: 16px;
			height: 16px;
			color: green;
		}
		div.valid {
			background: url('http://dev.jquery.com/view/trunk/plugins/validate/demo/images/checked.gif') no-repeat;
			width: 16px;
			height: 16px;
			color: green;
		}
    </style>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.2.min.js"><\/script>')</script>
	<script type="text/javascript" src="js/libs/jquery-ui-1.8.22.custom.min.js"></script>
	<script type="text/javascript" src="js/libs/jquery.validate.js"></script>
	<link type="text/css" href="css/jquery-ui-1.8.22.custom.css" rel="stylesheet" />
	
	<link type="text/css" href="css/jquery.ui.timepicker.css" rel="stylesheet" />
	<script type="text/javascript" src="js/libs/jquery.ui.timepicker.js"></script>
	<script type="text/javascript" src="js/formToWizard.js"></script>
	
	<script>
	$(function() {
		$( "#startdate" ).datepicker({ atPosition: 'right center',});
	});
	$(function() {
		$( "#starttime" ).timepicker({showPeriod: true, showCloseButton: true,  myPosition: 'left top', atPosition: 'left bottom',});
	});
	</script>

  

 <form id="SignupForm" class="form-vertical" action="submitevent.php" method="post" enctype="multipart/form-data">
 
        <fieldset>



            <legend>Create a Tweet Along</legend>
           
			<label >What will your Tweet Along be called?</label>
		
				<input id="name" type="text" class="span3" name="name" />
		
			<label>Hashtag</label>
			
            <div class="input-prepend">
			
            <span class="add-on">#</span>
            <input id="hashtag" name="hashtag" type="text" class="span2"/>
			<div class="demo">

				<label>Start Date</label><p><input type="text" class="span3" id="startdate" name="startdate"></p>
				
			</div><!-- End demo -->
			<label>Start Time</label><p><input type="text" class="span3" id="starttime" name="starttime"></p>
            <label>Featured Photo</label>
           <input type="file" name="photo" id="photo">

	
            
           <label>Description</label>
			</div>
            <textarea id="description" type="text" class="span3" name="description" ></textarea>
            <label> Any special guests you would like to include?</label>

            <input id="featured" type="text" name="guests" class="span3">
        </fieldset>
        <fieldset>
            <legend>Invite Friends</legend>
            <label for="CompanyName">Company Name</label>
            <input id="CompanyName" type="text" />
            <label for="Website">Website</label>
            <input id="Website" type="text" />
            <label for="CompanyEmail">CompanyEmail</label>
            <input id="CompanyEmail" type="text" />
        </fieldset>
        
        <p>
            <input id="SaveAccount" value="Submit form" type="submit"/>
        </p>
        </form>

		<script>
	  /* attach a submit handler to the form */
	//  $("#SignupForm").submit(function(event) {
		
		/* stop form from submitting normally */
		//event.preventDefault(); 
			
		/* get some values from elements on the page: */
		/*var $form = $( this ),
			eventname = $form.find( 'input[name="name"]' ).val(),
			tag = $form.find( 'input[name="hashtag"]' ).val(),
			date = $form.find( 'input[name="date"]' ).val(),
			time = $form.find( 'input[name="time"]' ).val(),
			invite = $form.find( 'input[name="guests"]' ).val(),
			descript = $form.find( 'input[name="description"]' ).val(),
			pic = $form.find( 'input[name="photo"]' ).val(),
			
			url = $form.attr( 'action' );

		/* Send the data using post and put the results in a div */
		/*$.post( "submitevent.php", { name: eventname, hashtag: tag, starttime:time, startdate:date,  guests: invite, description: descript, photo:pic},
		  function( data ) {
		  alert(data);
			  var content = $( data ).find( '#content' );
			  $( "#result" ).empty().append( content );
		  }
		);
	  });*/
	</script>
	
	  <script type="text/javascript">

	
	$().ready(function() {
		$("#SignupForm").formToWizard({ submitButton: 'SaveAccount' ,	
			validationSettings:{
			rules: { 
				'name': {required: true},
				'starttime': {required: true},
				'hashtag': {required: true},
				'description': {required: true},
				'startdate': {required: true, date:true},
				'photo': {  accept: "png|jpeg|jpg|gif"}
		
			},
			messages: {
				'name': {required: "Event Name Required"},
				'starttime': {required: "Start Time Required"},
				'startdate': {required: "Start Date Required"},
				'hashtag': {required: "Hashtag Required"},
				'description': {required: "Description Required"},
				'photo': { accept: "File must be JPG, GIF or PNG and less than 1MB"}
			},
			errorElement: "div"

			}			
		});

	});	 
    
  
    </script>