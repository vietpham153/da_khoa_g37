<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "laravel");
$a = $_POST['data'];
$query = "SELECT staffs_information.*, users.* FROM staffs_information join users on staffs_information.staff_uuid = users.uuid  
WHERE first_name LIKE '%$a%' OR last_name LIKE '%$a%'";
$doctor_result = mysqli_query($conn, $query);

if ($doctor_result && mysqli_num_rows($doctor_result) > 0) {
    // Duyệt qua từng bản ghi và hiển thị thông tin
    while ($doctor_record = mysqli_fetch_assoc($doctor_result)) { ?>
<div class="col-md-6 col-lg-4">
        <div class="doctor-2">
            <!-- Doctor Photo -->
            <div class="hover-overlay">
                <?php if (isset($doctor_record['image'])): ?>
                    <img class="img-fluid" src="./images/doctors/<?php echo $doctor_record['image']; ?>" width="300" height="300"
                        alt="doctor-foto">
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
                    href="doctor_details.php?staff_uuid=<?php echo $doctor_record['staff_uuid'] ?>" title="">Xem thông tin chi
                    tiết</a>
            </div>
        </div>
</div>




        <?php
    }
}
?>