<!DOCTYPE html>
<html lang="en">

<?php
require_once ('./check_user.php');
require_once ('./layouts/link_css.php');

$doctors_per_page = !empty($_GET['per_page']) ? $_GET['per_page'] : 6;
$current_page = !empty($_GET['page']) ? $_GET['page'] : 1;
$offset = ($current_page - 1) * $doctors_per_page;

$query = "SELECT staffs_information.*, users.* FROM staffs_information join users on staffs_information.staff_uuid = users.uuid  
ORDER BY staffs_information.created_at LIMIT " . $doctors_per_page . " OFFSET " . $offset . "";
$doctor_result = mysqli_query($conn, $query);
$total_doctors = mysqli_query($conn, "SELECT * FROM staffs_information ");
$total_doctors = $total_doctors->num_rows;
$total_page = ceil($total_doctors / $doctors_per_page);
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
	<?php require_once ('./layouts/right_side_bar.php') ?> <!-- END SWITCHER -->
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
									<li class="breadcrumb-item active" aria-current="page">Đội ngũ bác sĩ</li>
								</ol>
							</nav>
							<!-- Title -->
							<h4 class="h4-sm steelblue-color"
								style="font-family: 'Roboto', 'Helvetica Neue', Helvetica, Arial, sans-serif;">Đội ngũ
								bác sĩ</h4>
								<!-- Form Select -->
								<div id="input-department" class="col-md-12 input-department">
									<select id="departments_select" name="department" class="custom-select department" style="width: auto !important; 
									margin-top: 30px;" >
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
						</div>
					</div>
				</div> <!-- End row -->
			</div> <!-- End container -->
		</div> <!-- END BREADCRUMB -->
		<section id="doctors-3" class="bg-lightgrey wide-60 doctors-section division">
			<div class="container">
				<div class="row" id="doctors_list">
					<?php
					if ($doctor_result && mysqli_num_rows($doctor_result) > 0) {
						// Duyệt qua từng bản ghi và hiển thị thông tin
						while ($doctor_record = mysqli_fetch_assoc($doctor_result)) { ?>
							<!-- DOCTOR #1 -->
							<div  class="col-md-6 col-lg-4">
								<div class="doctor-2">
									<!-- Doctor Photo -->
									<div class="hover-overlay">
										<?php if (isset($doctor_record['image'])): ?>
											<img class="img-fluid" src="./images/doctors/<?php echo $doctor_record['image']; ?>"
												width="300" height="300" alt="doctor-foto">
										<?php endif; ?>
									</div>
									<!-- Doctor Meta -->
									<div class="doctor-meta">
										<?php if (isset($doctor_record['last_name']) && isset($doctor_record['first_name'])): ?>
											<h5 class="h5-xs blue-color">BS.
												<?php echo $doctor_record['last_name'] . ' ' . $doctor_record['first_name']; ?>
											</h5>
										<?php endif; ?>
										<?php if (isset($doctor_record['description'])): ?>
											<span><?php echo $doctor_record['description']; ?></span>
										<?php endif; ?>
										<!-- Button -->
										<a class="btn btn-sm btn-blue blue-hover mt-15"
											href="doctor_details.php?staff_uuid=<?php echo $doctor_record['staff_uuid'] ?>"
											title="">Xem thông tin chi tiết</a>
									</div>
								</div>
							</div> <!-- END DOCTOR #1 -->
						<?php }
					} else {
						// Nếu không có bản ghi nào được trả về
						echo "Không có dữ liệu.";
					}
					mysqli_free_result($doctor_result);
					?>
				</div> <!-- End row -->
			</div> <!-- End container -->
			<div class="center">
				<div class="pagination">
					<?php
					include './pagination.php'
						?>
				</div>
			</div>
		</section>
		<!-- DOCTORS-3
			============================================= -->
		<!-- END DOCTORS-3 -->
		<!-- STATISTIC-1
			============================================= -->
		<?php require_once ('./layouts/statistic.php') ?>
		<!-- END STATISTIC-1 -->
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
        var selected_department = $(this).val();
        $.ajax({
            url: './API/doctors_list_dp.php',
            type: "GET",
            data: { departments: selected_department },
            success: function (data) {
                var doctors = JSON.parse(data); // Parse JSON string to JavaScript object
                $('#doctors_list').empty(); // Clear the current content of the doctor list
                $.each(doctors, function (index, doctor) {
                    // Tạo một biến để chứa chuỗi HTML
                    var doctorHTML = '<div class="col-md-6 col-lg-4">' +
                                        '<div class="doctor-2">' +
                                            '<div class="hover-overlay">' +
                                                '<img class="img-fluid" src="./images/doctors/' + doctor.images + '" alt="' + doctor.name + '" width="300" height="300">' +
                                            '</div>' +
                                            '<div class="doctor-meta">' +
                                                '<h5 class="h5-xs blue-color">BS. ' + doctor.name + '</h5>' +
                                                '<span>' + doctor.descriptions + '</span>' +
                                                '<a class="btn btn-sm btn-blue blue-hover mt-15" href="doctor_details.php?staff_uuid=' + doctor.uuid + '" title="">Xem thông tin chi tiết</a>' +
                                            '</div>' +
                                        '</div>' +
                                    '</div>';
        
                    // Chèn chuỗi HTML vào danh sách bác sĩ
                    $('#doctors_list').append(doctorHTML);
                });

                // Gọi hàm để tải phân trang
                loadPagination();
            },
            error: function (xhr, status, error) {
                console.log("Request failed: " + status + ", " + error);
                // Handle errors if needed
            }
        });
    });
});

function loadPagination() {
    $.ajax({
        url: './pagination.php', // Đường dẫn đến tập tin phân trang PHP
        type: "GET",
        success: function (data) {
            // Chèn phân trang vào trang web
            $('.pagination').html(data);
        },
        error: function (xhr, status, error) {
            console.log("Request failed: " + status + ", " + error);
            // Handle errors if needed
        }
    });
}

</script>



</html>