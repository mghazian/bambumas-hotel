<!DOCTYPE HTML>
<html>
<?php include 'view_head.php' ?>
<body>
<?php include'view_navbar_client.php' ;?>

<div class="banner">
   	  <div class="container_wrap">
   	  <br><br><br><br>
   		<h1>Selamat Datang, admin <?php echo $this->session->userdata('nama_user'); ?> </h1>
   		<h1>Di Sistem Informasi Hotel</h1>
   	       <!--
			    <div class="contact_btn">
	               <a href="#"><label class="btn1 btn-2 btn-2g">new reservation</label></a>
	               <a href="#"><label class="btn1 btn-2 btn-2g">on going reservation</label></a>
	               <a href="#"><label class="btn1 btn-2 btn-2g">all reservation</label></a>
	            </div> 		 -->
   		    <div class="clearfix"></div>
         </div>
</div>

<div class="content_middle">
   	  <div class="container">
   		<div class="col-md-12 bottom_nav">
   		   <div class="content_menu">
				<ul>
					<li class="active"><a href="#">New Reservation</a></li> 
					<li><a href="#">On Going Reservation</a></li> 
					<li><a href="#">All Reservation</a></li> 
				</ul>
			</div>
		</div>
		
		
   	</div>
   </div>


   <div class="content_top">
   	  <div class="container">
   	  <table class="table table-hover table-responsive text-center">
   	<thead>
    <tr>
    <th class="text-center">Name</th>
    <th class="text-center">Email</th>
    <th class="text-center">Phone Number</th>
    <th class="text-center">Check In</th>
    <th class="text-center">Check Out</th>
    <th class="text-center">Number Of Guest</th>
    <th class="text-center">Additional Message</th>
    <th class="text-center">Action</th>

    </tr>
    </thead>
    <tbody>
    <tr>
    	<td> Adit </td>
    	<td> @gmail.com </td>
    	<td> 085735835737 </td>
    	<td> 22/06/2017 </td>
    	<td> 25/06/2017 </td>
    	<td> 6 </td>
    	<td> - </td>
    	<td>
    		<a href="#" class="btn btn-default left-margin">Edit</a>
    		<a delete-id="#" class="btn btn-danger delete-object">Delete</a>
    	</td>
    </tr>
    
    <tr>
    	<td> Adit </td>
    	<td> @gmail.com </td>
    	<td> 085735835737 </td>
    	<td> 22/06/2017 </td>
    	<td> 25/06/2017 </td>
    	<td> 6 </td>
    	<td> - </td>
    	<td>
    		<a href="#" class="btn btn-default left-margin">Edit</a>
    		<a delete-id="#" class="btn btn-danger delete-object">Delete</a>
    	</td>
    </tr>
    
    <tr>
    	<td> Adit </td>
    	<td> @gmail.com </td>
    	<td> 085735835737 </td>
    	<td> 22/06/2017 </td>
    	<td> 25/06/2017 </td>
    	<td> 6 </td>
    	<td> - </td>
    	<td>
    		<a href="#" class="btn btn-default left-margin">Edit</a>
    		<a delete-id="#" class="btn btn-danger delete-object">Delete</a>
    	</td>
    </tr>
    
    <tr>
    	<td> Adit </td>
    	<td> @gmail.com </td>
    	<td> 085735835737 </td>
    	<td> 22/06/2017 </td>
    	<td> 25/06/2017 </td>
    	<td> 6 </td>
    	<td> - </td>
    	<td>
    		<a href="#" class="btn btn-default left-margin">Edit</a>
    		<a delete-id="#" class="btn btn-danger delete-object">Delete</a>
    	</td>
    </tr>
    </tbody>
    </table>
   </div>
   </div>

<?php include 'view_footer.php' ; ?>

</body>
</html>