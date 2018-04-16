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
	function submit_enq(){
		var error = "";
		var name = $("#name").val();
		var contactno = $("#contactno").val();
		var email_add = $("#email_add").val();
		var enq_detail = $("#enq_detail").val();
		
		var valid_mail = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
		var valid_contact = /^([0-9]{10})$/;
		if(name==""){
			error="* Name is required";
		    $("#error_enq").text(error);
			$("#name").addClass('error_border');
			$("#contactno").removeClass('error_border');
			$("#email_add").removeClass('error_border');
			$("#enq_detail").removeClass('error_border');
			$("#name").focus();
			return false;
		}
		if(contactno==""){
			error="* Contact No is required";
			$("#error_enq").text(error);
			$("#contactno").addClass('error_border');
			$("#name").removeClass('error_border');
			$("#email_add").removeClass('error_border');
			$("#enq_detail").removeClass('error_border');
			$("#contactno").focus();
			return false;
		}
		if(valid_contact.test(contactno)==false){
			error="* Contact No should be 10 digit numeric";
			$("#error_enq").text(error);
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
			$("#error_enq").text(error);
			$("#email_add").addClass('error_border');
			$("#name").removeClass('error_border');
			$("#contactno").removeClass('error_border');
			$("#enq_detail").removeClass('error_border');
			$("#email_add").focus();
			return false;
		}
		if(valid_mail.test(email_add)==false){
			error="* This email is not valid";
			$("#error_enq").text(error);
			$("#email_add").addClass('error_border');
			$("#name").removeClass('error_border');
			$("#contactno").removeClass('error_border');
			$("#enq_detail").removeClass('error_border');
			$("#email_add").focus();
			return false;
		}
		if(enq_detail==""){
			error="* Enquiry detail is required";
			$("#error_enq").text(error);
			$("#enq_detail").addClass('error_border');
			$("#name").removeClass('error_border');
			$("#contactno").removeClass('error_border');
			$("#email_add").removeClass('error_border');
			$("#enq_detail").focus();
			return false;
		}
		if(error==""){
			$("#error_enq").text("");
		}
		document.getElementById("mailloader").innerHTML='<br><img src="images/emailloader.gif">';
		$.ajax({
			type:'post',
			url:'submit_enquiry.php',
			data:{name:name,contactno:contactno,email:email_add,enqdetail:enq_detail},
			success:function(data){
				if(data==1){
					//alert(data);
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

			<div id="enquiry_contentArea">
				<h2>ENQUIRY</h2>
				<div class="enq_area">
					<p class="enq_head">Ask From Us</p>
					<p style="color:#848484;">
					<!--Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non nunc vel ex suscipit imperdiet. Phasellus nibh mi, suscipit in orci quis, tristique faucibus sem. Aliquam tristique pulvinar nunc, nec finibus nunc scelerisque sed. Quisque euismod mollis vestibulum. Vivamus non bibendum eros.-->
					</p>
					<div class="enq_background">
						<form id="enquiry_form">
							<table width="80%" align="center" class="enquiry_frm">
								<tr><td><p id="error_enq"></p></td></tr>
								<tr><td><input type="text" name="name" id="name" class="enq_frm_styl" placeholder="Name ..."/></td></tr>
								<tr><td><input type="text" name="contact" id="contactno" class="enq_frm_styl" placeholder="Contact Number ..."/></td></tr>
								<tr><td><input type="text" name="email" id="email_add" class="enq_frm_styl" placeholder="Email Address ..."/></td></tr>
								<tr><td><textarea placeholder="Enquiry Details ..." class="enq_txtarea_styl" id="enq_detail"></textarea></td></tr>
								<tr><td><input type="button" name="enquiry" id="enquiry" class="enq_btn" value="SUBMIT ENQUIRY" onclick="submit_enq();"/></td></tr>
							</table>
						</form>
						<div id="mailloader" style="margin-left:30%;"></div>
						<div id="sentmail">
								<ul>
									<li style="margin-left:40%;"><img src="images/sentmail.png"/></li>
									<li style="padding-top:3px;padding-left:4px;color:#24A249;font-size:13px;">Thank you for contacting us !!!<br> We will get back to you soon...</li>
								</ul>
						</div>
					</div>	
				</div>
			</div><div class="clear"></div>
			
<?php include('footer.php');?>















