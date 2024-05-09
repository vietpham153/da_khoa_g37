<!DOCTYPE html>
<html lang="en">

<?php
require_once ('./check_user.php');
require_once ('./layouts/link_css.php');
$query_appointments = "SELECT appointments.*, shifts.name, users.first_name, users.last_name
FROM appointments 
left join shifts on appointments.shift_id = shifts.id
left join users on appointments.doctor_uuid = users.uuid
WHERE appointments.user_uuid = '{$_SESSION['uuid']}' 
ORDER BY `status` DESC, appointments.updated_at DESC;";
$appointment_details = mysqli_query($conn, $query_appointments);
$appointment_record = mysqli_fetch_assoc($appointment_details);

$dayNames = array(
    1 => 'Thứ 2',
    2 => 'Thứ 3',
    3 => 'Thứ 4',
    4 => 'Thứ 5',
    5 => 'Thứ 6'
);
$shiftNames = array(
    1 => 'Ca 1 - 00:00-02:00',
    2 => 'Ca 2 - 02:00-04:00',
    3 => 'Ca 3 - 04:00-06:00',
    4 => 'Ca 4 - 06:00-08:00',
    5 => 'Ca 5 - 08:00-10:00',
    6 => 'Ca 6 - 10:00-12:00',
    7 => 'Ca 7 - 12:00-14:00',
    8 => 'Ca 8 - 14:00-16:00',
    9 => 'Ca 9 - 16:00-18:00',
    10 => 'Ca 10 - 18:00-20:00',
    11 => 'Ca 11 - 20:00-22:00',
    12 => 'Ca 12 - 22:00-00:00',
);
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
    <!-- END SWITCHER -->
    <!-- PAGE CONTENT
        ============================================= -->
    <div id="page" class="page">
        <!-- HEADER
            ============================================= -->
        <?php require_once ('./layouts/header.php') ?>
        <!-- END HEADER -->
        <?php
        if ($appointment_details && mysqli_num_rows($appointment_details) > 0) { // Kiểm tra xem có bản ghi nào được trả về không
            ?>
            <div class="container mt-3" style="height: 500px;">
                <h2>Dưới đây là lịch hẹn của bạn</h2>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Ca</th>
                            <th>Thứ</th>
                            <th>Vấn đề</th>
                            <th>Bác sĩ khám</th>
                            <th>Tình trạng</th>
                            <th width="5%">Thông tin đơn thuốc</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $stt = 1; // Khởi tạo biến đếm STT
                        foreach ($appointment_details as $appointment_record) { // Sử dụng foreach để duyệt qua các bản ghi 
                            ?>
                            <tr>
                                <td><?php echo $stt++; ?></td> <!-- Hiển thị số thứ tự tự động tăng -->
                                <td><?php echo $shiftNames[$appointment_record['shift_id']] ?></td>
                                <td><?php echo $dayNames[$appointment_record['day_id']] ?></td>
                                <td><?php echo $appointment_record['note'] ?></td>
                                <td>
                                    <?php
                                    $doctor_name = isset($appointment_record['doctor_uuid']) ? '<a href="doctor_details.php?staff_uuid=' . $appointment_record['doctor_uuid'] . '">' . $appointment_record['last_name'] . ' ' . $appointment_record['first_name'] . '</a>' : "Chúng tôi đang sắp xếp bác sĩ cho bạn, vui lòng chờ thông báo";
                                    echo $doctor_name;
                                    ?>

                                </td>

                                <td><?php echo $appointment_record['status'] == 1 ? '<button class="btn-success btn-sm"> Đã xác nhận </button>' : '<button class="btn-danger btn-sm"> Chưa xác nhận </button>'; ?>
                                </td>
                                <td><a href="prescription.php" class="btn btn-info btn-sm"><i
                                            class="fa-solid fa-capsules"></i></a></td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <?php
        } else { ?>
            <p style="height: 400px;display: flex;justify-content: center;margin-top: 100px;font-size: xxx-large;font-weight: 700;">Bạn chưa có lịch hẹn</p>
            <?php
        } ?>







        <!-- FOOTER-1
            ============================================= -->
        <?php require_once ('./layouts/footer.php') ?>
        <!-- END FOOTER-1 -->
    </div> <!-- END PAGE CONTENT -->
    <!-- EXTERNAL SCRIPTS
        ============================================= -->
    <?php require_once ('./layouts/link_js.php') ?>
</body>

</html>