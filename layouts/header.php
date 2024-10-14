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
                <div class="address clearfix"><span><i class="fas fa-map-marker-alt"></i>475 ĐBP,
                    Bình Thạnh, HCMC </span> <a href="tel:123456789" class="callusbtn"><i class="fas fa-phone"></i>(+84)-4569-7890</a>
                </div>
            </div>
            <!-- Social Links -->
            <div class="headertopright">
                <a class="googleicon" title="Google" href="#"><i class="fab fa-google"></i> <span class="mobiletext02">Google</span></a>
                <a class="twittericon" title="Twitter" href="#"><i class="fab fa-twitter"></i> <span class="mobiletext02">Twitter</span></a>
                <a class="facebookicon" title="Facebook" href="#"><i class="fab fa-facebook-f"></i> <span class="mobiletext02">Facebook</span></a>
            </div>
        </div>
    </div>  <!-- END HEADER STRIP -->
    <!-- NAVIGATION MENU -->
    <div class="wsmainfull menu clearfix">
        <div class="wsmainwp clearfix">
            <!-- LOGO IMAGE -->
            <!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 360 x 80 pixels) -->
            <div class="desktoplogo"><a href="./"><img src="images/dakhoa.png" width="180" height="40" alt="header-logo"></a></div>
            <!-- MAIN MENU -->
            <nav class="wsmenu clearfix">
                <ul class="wsmenu-list">
                    <!-- DROPDOWN MENU -->
                    <li aria-haspopup="true"><a href="./">Trang chủ</a>
                    </li>  <!-- END DROPDOWN MENU -->
                    <!-- HALF MENU -->
                    <!-- DROPDOWN MENU -->
                    <li aria-haspopup="true"><a href="#">Dịch vụ<span class="wsarrow"></span></a>
                        <ul class="sub-menu">
                            <li aria-haspopup="true"><a href="services.php">Dịch vụ y tế</a></li>
                            <li aria-haspopup="true"><a href="#">Bảng giá chung</a></li>
                            <li aria-haspopup="true"><a href="#">Giờ làm việc</a></li>
                            <li aria-haspopup="true"><a href="#">Quy trình khám chữa bệnh</a></li>
                            <li aria-haspopup="true"><a href="#">Hướng dẫn đặt lịch khám</a></li>
                            <li aria-haspopup="true"><a href="#">Bảo hiểm</a></li>
                        </ul>
                    </li>  <!-- END DROPDOWN MENU -->
                    <li aria-haspopup="true"><a href="doctors_list.php">Đội ngũ bác sĩ</a></li>
                    <li aria-haspopup="true"><a href="#">Tin tức</a></li>
                    <!-- SIMPLE NAVIGATION LINK -->

                    <?php if (empty($_SESSION['uuid'])) { ?>
                        <li class="nl-simple" aria-haspopup="true"><a data-toggle="modal" data-target="#login" href="">Đăng nhập/Đăng ký</a></li>
                    <?php } else { ?>
                        <li class="nl-simple" aria-haspopup="true">
                            <?php if (isset($_SESSION['gender'])) { ?> 
                                <?php if ($_SESSION['gender'] == 0) { ?> 
                                    <a href="#"><img src="http://reface.me/wp-content/uploads/default-facebook-avatar-female.gif" alt="mdo" width="32" height="32" class="rounded-circle"><?php echo $_SESSION['name']; ?><span class="wsarrow"></span></a>
                                <?php } elseif ($_SESSION['gender'] == 1) { ?> 
                                    <a href="#"><img src="http://reface.me/wp-content/uploads/default-facebook-avatar-male.gif" alt="mdo" width="32" height="32" class="rounded-circle"><?php echo $_SESSION['name']; ?><span class="wsarrow"></span></a>
                                <?php } ?>
                            <?php } else { ?>
                                <a href="#"><img src="http://reface.me/wp-content/uploads/default-facebook-avatar-male.gif" alt="mdo" width="32" height="32" class="rounded-circle"><?php echo $_SESSION['name']; ?><span class="wsarrow"></span></a>
                            <?php } ?>
                            <ul class="sub-menu">
                                <li aria-haspopup="true"><a href="medical_records.php">Hồ sơ bệnh án</a></li>
                                <li aria-haspopup="true"><a href="history.php">Lịch sử đặt lịch</a></li>
                                <li aria-haspopup="true"><a href="logout.php">Đăng xuất</a></li>
                            </ul>
                        </li>
                    <?php } ?>
                    <!-- NAVIGATION MENU BUTTON -->
                    <li class="nl-simple header-btn" aria-haspopup="true"><a href="appointment.php">Đặt lịch hẹn</a></li>
                </ul>
            </nav>  <!-- END MAIN MENU -->
        </div>
    </div>  <!-- END NAVIGATION MENU -->
</header>

<?php require_once('./login.php'); ?>
<?php require_once('./register.php'); ?>
