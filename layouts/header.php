
<header id="header" class="header">
			<!-- MOBILE HEADER -->
			    <div class="wsmobileheader clearfix">
			    	<a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
			    	<span class="smllogo"><img src="images/dakhoa.png" width="180" height="40" alt="mobile-logo"/></span>
			    	<a href="tel:123456789" class="callusbtn"><i class="fas fa-phone"></i></a>
			 	</div>
			 	<!-- HEADER STRIP -->
			 	<div class="headtoppart bg-blue clearfix">
			    	<div class="headerwp clearfix">
			    		<!-- Address -->
			     		<div class="headertopleft">			     			
			        		<div class="address clearfix"><span><i class="fas fa-map-marker-alt"></i>121 King St,
			            		Melbourne, VIC 3000 </span> <a href="tel:123456789" class="callusbtn"><i class="fas fa-phone"></i>(800)-569-7890</a>
			            	</div>
			     		</div>
			     		<!-- Social Links -->
					    <div class="headertopright">
					    	<a class="googleicon" title="Google" href="#"><i class="fab fa-google"></i> <span class="mobiletext02">Google</span></a>
					        <a class="linkedinicon" title="Linkedin" href="#"><i class="fab fa-linkedin-in"></i> <span class="mobiletext02">Linkedin</span></a>
					        <a class="twittericon" title="Twitter" href="#"><i class="fab fa-twitter"></i> <span class="mobiletext02">Twitter</span></a>
					        <a class="facebookicon" title="Facebook" href="#"><i class="fab fa-facebook-f"></i> <span class="mobiletext02">Facebook</span></a>
				      	</div>
				    </div>
			  	</div>	<!-- END HEADER STRIP -->
			  	<!-- NAVIGATION MENU -->
			  	<div class="wsmainfull menu clearfix">
    				<div class="wsmainwp clearfix">
    					<!-- LOGO IMAGE -->
    					<!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 360 x 80 pixels) -->
    					<div class="desktoplogo"><a href="./"><img src="images/dakhoa.png"  width="180" height="40" alt="header-logo"></a></div>
    					<!-- MAIN MENU -->
      					<nav class="wsmenu clearfix">
        					<ul class="wsmenu-list">
        						<!-- DROPDOWN MENU -->
					        	<li aria-haspopup="true"><a href="#">Trang chủ</a>
					          	</li>	<!-- END DROPDOWN MENU -->
					          	<!-- HALF MENU -->
									<!-- DROPDOWN MENU -->
									<li aria-haspopup="true"><a href="#">Dịch vụ<span class="wsarrow"></span></a>
					           		<ul class="sub-menu">
					              		<li aria-haspopup="true"><a href="services.php">Dịch vụ y tế</a></li>
					              		<li aria-haspopup="true"><a href="demo-3.html">Bảng giá chung</a></li>
					              		<li aria-haspopup="true"><a href="demo-4.html">Giờ làm việc</a></li>
					              		<li aria-haspopup="true"><a href="demo-5.html">Quy trình khám chữa bệnh</a></li>
					              		<li aria-haspopup="true"><a href="demo-6.html">Hướng dẫn dặt lịch khám</a></li>
					              		<li aria-haspopup="true"><a href="demo-7.html">Bảo hiểm</a></li>
					           		</ul>
					          		</li>	<!-- END DROPDOWN MENU -->
								<li aria-haspopup="true"><a href="doctors_list.php">Đội ngũ bác sĩ</a></li>
								<li aria-haspopup="true"><a href="#">Tin tức</a></li>
							    <!-- SIMPLE NAVIGATION LINK -->
								
							    <li style="<?php if(!empty($_SESSION['uuid'])) {?> display: none; <?php }?>" class="nl-simple" aria-haspopup="true"><a data-toggle="modal" data-target="#login" href="">Đăng nhập/Đăng ký</a></li>
							    <li style="<?php if(empty($_SESSION['uuid'])) {?> display: none; <?php }?>" class="nl-simple" aria-haspopup="true">
								<?php if(!empty($_SESSION['uuid'])) {?> 
									<?php if($_SESSION['gender'] == 0) {?> 
									<a href="#"><img src="http://reface.me/wp-content/uploads/default-facebook-avatar-female.gif" alt="mdo" width="32" height="32" 
									class="rounded-circle"><?php echo $_SESSION['name']; ?><span class="wsarrow"></span></a>
									<?php }?>
										<?php if(($_SESSION['gender'] == 1)) {?> 
											<a href="#"><img src="http://reface.me/wp-content/uploads/default-facebook-avatar-male.gif" alt="mdo" width="32" height="32" 
											class="rounded-circle"><?php echo $_SESSION['name']; ?><span class="wsarrow"></span></a>
										<?php }?>
											
										
								
								<ul class="sub-menu">
					              		<li aria-haspopup="true"><a href="services.php">Thông tin cá nhân</a></li>
					              		<li aria-haspopup="true"><a href="demo-3.html">Lịch sử đặt lịch</a></li>
					              		<li aria-haspopup="true"><a href="logout.php">Đăng xuất</a></li>
					           		</ul>
									<?php }?>
								</li>
								<!-- NAVIGATION MENU BUTTON -->
							    <li class="nl-simple header-btn" aria-haspopup="true"><a href="appointment.php">Đặt lịch hẹn</a></li>
        					</ul>
        				</nav>	<!-- END MAIN MENU -->
    				</div>
    			</div>	<!-- END NAVIGATION MENU -->
			</header>

			<?php require_once('./login.php'); ?>
			<?php require_once('./register.php'); ?>