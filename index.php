<!DOCTYPE HTML >
<html>
<head>
<meta charset="utf-8">


<meta name="description" content="swasth mantra, swasth mantra gym, best gym in kolkata,gym at low price,fitness test" />
<meta name="keywords" content="swasth mantra, swasth mantra gym, best gym in kolkata,gym at low price,fitness test,
fitness center,knee pain,back pain & obesity" />
<meta name="author" content="metatags generator">
<meta name="robots" content="index, follow">
<meta name="revisit-after" content="3 month">
<title>Swasth Mantra</title>


<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link href="css/picSlider.css" rel="stylesheet" type="text/css">
<!--<script src="js/jquery.min.js"></script>-->
<script src="http://code.jquery.com/jquery-1.12.1.min.js"></script>
<script src="js/picSlider.js"></script>
<script>
$(document).ready(function() {
					$('.demo-1').picSlider();
					$('.demo-2').picSlider({animate: 'fade'});
					
					$(".toggle").click(function(){ 
    $(".menu_bar").stop().slideToggle(700);
  });
				});
				
				
</script>
<script>
	function submit_enquiry(){
		var error = "";
		var name = $("#name").val();
		var contactno = $("#contactno").val();
		var email_add = $("#email_add").val();
		var enq_detail = $("#enq_detail").val();
		
		var valid_mail = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
		var valid_contact = /^([0-9]{10})$/;
		if(name==""){
			error="* Name is required";
		    $("#error").text(error);
			$("#name").addClass('error_border');
			$("#contactno").removeClass('error_border');
			$("#email_add").removeClass('error_border');
			$("#enq_detail").removeClass('error_border');
			$("#name").focus();
			return false;
		}
		if(contactno==""){
			error="* Contact No is required";
			$("#error").text(error);
			$("#contactno").addClass('error_border');
			$("#name").removeClass('error_border');
			$("#email_add").removeClass('error_border');
			$("#enq_detail").removeClass('error_border');
			$("#contactno").focus();
			return false;
		}
		if(valid_contact.test(contactno)==false){
			error="* Contact No should be 10 digit numeric";
			$("#error").text(error);
			$("#contactno").val("");
			$("#contactno").addClass('error_border');
			$("#name").removeClass('error_border');
			$("#email_add").removeClass('error_border');
			$("#enq_detail").removeClass('error_border');
			$("#contactno").focus();
			return false;
		}
		if(email_add==""){
			error="* Email is required";
			$("#error").text(error);
			$("#email_add").addClass('error_border');
			$("#name").removeClass('error_border');
			$("#contactno").removeClass('error_border');
			$("#enq_detail").removeClass('error_border');
			$("#email_add").focus();
			return false;
		}
		if(valid_mail.test(email_add)==false){
			error="* This email is not valid";
			$("#error").text(error);
			$("#email_add").addClass('error_border');
			$("#name").removeClass('error_border');
			$("#contactno").removeClass('error_border');
			$("#enq_detail").removeClass('error_border');
			$("#email_add").focus();
			return false;
		}
		if(enq_detail==""){
			error="* Enquiry detail is required";
			$("#error").text(error);
			$("#enq_detail").addClass('error_border');
			$("#name").removeClass('error_border');
			$("#contactno").removeClass('error_border');
			$("#email_add").removeClass('error_border');
			$("#enq_detail").focus();
			return false;
		}
		if(error==""){
			$("#error").text("");
		}
		document.getElementById("mailloader").innerHTML='<br><img src="images/emailloader.gif">';
		$.ajax({
			type:'post',
			url:'submit_enquiry.php',
			data:{name:name,contactno:contactno,email:email_add,enqdetail:enq_detail},
			success:function(data){
				if(data==1){
					$("#mailloader").hide();
					$("#sentmail").fadeIn();
					$("#enquiry_form").trigger("reset");
				}
			}
		});
	
		
	}
</script>
</head>

<?php include('header.php');?>

			<div class="slider_area clear">
				<!--<img src="images/banner.jpg" />-->
				<div class="container">
					<div class="picSlider demo-2">
						<ul>
							<li><img src="images/banner.jpg"></li>
							<li><img src="images/banner2.jpg"></li>
							<li><img src="images/banner3.jpg"></li>
							<li><img src="images/banner4.jpg"></li>
							<li><img src="images/banner5.jpg"></li>
						</ul>
					</div>
				</div>
			</div><!-- Slider end here -->
			<div id="conten_area">
				<div class="feature_section ">
					<div class="health_topic">
						<div class="hlth_tpc_position">
							<div class="health_tpc_img">
							    <img src="images/knee_pain_home.png" >
							</div>
							<div class="feature_txt">
							<h2>Knee pain and obesity</h2>
							   <p>We, the inhabitants of the Indian subcontinent are high risk individuals for having knee arthritis... </p>
							</div>
							<div class="hlth_read_more">
								<input type="button" value="READ MORE" class="feature_read_more" onclick="window.location.href='section.php#knee_pain';"/>
							</div>
						</div>
					</div>
			
					<div class="drugs_supply">
						<div class="hlth_tpc_position">
							<div class="health_tpc_img">
							    <img src="images/back_pain_home.png" >
							</div>
							<div class="feature_txt">
							<h2>Back pain and obesity</h2>
							   <p> Back pain is the gift of our modern lifestyle. And even more so are obesity and a bulging waistline... </p>
							</div>
							<div class="hlth_read_more">
								<input type="button" value="READ MORE" class="feature_read_more" onclick="window.location.href='section.php#back_pain';"/>
							</div>
						</div>
					</div>
					<div class="mediacal_encyclopdia">
						<div class="hlth_tpc_position">
							<div class="health_tpc_img">
							    <img src="images/screeming_home.png" >
							</div>
							<div class="feature_txt">
							<h2>Biomechanical Screening</h2>
							   <p>Biomechanical Screening is a process through which an examination of the muscle and the joints are conducted in order... </p>
							</div>
							<div class="hlth_read_more">
								<input type="button" value="READ MORE" class="feature_read_more" onclick="window.location.href='section.php#biochemical_screeming';"/>
							</div>
						</div>
					</div>
				</div>
				<div class="other_services">
						<div class="testimonial">
							<h2>TESTIMONIALS</h2>
							<div class="testimonial_one">
								<div class="testimonial_img"><img src="images/female_icon.png"></div>
								<div class="testimonial_cmnt">
									<p class="testimonial_sys">"A 51 year plump housewife having knee pain on climbing stairs and on prolonged standing reported to SWASTH MANTRA...."</p>
									<h3>Manju Surana</h3>
									<p class="person_tag"><!--Retired person, Barrackpore--></p>
								</div>
							</div>
							
							<div class="testimonial_two">
								<div class="testimonial_img"><img src="images/female_icon.png"></div>
								<div class="testimonial_cmnt">
									<p class="testimonial_sys">"Mrs. Debolina Sen , a teacher in one of the most reputed schools of Kolkata was suffering from chronic back pain since years. "</p>
									<h3>Mrs. Debolina Sen</h3>
									<p class="person_tag"><!--Housewife, Dunlop, Baranagar--></p>
								</div>
							</div>
						</div>
						<div class="services">
							<h2>SERVICES</h2>
								
							<div class="service_detail">
								<div class="service_no"><p>1</p></div>
								<div class="service_txt">
									<h2>Special Therapeutic Package</h2>
									<h3><!--Sunt in culpa qui officia--></h3>
									<p>Swasth Mantra's  special therapeutic packages include remedies for pain, obesity, and life style modifications, all under one package, and that too within a specific time limit.  </p>
								</div>
								<div class="service_border"></div>
							</div>
							<div class="service_detail">
								<div class="service_no"><p>2</p></div>
								<div class="service_txt">
									<h2>General Weight loss package </h2>
									<h3><!--Sunt in culpa qui officia--></h3>
									<p>Swasth Mantra's GENERAL WEIGHT LOSS PACKAGE is designed for those people, who are obese but not having any physical ailments and it adds a magic touch to their lives. </p>
								</div>
								<div class="service_border"></div>
							</div>
							<div class="service_detail">
								<div class="service_no"><p>3</p></div>
								<div class="service_txt">
									<h2>Maintenance package</h2>
									<h3><!--Sunt in culpa qui officia--></h3>
									<p>This package is for those people who have overcome the problem of obesity and pain and want to continue healthy life style for life long.</p>
								</div>
								<div class="service_border"></div>
							</div>
						</div>
						<div class="enquiry">
							<h2>ENQUIRY</h2>
							<div class="enquiry_detail">
								<div class="enquiry_form">
								<form id="enquiry_form">
									<table width="100%" align="center">
										<tr><td><input type="text" name="name" id="name" class="txt_enq_form" placeholder="Name ..."/></td></tr>
										<tr><td><input type="text" name="contactno" id="contactno" class="txt_enq_form" placeholder="Contact Number ..."/></td></tr>
										<tr><td><input type="text" name="email_add" id="email_add" class="txt_enq_form" placeholder="Email Address ..."/></td></tr>
										<tr><td><textarea placeholder="Enquiry Details ..." class="enq_txtarea" id="enq_detail"></textarea></td></tr>
										<tr><td><input type="button" name="submit" id="submit" class="submit_btn" value="SUBMIT ENQUIRY" onclick="submit_enquiry();"/></td></tr>
										<tr><td><p id="error"></p></td></tr>
									</table>
								</form>
								</div>
							</div>
							<div id="mailloader"></div>
							<div id="sentmail">
								<ul>
									<li style="margin-left:38px;"><img src="images/sentmail.png"/></li>
									<li style="padding-top:3px;padding-left:4px;color:#24A249;font-size:13px;">Thank you for contacting us !!!<br> We will get back to you soon...</li>
								</ul>
							</div>
							
						</div>
				</div>
				<div class="clear"></div>
			</div><!-- content end here -->
<?php include('footer.php');?>


