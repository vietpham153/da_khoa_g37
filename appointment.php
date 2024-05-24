<!DOCTYPE html>
<html lang="en">

<?php
require_once ('./check_user.php');
require_once ('./layouts/link_css.php');

$query = "SELECT staffs_information.*, users.* FROM staffs_information join users on staffs_information.staff_uuid = users.uuid  
ORDER BY staffs_information.created_at";

$doctor_result = mysqli_query($conn, $query);
$shift = "SELECT * FROM shifts";
$shift_result = mysqli_query($conn, $shift);

$department_query = "SELECT * FROM departments";
$department_result = mysqli_query($conn, $department_query);
?>

<body>
	<!-- PRELOADER SPINNER
		============================================= -->
	<div id="loader-wrapper">
		<div id="loader">
			<div class="loader-inner"></div>
		</div>
	</div>
	<!-- STYLE SWITCHER
		============================================= -->
	<?php require_once ('./layouts/right_side_bar.php') ?>
	<!-- PAGE CONTENT
		============================================= -->
	<div id="page" class="page">
		<!-- HEADER
			============================================= -->
		<?php require_once ('./layouts/header.php') ?>
		<!-- END HEADER -->
		<!-- BREADCRUMB
			============================================= -->
		<div id="breadcrumb" class="division">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class=" breadcrumb-holder">

							<!-- Breadcrumb Nav -->
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="./">Trang chủ</a></li>
									<li class="breadcrumb-item active" aria-current="page">Đặt lịch hẹn</li>
								</ol>
							</nav>
							<!-- Title -->
							<h4 class="h4-sm steelblue-color"
								style="font-family: 'Roboto', 'Helvetica Neue', Helvetica, Arial, sans-serif;">Đặt lịch
								hẹn</h4>

						</div>
					</div>
				</div> <!-- End row -->
			</div> <!-- End container -->
		</div> <!-- END BREADCRUMB -->
		<!-- APPOINTMENT PAGE
			============================================= -->
		<div id="appointment-page" class="wide-60 appointment-page-section division">
			<div class="container">
				<div class="row">
					<!-- SERVICE DETAILS -->
					<div class="col-lg-8">
						<div class="txt-block pr-30">
							<!-- Title -->
							<h3 class="h3-md steelblue-color">Đặt lịch hẹn</h3>
							<!-- Text -->
							<p>Đặt lịch hẹn của Bệnh viện Đa khoa G37 là một trong những dịch vụ quan trọng nhằm cung
								cấp tiện ích và tiếp cận dịch vụ y tế dễ dàng hơn cho bệnh nhân.
								Với hệ thống đặt lịch trực tuyến thông minh, bệnh nhân có thể đặt lịch hẹn một cách
								thuận tiện từ bất kỳ đâu và bất kỳ khi nào.
								Qua hệ thống này, họ có thể chọn bác sĩ, chọn ngày và giờ phù hợp,
								từ đó giảm thiểu thời gian chờ đợi và tăng trải nghiệm của mình trong quá trình khám
								chữa bệnh.
								Đồng thời, phần đặt lịch hẹn cũng giúp quản lý lịch trình của bác sĩ một cách hiệu quả,
								tối ưu hóa khả năng phục vụ và nâng cao chất lượng dịch vụ y tế cho cộng đồng.
							</p>
							<!-- APPOINTMENT FORM -->
							<div class="text-center">
								<form class="row appointment" action="appointment_be.php" method="POST">
									<?php if (!empty($_SESSION['uuid'])) { ?>
										<!-- Form Select -->
										<div id="input-department" class="col-md-12 input-department">
											<select id="departments_select" name="department"
												class="custom-select department">
												<option value="">Chọn Khoa</option>


												<?php while ($department_record = mysqli_fetch_assoc($department_result)) { ?>
													<option value="<?php echo $department_record['id'] ?>">
														<h5 class="h5-xs blue-color">
															<?php echo $department_record['name']; ?>
														</h5>
													</option>
												<?php } ?>
											</select>
										</div>
										<!-- Form Select -->
										<div id="input-doctor" class="col-md-12 input-doctor">
											<select id="doctors_select" name="doctor_uuid" class="custom-select doctor">
												<option value="">Chọn bác sĩ</option>
												<?php
												if ($doctor_result && mysqli_num_rows($doctor_result) > 0) {
													// Duyệt qua từng bản ghi và hiển thị thông tin
													while ($doctor_record = mysqli_fetch_assoc($doctor_result)) { ?>
														<option>
															<?php if (isset($doctor_record['last_name']) && isset($doctor_record['first_name'])): ?>
																<h5 class="h5-xs blue-color">BS.
																	<?php echo $doctor_record['last_name'] . ' ' . $doctor_record['first_name']; ?>
																</h5>
															<?php endif; ?>
														</option>
													<?php }
												} else {
													// Nếu không có bản ghi nào được trả về
													echo "Không có dữ liệu.";
												}
												mysqli_free_result($doctor_result);
												?>
											</select>
										</div>
									<?php } else { ?>
									<?php } ?>
									<!-- Contact Form Input -->


									<div class="col-md-12 input-doctor">
										<select id="day_id" name="day_id" class="custom-select doctor" required>
											<option value="">Chọn Thứ</option>
											<?php
											// Vòng lặp để tạo ra các option cho các ngày từ thứ 2 đến thứ 6
											for ($i = 1; $i <= 5; $i++) {
												// Sử dụng switch case để đặt tên cho các ngày
												switch ($i) {
													case 1:
														$day = "Thứ 2";
														break;
													case 2:
														$day = "Thứ 3";
														break;
													case 3:
														$day = "Thứ 4";
														break;
													case 4:
														$day = "Thứ 5";
														break;
													case 5:
														$day = "Thứ 6";
														break;
													case 6:
														$day = "Thứ 7";
														break;
													case 0:
														$day = "Chủ Nhật";
														break;
													default:
														$day = "Không xác định";
												}
												// In ra option cho mỗi ngày với giá trị từ 1 đến 6
												echo "<option value='$i'>$day</option>";
											}
											?>
										</select>
									</div>


									<!-- Chọn bác sĩ -->
									<div class="col-md-12 input-doctor">
										<select id="shift_id" name="shift_id" class="custom-select doctor" required>
											<option value="">Chọn Ca</option>
											<?php
											// Duyệt qua từng bản ghi và hiển thị thông tin
											while ($shift_record = mysqli_fetch_assoc($shift_result)) { ?>
												<option value="<?php echo $shift_record['id'] ?>">
													<h5 class="h5-xs blue-color">
														<?php echo $shift_record['name']; ?>
													</h5>
												</option>
											<?php }
											?>
										</select>
									</div>
									<!-- Contact Form Input -->
									<div id="input-name" class="col-lg-12">
										<input type="text" name="name" class="form-control name"
											placeholder="Nhập tên của bạn*"
											value="<?php echo !empty($_SESSION['uuid']) ? $_SESSION['name'] : ''; ?>"
											required>
									</div>
									<div id="input-email" class="col-lg-12">
										<input type="text" name="email" class="form-control email"
											placeholder="Nhập email của bạn*"
											value="<?php echo !empty($_SESSION['uuid']) ? $_SESSION['email'] : ''; ?>"
											required>
									</div>
									<div id="input-phone" class="col-lg-12">
										<input type="tel" name="phone" class="form-control phone"
											placeholder="Nhập số điện thoại của bạn*"
											value="<?php echo !empty($_SESSION['uuid']) ? $_SESSION['phone_number'] : ''; ?>"
											required>
									</div>
									<div id="input-message" class="col-lg-12 input-message">
										<textarea class="form-control message" name="note" rows="6"
											placeholder="Nhập vấn đề ..."></textarea>
									</div>
									<!-- Contact Form Button -->
									<div class="col-lg-12 form-btn">
										<button id="submitBtn" type="submit" name="submit"
											class="btn btn-blue blue-hover submit">Đặt lịch</button>
									</div>
									<!-- Contact Form Message -->
								</form>
							</div> <!-- END APPOINTMENT FORM -->
							<!-- Text -->
							<p class="p-sm grey-color mb-30">* Lưu ý: Thời gian khám trên chỉ là thời gian dự kiến,
								tổng đài sẽ liên hệ xác nhận thời gian khám chính xác tới quý khách sau khi quý khách
								đặt hẹn
							</p>
						</div>
					</div> <!-- END SERVICE DETAILS -->
					<!-- SIDEBAR -->
					<aside id="sidebar" class="col-lg-4">
						<!-- TEXT WIDGET -->
						<div id="txt-widget" class="sidebar-div mb-50">
							<!-- Title -->
							<h5 class="h5-sm steelblue-color">Đa Khoa G37</h5>
						</div> <!-- END TEXT WIDGET -->
						<!-- SIDEBAR TABLE -->
						<div class="sidebar-table blue-table sidebar-div mb-50">
							<!-- Title -->
							<h5 class="h5-md">Thời gian làm việc theo ca</h5>
							<!-- Text -->
							<p class="p-sm">Dưới đây là bảng thời gian phân theo ca của bệnh viện ĐA KHOA G37
							</p>
							<!-- Table -->
							<table class="table">
								<tbody>
									<tr>
										<td>Ca 1</td>
										<td> - </td>
										<td class="text-right">00:00 AM - 02:00 PM</td>
									</tr>
									<tr>
										<td>Ca 2</td>
										<td> - </td>
										<td class="text-right">02:00 AM - 04:00 PM</td>
									</tr>
									<tr>
										<td>Ca 3</td>
										<td> - </td>
										<td class="text-right">04:00 AM - 06:00 PM</td>
									</tr>
									<tr>
										<td>Ca 4</td>
										<td> - </td>
										<td class="text-right">06:00 AM - 08:00 PM</td>
									</tr>
									<tr>
										<td>Ca 5</td>
										<td> - </td>
										<td class="text-right">08:00 AM - 10:00 PM</td>
									</tr>
									<tr>
										<td>Ca 6</td>
										<td> - </td>
										<td class="text-right">10:00 AM - 12:00 PM</td>
									</tr>
									<tr>
										<td>Ca 7</td>
										<td> - </td>
										<td class="text-right">12:00 AM - 14:00 PM</td>
									</tr>
									<tr>
										<td>Ca 8</td>
										<td> - </td>
										<td class="text-right">14:00 AM - 16:00 PM</td>
									</tr>
									<tr>
										<td>Ca 9</td>
										<td> - </td>
										<td class="text-right">16:00 AM - 18:00 PM</td>
									</tr>
									<tr>
										<td>Ca 10</td>
										<td> - </td>
										<td class="text-right">18:00 AM - 20:00 PM</td>
									</tr>
									<tr>
										<td>Ca 11</td>
										<td> - </td>
										<td class="text-right">20:00 AM - 22:00 PM</td>
									</tr>
									<tr>
										<td>Ca 12</td>
										<td> - </td>
										<td class="text-right">22:00 AM - 00:00 PM</td>
									</tr>
								</tbody>
							</table>
						</div> <!-- END SIDEBAR TABLE -->
					</aside> <!-- END SIDEBAR -->
				</div> <!-- End row -->
			</div> <!-- End container -->
		</div> <!-- END APPOINTMENT PAGE -->
		<!-- FOOTER-1
			============================================= -->
		<?php require_once ('./layouts/footer.php') ?>
		<!-- END FOOTER-1 -->
	</div> <!-- END PAGE CONTENT -->
	<!-- EXTERNAL SCRIPTS
			============================================= -->
	<?php require_once ('./layouts/link_js.php') ?>
</body>
<script>
	$(document).ready(function () {
		$('#departments_select').change(function () {
			// Thực hiện hành động khi có sự thay đổi trong thẻ select
			var selected_department = $(this).val();
			// Do something with the selected value
			$.ajax({
				url: './API/departments_be.php',
				type: "GET",
				data: { departments: selected_department },
				success: function (response) {
					// Giải mã JSON và lấy dữ liệu
					var data = JSON.parse(response);
					console.log(data);
					// Xóa tất cả các tùy chọn hiện có trong thẻ <select>
					$('#doctors_select').empty();
					// Thêm tùy chọn mặc định
					$('#doctors_select').append('<option value="">Chọn bác sĩ</option>');
					// Thêm các tùy chọn mới từ dữ liệu nhận được
					$.each(data, function (index, doctor) {
						$('#doctors_select').append('<option value="' + doctor.uuid + '">BS. ' + doctor.name + '</option>');
					});
				},
				error: function (response) {
				}
			})
		});
	});
	$('#doctors_select').change(function () {
        var selected_doctor = $(this).val();
        $.ajax({
            url: './API/days_be.php',
            type: "GET",
            data: { doctor: selected_doctor },
            success: function (response) {
                var data = JSON.parse(response);
                $('#day_id').empty().append('<option value="">Chọn Thứ</option>');
                $('#shift_id').empty().append('<option value="">Chọn Ca</option>');

                $.each(data.days, function (index, day) {
                    $('#day_id').append('<option value="' + day.day_id + '">' + day.day_name + '</option>');
                });

                $.each(data.shifts, function (index, shift) {
                    $('#shift_id').append('<option value="' + shift.shift_id + '">' + shift.shift_name + '</option>');
                });
            },
            error: function (response) {
                console.log("Error: ", response);
            }
        });
    });
	$('#doctors_select, #day_id').change(function () {
    var selected_doctor = $('#doctors_select').val(); 
    var selected_day = $('#day_id').val(); // Lấy giá trị của thẻ select chứa ngày
    $.ajax({
        url: './API/shifts_be.php',
        type: "GET",
        data: { doctor: selected_doctor, day: selected_day }, // Truyền cả hai giá trị bác sĩ và ngày
        success: function (response) {
            var data = JSON.parse(response);
            $('#shift_id').empty().append('<option value="">Chọn Ca</option>');

            $.each(data.shifts, function (index, shift) {
                // Tạo tùy chọn mới
				var option = $('<option value="' + shift.shift_id + '">' + shift.shift_name + (data.full && data.full.indexOf(shift.shift_id) !== -1 ? ' (Lịch hẹn đã đầy)' : '') + '</option>');
                // Kiểm tra nếu số lượng lịch hẹn của ca này vượt quá giới hạn
                if (data.full && data.full.indexOf(shift.shift_id) !== -1) {
                    // Vô hiệu hóa tùy chọn
                    option.prop('disabled', true);
                }
                // Thêm tùy chọn vào thẻ select
                $('#shift_id').append(option);
            });
        },
        error: function (response) {
            console.log("Error: ", response);
        }
    });
});

</script>

</html>