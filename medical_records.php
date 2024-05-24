<!DOCTYPE html>
<html lang="en">

<?php
require_once ('./check_user.php');
require_once ('./layouts/link_css.php');

$query = "SELECT medical_records.*, 
users.first_name as first_name, 
users.last_name as last_name,
numbers.number,
rooms.name
FROM medical_records
JOIN number_medical_records ON medical_records.id = number_medical_records.medical_record_id
JOIN users ON medical_records.doctor_uuid = users.uuid
JOIN numbers ON number_medical_records.number_id = numbers.id
JOIN rooms ON numbers.room_id = rooms.id
WHERE medical_records.user_uuid = '{$_SESSION['uuid']}';";

$medical_details = mysqli_query($conn, $query);


?>

<body>
    <!-- PRELOADER SPINNER -->
    <div id="loader-wrapper">
        <div id="loader">
            <div class="loader-inner"></div>
        </div>
    </div>
    <!-- STYLE SWITCHER -->
    <?php require_once ('./layouts/right_side_bar.php') ?>
    <!-- END SWITCHER -->
    <!-- PAGE CONTENT -->
    <div id="page" class="page">
        <!-- HEADER -->
        <?php require_once ('./layouts/header.php') ?>
        <!-- END HEADER -->
        <?php
        if ($medical_details && mysqli_num_rows($medical_details) > 0) { // Kiểm tra xem có bản ghi nào được trả về không
            ?>
            <div class="container mt-3" style="min-height: 500px;overflow: visible;">
                <h2>Dưới đây là hồ sơ bệnh án của bạn</h2>
                <div class="table-container" style="max-height: auto;overflow-y: auto;">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>STT khám bệnh</th>
                                <th>Phòng khám</th>
                                <th>Tên bác sĩ khám</th>
                                <th>Bệnh</th>
                                <th>Ngày khám</th>
                                <th>Ngày tái khám</th>
                                <th width="10%">Đơn thuốc</th>
                                <th width="10%">Xuất File</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($medical_details as $record) { // Sử dụng foreach để duyệt qua các bản ghi 
                                ?>
                                <tr>
                                    <td>
                                        <?php echo $record['number'] ?>
                                    </td>
                                    <td>
                                        <?php echo $record['name'] ?>
                                    </td>
                                    <td><?php
                                    $doctor_name = '<a href="doctor_details.php?staff_uuid=' . $record['doctor_uuid'] . '">' . $record['last_name'] . ' ' . $record['first_name'] . '</a>';
                                    echo $doctor_name;
                                    ?></td>
                                    <td><?php echo $record['disease'] ?>
                                    </td>
                                    <td><?php
                                    $reExamDate = new DateTime($record['exam_date']);
                                    echo $reExamDate->format('d/m/Y');
                                    ?></td>
                                    <td><?php
                                    $reExamDate = new DateTime($record['re_exam_date']);
                                    echo $reExamDate->format('d/m/Y');
                                    ?></td>
                                    <td>
                                        <a id="prescriptions" 
                                            href="prescription_be.php?medical_record_id=<?php echo $record['id']; ?>" class="btn btn-info btn-sm">
                                            <i class="fa-solid fa-capsules"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="pdf_maker.php?id=<?php echo $record['id']; ?>&ACTION=VIEW"
                                            class="btn btn-success btn-sm"><i class="fa-solid fa-file-pdf"></i></a>
                                    </td>

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
            <p
                style="height: 400px;display: flex;justify-content: center;margin-top: 100px;font-size: xxx-large;font-weight: 700;">
                Bạn chưa có hồ sơ bênh án</p>
            <?php
        } ?>

        <!-- FOOTER-1 -->
        <?php require_once ('./layouts/footer.php') ?>
        <!-- END FOOTER-1 -->
    </div> <!-- END PAGE CONTENT -->
    <!-- EXTERNAL SCRIPTS -->
    <?php require_once ('./layouts/link_js.php') ?>
</body>


</html>
