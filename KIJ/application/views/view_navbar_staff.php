<div class="header">
		   <div class="col-sm-8 header-left">
					 <div class="logo">
						<a href="<?php echo base_url('index.php/c_client'); ?>"> <img src="<?php echo base_url('assets/homepage/images/logo.png');?>" alt=""/></a>
					 </div>
					 <div class="menu">
						  <a class="toggleMenu" href="#"><img src="<?php echo base_url('assets/homepage/images/nav.png'); ?> " alt="" /></a>
						    <ul class="nav" id="nav">
						    	<li class="active"> <a href="<?php echo base_url('index.php/c_client'); ?>">Home</a></li>
						    
						    	
								<div class="clearfix"></div>
							</ul>
                                                  <script type="text/javascript" src="<?php echo base_url('assets/homepage/js/responsive-nav.js') ?>"></script>
				    </div>	
				     <!-- start search-->
				      <div class="search-box">
							<div id="sb-search" class="sb-search">
								<form>
									<input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
									<input class="sb-search-submit" type="submit" value="">
									<span class="sb-icon-search"> </span>
								</form>
							</div>
						</div>
						<!----search-scripts---->
						<script src="<?php echo base_url('assets/homepage/js/classie.js');?>"></script>
						<script src="<?php echo base_url('assets/homepage/js/uisearch.js');?>"></script>
						<script>
							new UISearch( document.getElementById( 'sb-search' ) );
						</script>
						<!----//search-scripts---->						
	    		    <div class="clearfix"></div>
	    	    </div>
	            <div class="col-sm-4 header_right">
                        <div id="loginContainer"><a href="<?php echo base_url('index.php/home/logout');?> " id="loginButton"/> <img src="<?php echo base_url('assets/homepage/images/lg.png');?>"><span> <a> <?php echo $this->session->userdata('nama_user'); ?> </a> </span></a>
						
			            </div>
		                 <div class="clearfix"></div>
	                 </div>
	                <div class="clearfix"></div>
   </div>