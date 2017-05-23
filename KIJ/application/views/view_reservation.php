<!DOCTYPE HTML>
<html>
    
    <head>
 <?php include 'view_head_reservation.php' ?>
<link href="<?php echo base_url('assets/reservation/css/style.css') ;?>" rel="stylesheet" type="text/css" media="all"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Classy Booking Form  Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!--web-fonts-->
<link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
<script src="<?php echo base_url('assets/reservation/js/jquery-1.12.0.min.js') ?>"></script>

    </head>
<body>
<?php include 'view_navbar_client_reservation.php'?>
	
		
			<div class="main">
				<div class="main-section agile">
					<div class="login-form">
						<form action="#" method="post">
							<ul>
								 <li class="text-info">Full Name *</li>
								 <li><input type="text" name="name" placeholder="" required></li>
								 <div class="clear"></div>
							 </ul>
							 <ul>
								 <li class="text-info">Email ID *</li>
								 <li><input type="text" name="email" placeholder="" required></li>
								 <div class="clear"></div>
							 </ul>
							 <ul>
								 <li class="text-info">Phone Number *</li>
								 <li><input type="text" placeholder="" required></li>
								 <div class="clear"></div>
							 </ul>
							  <ul>
								<li class="text-info">Check In Date/Time *</li>
								<li class="dat"><input class="date" id="datepicker" type="text" value="dd-mm-yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'dd-mm-yyyy';}" required=></li>
								<li class="selec"><select class="currentTime time-dropdown form-dropdown validate[required, limitDate]" id="hour_15" name="q15_departureDatetime15[hour]">
									<option> Hr </option>
									<option value="1"> 1 </option>
									<option value="2"> 2 </option>
									<option value="3"> 3 </option>
									<option value="4"> 4 </option>
									<option value="5"> 5 </option>
									<option value="6"> 6 </option>
									<option value="7"> 7 </option>
									<option value="8"> 8 </option>
									<option value="9"> 9 </option>
									<option value="10"> 10 </option>
									<option value="11"> 11 </option>
									<option value="12"> 12 </option>
								  </select>
								  <select class="time-dropdown form-dropdown validate[required, limitDate]" id="min_15" name="q15_departureDatetime15[min]">
									<option>  Min</option>
									<option value="00"> 00 </option>
									<option value="10"> 10 </option>
									<option value="20"> 20 </option>
									<option value="30"> 30 </option>
									<option value="40"> 40 </option>
									<option value="50"> 50 </option>
								  </select>
								  <select class="time-dropdown form-dropdown validate[required, limitDate]" id="ampm_15" name="q15_departureDatetime15[ampm]">
									<option value="AM"> AM </option>
									<option value="PM"> PM </option>
								  </select></li>
								<div class="clear"></div>
							</ul>
							<ul>
								<li class="text-info">Check Out Date/Time *</li>
								<li class="dat"><input class="date" id="datepicker1" type="text" value="dd-mm-yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'dd-mm-yyyy';}" required=></li>
								<li class="selec"><select class="currentTime time-dropdown form-dropdown validate[required, limitDate]" id="hour_15" name="q15_departureDatetime15[hour]">
									<option> Hr </option>
									<option value="1"> 1 </option>
									<option value="2"> 2 </option>
									<option value="3"> 3 </option>
									<option value="4"> 4 </option>
									<option value="5"> 5 </option>
									<option value="6"> 6 </option>
									<option value="7"> 7 </option>
									<option value="8"> 8 </option>
									<option value="9"> 9 </option>
									<option value="10"> 10 </option>
									<option value="11"> 11 </option>
									<option value="12"> 12 </option>
								  </select>
								  <select class="time-dropdown form-dropdown validate[required, limitDate]" id="min_15" name="q15_departureDatetime15[min]">
									<option>  Min</option>
									<option value="00"> 00 </option>
									<option value="10"> 10 </option>
									<option value="20"> 20 </option>
									<option value="30"> 30 </option>
									<option value="40"> 40 </option>
									<option value="50"> 50 </option>
								  </select>
								  <select class="time-dropdown form-dropdown validate[required, limitDate]" id="ampm_15" name="q15_departureDatetime15[ampm]">
									<option value="AM"> AM </option>
									<option value="PM"> PM </option>
								  </select></li>
								<div class="clear"></div>
							</ul>
							<!---start-date-piker---->
										<link rel="stylesheet" href="<?php echo base_url('assets/reservation/css/jquery-ui.css'); ?>" />
										<script src="<?php echo base_url('assets/reservation/js/jquery-ui.js');?>"></script>
											<script>
												$(function() {
												$( "#datepicker,#datepicker1" ).datepicker();
												});
											</script>
									<!---/End-date-piker---->
							
							
							
							 <ul>
								 <li class="text-info">Number of Guest *</li>
								 <li class="se"> <select class="time-dropdown form-dropdown validate[required, limitDate]" id="min_15" name="q15_departureDatetime15[min]">
									<option>  0</option>
									<option value="1"> 1 </option>
									<option value="2"> 2 </option>
									<option value="3"> 3 </option>
									<option value="4"> 4 </option>
									<option value="5"> 5 </option>
									<option value="6"> 6 </option>
									<option value="7"> 7 </option>
									<option value="8"> 8 </option>
									<option value="9"> 9 </option>
								  </select></li>
								 <div class="clear"></div>
							 </ul> 
							 <ul>
								<li class="text-info">Additional Message :</li>
								<li><textarea></textarea></li>
								<div class="clear"></div>
							</ul>
							<input type="submit" value="Submit">
							<div class="clear"></div>
						</form>
					</div>
				</div>
			</div>
			

	

 <?php include 'view_footer.php'; ?>
</body>
</html>		