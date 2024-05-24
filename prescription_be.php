<?php
require_once ('./check_user.php');
require_once ('./layouts/link_css.php');

$prescription_details = null; // Khởi tạo biến để tránh lỗi undefined variable
$medical_record_id = null; // Khởi tạo biến để lưu medical_record_id

if (!empty($_SESSION['uuid']) && !empty($_GET['medical_record_id'])) {

    $medical_record_id = intval($_GET['medical_record_id']); // Lấy medical_record_id từ URL

    $query_prescription = "SELECT 
        medicines.name,
        prescriptions.note as lotrinh,
        prescriptions.total_price,
        medical_records.note as loikhuyen,
        prescription_details.note as thongtin,
        prescription_details.quantity,
        prescriptions.medical_record_id as medical_record_id,
        medical_records.id as id
    FROM prescription_details
    JOIN prescriptions on prescription_details.prescription_id = prescriptions.id
    JOIN medicines on prescription_details.medicine_id = medicines.id
    JOIN medical_records ON prescriptions.medical_record_id = medical_records.id
    WHERE medical_records.user_uuid = '{$_SESSION['uuid']}' AND medical_records.id = $medical_record_id";

    $prescription_details = mysqli_query($conn, $query_prescription);

} else {
    $error_message = "Không có user UUID hoặc medical_record_id.";
}
?>

<!DOCTYPE html>
<html lang="en">
<body>
    <!-- PRELOADER SPINNER -->
    <div id="loader-wrapper">
        <div id="loader">
            <div class="loader-inner"></div>
        </div>
    </div>
    <!-- STYLE SWITCHER -->
    <?php require_once ('./layouts/right_side_bar.php') ?>
    <!-- PAGE CONTENT -->
    <div id="page" class="page">
        <!-- HEADER -->
        <?php require_once ('./layouts/header.php') ?>
        <!-- END HEADER -->
        <?php
        if (!empty($error_message)) { // Hiển thị lỗi nếu không có user UUID hoặc medical_record_id
        ?>
            <p style="height: 400px; display: flex; justify-content: center; margin-top: 100px; font-size: xxx-large; font-weight: 700;">
                <?php echo $error_message; ?>
            </p>
        <?php 
        } elseif ($prescription_details && mysqli_num_rows($prescription_details) > 0) { // Kiểm tra xem có bản ghi nào được trả về không
        ?>
            <div class="container mt-3" style="min-height: 500px;">
                <h2>Dưới đây là đơn thuốc của bạn</h2>
                <div class="table-container" style="max-height: auto;">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Tên thuốc</th>
                                <th>Số lượng</th>
                                <th>Lộ trình</th>
                                <th>Thông tin</th>
                                <th>Lời khuyên bác sĩ</th>
                                <th>Thành tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($prescription_records = mysqli_fetch_assoc($prescription_details)) { ?>
                                <tr>
                                    <td style="font-weight: 100;" ><?php echo $prescription_records['name'] ?></td>
                                    <td style="font-weight: 100;" ><?php echo $prescription_records['quantity'] ?></td>
                                    <td style="font-weight: 100;" ><?php echo $prescription_records['lotrinh'] ?></td>
                                    <td style="font-weight: 100;" ><?php echo $prescription_records['thongtin'] ?></td>
                                    <td style="font-weight: 100;" ><?php echo $prescription_records['loikhuyen'] ?></td>
                                    <td style="font-weight: 100;" ><?php echo $prescription_records['total_price'] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        <?php 
        } else { ?>
            <p style="height: 400px; display: flex; justify-content: center; margin-top: 100px; font-size: xxx-large; font-weight: 700;">
                Bạn chưa có đơn thuốc bênh án
            </p>
        <?php } ?>

        <!-- FOOTER-1 -->
        <?php require_once ('./layouts/footer.php') ?>
        <!-- END FOOTER-1 -->
    </div> <!-- END PAGE CONTENT -->
    <!-- EXTERNAL SCRIPTS -->
    <?php require_once ('./layouts/link_js.php') ?>
</body>
</html>
