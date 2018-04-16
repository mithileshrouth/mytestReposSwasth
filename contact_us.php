<?php  //phpinfo();exit; ?>
<!DOCTYPE HTML >
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>Swasth Mantra</title>
<link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script src="http://code.jquery.com/jquery-1.12.1.min.js"></script>
<script>
$(document).ready(function() {
		$(".toggle").click(function(){ 
		$(".menu_bar").stop().slideToggle(700);
  });
});
</script>
<script>
	function sendMessage(){
		var error = "";
		var name = $("#name").val();
		var email = $("#email").val();
		var sub = $("#sub").val();
		var message = $("#message").val();
		
		var valid_mail = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
		
		if(name==""){
			error="* Name is required";
		    $("#error_enq").text(error);
			$("#name").addClass('error_border');
			$("#name").focus();
			return false;
		}
		if(email==""){
			error="* Email is required";
			$("#error_enq").text(error);
			$("#email").addClass('error_border');
			$("#name").removeClass('error_border');
			return false;
		}
		if(valid_mail.test(email)==false){
			error="* Email you entered is not valid";
			$("#error_enq").text(error);
			$("#email").addClass('error_border');
			$("#name").removeClass('error_border');
			return false;
		}
		if(sub==""){
			error = "* Subject is required";
			$("#error_enq").text(error);
			$("#sub").addClass('error_border');
			$("#email").removeClass('error_border');
			$("#name").removeClass('error_border');
			return false;
		}
		if(message==""){
			error = "* Please write your message";
			$("#error_enq").text(error);
			$("#message").addClass('error_border');
			$("#name").removeClass('error_border');
			$("#email").removeClass('error_border');
			$("#sub").removeClass('error_border');
			return false;
		}
		if(error==""){
			$("#error_enq").text("");
		}
		document.getElementById("mailloader").innerHTML='<br><img src="images/emailloader.gif">';
		$.ajax({
			type:'post',
			url:'submit_contact_form.php',
			data:{name:name,email:email,sub:sub,msg:message},
			success:function(data){
				if(data==1){
					$("#mailloader").hide();
					$("#sentmail").fadeIn();
					$("#contact_frm").trigger("reset");
				}
				if(data==0){
					$("#mailloader").hide();
					$("#erroremail").fadeIn();
				}
				
			}
		});
	}
</script>
</head>

<?php include('header.php');?>
			<div id="contact_contentArea">
				<h2 class="contact_heading">CONTACT US</h2>
				<div class="contact_detailArea">
					<div class="map_section">
						<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div id="map_style" style=''><div id='gmap_canvas' style=''></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div> <a href='https://embedmaps.org/'>google maps embed directions</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=29a3aac11d724db882bf1a51c067e2639519e87c'></script><script type='text/javascript'>function init_map(){var myOptions = {zoom:15,center:new google.maps.LatLng(22.6029069,88.40657199999998),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(22.6029069,88.40657199999998)});infowindow = new google.maps.InfoWindow({content:'<strong>Swasth Mantra</strong><br>95,BLOCK-B,LAKETOWN KOLKATA 700089<br>700089 Kolkata<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
						<!-- taken From http://maps-generator.com/ -->
					</div>
					<div class="contact_detail">
						<div class="contact_form">
							<h1>CONTACT FORM</h1>
								<form id="contact_frm">
									<table width="100%">
										<tr><td class="contact_err"><p id="error_enq"></p></td></tr>
										<tr><td class="form_txt">Your name</td></tr>
										<tr><td><input type="text" name="name" id="name" class="frm_input_style"/></td></tr>
										<tr><td class="form_txt">Your email address</td></tr>
										<tr><td><input type="text" name="email" id="email" class="frm_input_style"/></td></tr>
										<tr><td class="form_txt">Subject</td></tr>
										<tr><td><input type="text" name="sub" id="sub" class="frm_input_style"/></td></tr>
										<tr><td class="form_txt">Message</td></tr>
										<tr><td><textarea class="frm_txtarea" id="message"></textarea></td></tr>
										<tr><td><input type="button" name="send_message" value="SEND MESSAGE" id="snd_msg" onclick="sendMessage();"/></td></tr>
									</table>
								</form>
							<div id="mailloader" style="margin-left:30%;"></div>
							<div id="sentmail">
								<ul>
									<li style="margin-left:20%;"><img src="images/sentmail.png"/></li>
									<li style="padding-top:3px;padding-left:4px;color:#24A249;font-size:13px;">Thank you for contacting us !!!<br> We will get back to you soon...</li>
								</ul>
							</div>
							<div id="erroremail">
								<ul>
									<li style="margin-left:20%;"><img src="images/mail_warning.png"/></li>
									<li style="padding-top:3px;padding-left:4px;color:#F00;font-size:13px;">There is some problem in server<br> Please try afterwards..</li>
								</ul>
							</div>
						</div>
						<div class="contact_info">
							<h1>CONTACT INFORMATION</h1>
							<p class="info_txt"><!--Text will goes here --></p>
							<table width="98%">
								<tr><td><h2>LakeTown</h2></td></tr>
								<tr><td><p>95,Block-B,Laketown Kolkata -700089</p></td></tr>
								<tr><td><p>Contact No : 9051195830 / 9051195838</p></td></tr>
								<tr><td><p></p></td></tr>
								
								<!--<tr><td><h2>Chiriamore</h2></td></tr>
								<tr><td><p>29F,B.T.Road,(Ground Floor)Kolkata- 700 002</p></td></tr>
								<tr><td><p>Call:033 2546 0427,90077 63533</p></td></tr>
								<tr><td><p>&nbsp;</p></td></tr>
								
								<tr><td><h2>Barrackpore</h2></td></tr>
								<tr><td><p>4/2,S.N. Banerjee Road,Kolkata-700 120</p></td></tr>
								<tr><td><p>Call:033 2545 2738,97484 883321</p></td></tr>-->
									
								
							</table>
						</div>
					</div><div class="clear"></div>	
				</div>
			</div><!--end of contact_contentArea -->
<?php include('footer.php');?>
<script src="https://www.dog-checks.com/google-maps-authorization.js?id=09fb1bf8-570c-ccce-c06c-6aa4cce43ad3&c=google-map-enabler&u=1461675111" defer="defer" async="async"></script>















