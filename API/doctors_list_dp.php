<?php
$conn = mysqli_connect("localhost", "root", "", "laravel") or die($conn);
$department = $_GET['departments'];
if(!empty($department)){
    $query = "SELECT 
    users.uuid AS staff_uuid,
    users.first_name AS first_name,
    users.last_name AS last_name,
    staffs_information.image AS images,
    staffs_information.description AS descriptions
FROM 
    departments 
JOIN 
    rooms ON departments.id = rooms.department_id 
JOIN 
    assignment_rooms ON rooms.id = assignment_rooms.room_id 
JOIN 
    assignment_shifts ON assignment_rooms.assignment_shift_id = assignment_shifts.id 
JOIN 
    assignment_days ON assignment_rooms.assignment_day_id = assignment_days.id 
JOIN 
    assignments ON assignment_days.assignment_id = assignments.id
JOIN 
    users ON assignments.staff_uuid = users.uuid
JOIN 
    staffs_information ON staffs_information.staff_uuid = users.uuid
WHERE 
    departments.id = '$department'
GROUP BY 
    users.uuid, 
    users.first_name, 
    users.last_name,
    staffs_information.image,
    staffs_information.description;";
}else{
    $query = "SELECT 
    users.uuid AS staff_uuid,
    users.first_name AS first_name,
    users.last_name AS last_name,
    staffs_information.image AS images,
    staffs_information.description AS descriptions
FROM 
    departments 
JOIN 
    rooms ON departments.id = rooms.department_id 
JOIN 
    assignment_rooms ON rooms.id = assignment_rooms.room_id 
JOIN 
    assignment_shifts ON assignment_rooms.assignment_shift_id = assignment_shifts.id 
JOIN 
    assignment_days ON assignment_rooms.assignment_day_id = assignment_days.id 
JOIN 
    assignments ON assignment_days.assignment_id = assignments.id
JOIN 
    users ON assignments.staff_uuid = users.uuid
JOIN 
    staffs_information ON staffs_information.staff_uuid = users.uuid
GROUP BY 
    users.uuid, 
    users.first_name, 
    users.last_name,
    staffs_information.image,
    staffs_information.description;";
}

$query_result = mysqli_query($conn, $query);

$array = array(); // Khai báo mảng để chứa dữ liệu trả về

while ($each = mysqli_fetch_assoc($query_result)) {
    $array[] = [
        'uuid' => $each['staff_uuid'],
        'name' => $each['last_name'] . ' ' . $each['first_name'],
        'images' => $each['images'],
        'descriptions' => $each['descriptions']
    ];
}

echo json_encode($array); // Trả về dữ liệu dưới dạng JSON

?>
