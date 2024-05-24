<?php
$conn = mysqli_connect("localhost", "root", "", "laravel") or die($conn);
$doctor = $_GET['doctor'];

if (!empty($doctor)) {
    $query = "SELECT 
    assignment_days.day_id,
    CASE
        WHEN assignment_days.day_id = 1 THEN 'Thứ 2'
        WHEN assignment_days.day_id = 2 THEN 'Thứ 3'
        WHEN assignment_days.day_id = 3 THEN 'Thứ 4'
        WHEN assignment_days.day_id = 4 THEN 'Thứ 5'
        WHEN assignment_days.day_id = 5 THEN 'Thứ 6'
        WHEN assignment_days.day_id = 6 THEN 'Thứ 7'
        WHEN assignment_days.day_id = 0 THEN 'Chủ Nhật'
        ELSE 'Không xác định'
    END AS day_name
    FROM assignments
    JOIN users ON assignments.staff_uuid = users.uuid
    JOIN assignment_days ON assignments.id = assignment_days.assignment_id
    WHERE users.uuid = '$doctor'
    GROUP BY 
    assignment_days.day_id";

    $query_result = mysqli_query($conn, $query);
    $days = [];

    while ($each = mysqli_fetch_assoc($query_result)) {
        // Chỉ thêm ngày nếu chưa tồn tại
        if (!isset($days[$each['day_id']])) {
            $days[$each['day_id']] = [
                'day_id' => $each['day_id'],
                'day_name' => $each['day_name']
            ];
        }
    }

    // Chuyển đổi các mảng kết hợp thành các mảng chỉ số để dễ dàng JSON encode
    $days = array_values($days);

    echo json_encode(['days' => $days]);
} else {
    echo json_encode(['days' => []]);
}
?>
