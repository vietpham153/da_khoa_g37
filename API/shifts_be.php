<?php
$conn = mysqli_connect("localhost", "root", "", "laravel") or die($conn);
$doctor = $_GET['doctor'];
$day = $_GET['day']; // Lấy ngày từ yêu cầu AJAX

if (!empty($doctor) && !empty($day)) { 
    // Truy vấn SQL để đếm số lượng lịch hẹn cho từng ca làm việc của bác sĩ trong ngày
    $query_count = "SELECT day_id, shift_id, COUNT(*) AS appointment_count 
                    FROM appointments
                    WHERE doctor_uuid = '$doctor'
                    GROUP BY day_id, shift_id";

    $result_count = mysqli_query($conn, $query_count);
    $appointments = [];

    while ($row = mysqli_fetch_assoc($result_count)) {
        $appointments[] = $row;
    }

    // Lưu các ca đã đầy vào mảng
    $full_shifts = [];
    foreach ($appointments as $appointment) {
        if ($appointment['appointment_count'] >= 12) { // Số lượng lịch hẹn tối đa là 12
            $full_shifts[] = $appointment['shift_id']; 
        }
    }

    // Truy vấn SQL để lấy thông tin các ca làm việc
    $query_shifts = "SELECT 
                        assignment_days.day_id,
                        assignment_shifts.shift_id,
                        shifts.name AS shift_name,
                        assignment_rooms.room_id
                    FROM 
                        assignments
                    JOIN 
                        users ON assignments.staff_uuid = users.uuid
                    JOIN 
                        assignment_shifts ON assignments.id = assignment_shifts.assignment_id
                    JOIN 
                        assignment_days ON assignments.id = assignment_days.assignment_id
                    JOIN 
                        assignment_rooms ON assignment_shifts.id = assignment_rooms.assignment_shift_id
                                        AND assignment_days.id = assignment_rooms.assignment_day_id
                    JOIN 
                        shifts ON assignment_shifts.shift_id = shifts.id
                    WHERE 
                        users.uuid = '$doctor' AND assignment_days.day_id = '$day'";

    $query_result = mysqli_query($conn, $query_shifts);
    $shifts = [];

    while ($each = mysqli_fetch_assoc($query_result)) {
        $shifts[] = $each; // Thêm ca làm việc vào mảng $shifts
    }

    // Trả về dữ liệu JSON
    echo json_encode(['shifts' => $shifts, 'full' => $full_shifts]);
} else {
    echo json_encode(['shifts' => []]); // Trả về mảng rỗng nếu không có bác sĩ hoặc ngày được truyền vào
}
?>
