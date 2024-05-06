<?php 
$conn = mysqli_connect("localhost","root","","laravel") or die($conn);
$department = $_GET['departments'];
$query = "SELECT departments.name AS departments_name, 
assignments.staff_uuid AS staff_uuids, 
users.first_name AS first_name, 
users.last_name AS last_name
FROM departments 
JOIN rooms ON departments.id = rooms.department_id 
JOIN assignment_rooms ON rooms.id = assignment_rooms.room_id 
JOIN assignment_shifts ON assignment_rooms.assignment_shift_id = assignment_shifts.id 
JOIN assignment_days ON assignment_rooms.assignment_day_id = assignment_days.id 
JOIN assignments ON assignment_days.assignment_id = assignments.id
JOIN users ON assignments.staff_uuid = users.uuid
WHERE departments.id = '$department'
GROUP BY departments.name, users.first_name, users.last_name, assignments.staff_uuid;";
$query_result = mysqli_query($conn, $query);



//foreach($query_result as $each){
    while ($each = mysqli_fetch_assoc($query_result)){
    $array[] = [
        'uuid' => $each['staff_uuids'],
        'name' => $each['last_name'] . ' ' . $each['first_name']
    ];
  
  // echo $each['staff_uuids'];
    
} 
echo json_encode($array);

?>