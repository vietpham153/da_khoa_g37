<?php
$conn = mysqli_connect("localhost", "root", "", "laravel");

// Kiểm tra nếu có staff_uuid trong yêu cầu GET
if (!empty($_GET['staff_uuid'])) {
    $staff_uuid = $_GET['staff_uuid'];

    // Truy vấn SQL để lấy id của nhiệm vụ (assignment)
    $query_assignments = "SELECT id FROM assignments WHERE staff_uuid = '$staff_uuid' AND date_end >= CURDATE()";
    $query_assignments_result = mysqli_query($conn, $query_assignments);

    // Lấy id_assignments từ kết quả truy vấn
    $id_assignments = mysqli_fetch_assoc($query_assignments_result)['id'];

    // Truy vấn SQL để lấy tất cả các ngày của nhiệm vụ
    $query_assignments_days = "SELECT * FROM assignment_days WHERE assignment_id = $id_assignments";
    $query_assignments_days_result = mysqli_query($conn, $query_assignments_days);
    // Chuyển kết quả truy vấn thành một mảng ngày
    $assignment_days = [];
    while ($day = mysqli_fetch_assoc($query_assignments_days_result)) {
        $assignment_days[] = $day;
    }

    // Truy vấn SQL để lấy tất cả các ca làm việc của nhiệm vụ
    $query_assignments_shifts = "SELECT assignment_shifts.id as id, assignment_shifts.shift_id as shift_id, shifts.name as shift_name  
                                 FROM assignment_shifts 
                                 JOIN shifts ON assignment_shifts.shift_id = shifts.id
                                 WHERE assignment_shifts.assignment_id = $id_assignments";
    $query_assignments_shifts_result = mysqli_query($conn, $query_assignments_shifts);

    // Chuyển kết quả truy vấn thành một mảng ca làm việc
    $assignment_shifts = [];
    while ($shift = mysqli_fetch_assoc($query_assignments_shifts_result)) {
        $assignment_shifts[] = $shift;
    }

    // Khởi tạo mảng kết quả cuối cùng
    $arr = [];
    $arr_day = [];
    $arr_shift = [];
    $days = [];
    $query_assignments_shifts_result = [];
    // Xử lý từng ngày và ca làm việc và lưu vào mảng kết quả
    foreach ($assignment_days as $day) {
        $arr_day[$day['id']] = [
            'name' => days($day['day_id'])
        ];
        $days[] = $day['id'];
        
    }
    foreach ($assignment_shifts as $shift) {
        $arr_shift[$shift['id']] = [
            'name' => $shift['shift_name']
        ];
        $shifts[] = $shift['id'];
        // Truy vấn SQL để lấy tên phòng (room name)

        // Lưu tên phòng vào mảng kết quả
        
    }
    foreach($days as $day){
        foreach($shifts as $shift){
            $query_assignments_rooms = "SELECT assignment_rooms.id as ID, rooms.name as room_name 
                                        FROM assignment_rooms 
                                        JOIN rooms ON assignment_rooms.room_id = rooms.id
                                        WHERE assignment_day_id = $day
                                        AND assignment_shift_id = $shift
                                        LIMIT 1";
            $query_assignments_rooms_result = mysqli_query($conn, $query_assignments_rooms);
            while ($assignment_rooms = mysqli_fetch_assoc($query_assignments_rooms_result)) {
                $arr[$shift][$day] = [
                    'room' => $assignment_rooms['room_name']
                ];
            }
        }
    }
    // Trả về dữ liệu dưới dạng JSON
    echo json_encode(['arr' => $arr, 'arr_day' => $arr_day, 'arr_shift' => $arr_shift]);
}

// Hàm để lấy tên ngày (day name)
function days($day) {
    switch ($day) {
        case 1:
            return "Thứ 2";
        case 2:
            return "Thứ 3";
        case 3:
            return "Thứ 4";
        case 4:
            return "Thứ 5";
        case 5:
            return "Thứ 6";
        case 6:
            return "Thứ 7";
        case 0:
            return "Chủ Nhật";
        default:
            return "Không xác định";
    }
}
?>
