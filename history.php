<!DOCTYPE html>
<html lang="en">

<?php
require_once ('./check_user.php');
require_once ('./layouts/link_css.php');
$query_appointments = "
    SELECT 
        appointments.*, 
        shifts.name AS shift_name, 
        users.first_name, 
        users.last_name, 
        TIME_FORMAT(time_avg.start_time, '%H:%i') AS start_time,
        TIME_FORMAT(time_avg.end_time, '%H:%i') AS end_time
    FROM 
        appointments 
    LEFT JOIN 
        shifts ON appointments.shift_id = shifts.id
    LEFT JOIN 
        users ON appointments.doctor_uuid = users.uuid
    LEFT JOIN 
        time_avg ON appointments.id = time_avg.appointment_id
    WHERE 
        appointments.user_uuid = '{$_SESSION['uuid']}'
    ORDER BY  
        appointments.updated_at DESC;
";
$appointment_details = mysqli_query($conn, $query_appointments);

$appointments = [];
if ($appointment_details) {
    while ($row = mysqli_fetch_assoc($appointment_details)) {
        $appointments[] = $row;
    }
}

$dayNames = array(
    1 => '2',
    2 => '3',
    3 => '4',
    4 => '5',
    5 => '6',
    6 => '7',
    7 => 'Chủ Nhật'
);
?>

<body>
    <!-- PRELOADER SPINNER ============================================= -->
    <div id="loader-wrapper">
        <div id="loader">
            <div class="loader-inner"></div>
        </div>
    </div>
    <!-- STYLE SWITCHER ============================================= -->
    <?php require_once ('./layouts/right_side_bar.php') ?>
    <!-- END SWITCHER -->
    <!-- PAGE CONTENT ============================================= -->
    <div id="page" class="page">
        <!-- HEADER ============================================= -->
        <?php require_once ('./layouts/header.php') ?>
        <!-- END HEADER -->
        <?php
        if (!empty($appointments)) { // Kiểm tra xem có bản ghi nào được trả về không
            ?>
            <div class="container mt-3" style="min-height: 500px;overflow: visible;">
                <h2>Dưới đây là hồ sơ bệnh án của bạn</h2>
                <div class="table-container" style="max-height: auto;overflow-y: auto;">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Thời gian</th>
                                <th>Thứ</th>
                                <th>Vấn đề</th>
                                <th>Bác sĩ khám</th>
                                <th>Tình trạng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $stt = 1; // Khởi tạo biến đếm STT
                            foreach ($appointments as $appointment_record) { // Sử dụng foreach để duyệt qua các bản ghi
                                ?>
                                <tr>
                                    <td><?php echo $stt++; ?></td> <!-- Hiển thị số thứ tự tự động tăng -->
                                    <td><?php echo $appointment_record['start_time'] . ' - ' . $appointment_record['end_time']; ?></td>
                                    <td><?php echo $dayNames[$appointment_record['day_id']] ?></td>
                                    <td><?php echo $appointment_record['note'] ?></td>
                                    <td>
                                        <?php
                                        $doctor_name = isset($appointment_record['doctor_uuid']) ? '<a href="doctor_details.php?staff_uuid=' . $appointment_record['doctor_uuid'] . '">' . $appointment_record['last_name'] . ' ' . $appointment_record['first_name'] . '</a>' : "Chúng tôi đang sắp xếp bác sĩ cho bạn, vui lòng chờ thông báo";
                                        echo $doctor_name;
                                        ?>
                                    </td>
                                    <td><?php echo $appointment_record['status'] == 1 ? '<button class="btn-success btn-sm"> Đã xác nhận </button>' : '<button class="btn-danger btn-sm"> Chưa xác nhận </button>'; ?></td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <?php
        } else { ?>
            <p style="height: 400px;display: flex;justify-content: center;margin-top: 100px;font-size: xxx-large;font-weight: 700;">Bạn chưa có lịch hẹn</p>
            <?php
        }
        ?>

        <!-- FOOTER-1 ============================================= -->
        <?php require_once ('./layouts/footer.php') ?>
        <!-- END FOOTER-1 -->
    </div> <!-- END PAGE CONTENT -->
    <!-- EXTERNAL SCRIPTS ============================================= -->
    <?php require_once ('./layouts/link_js.php') ?>
</body>

</html>
