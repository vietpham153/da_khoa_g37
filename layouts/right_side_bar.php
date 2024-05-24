<?php
if(!empty($_SESSION['uuid'])){

	$query = "SELECT 
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
	appointments.updated_at DESC;";

$details = mysqli_query($conn, $query);

$record = mysqli_fetch_assoc($details);

if(empty($record['user_uuid'])){
	$record['user_uuid'] = 'null';
}
}else{

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


<div id="stlChanger">
	<div class="blockChanger bgChanger">
		<a href="#" class="chBut"><i class="fas fa-sliders-h"></i></a>
		<div class="chBody">

			<?php if (!empty($_SESSION['uuid'])) { ?>
				<?php if ($_SESSION['uuid'] == $record['user_uuid']) { ?>
					<?php if ($record['status'] == 1) { ?>
						<div class="container mt-3">
							<h2>Dưới đây là lịch hẹn gần đây của bạn (Đã được xác nhận)</h2>
							<table class="table">
								<thead class="table-info">
									<tr>
										<th>Tình trạng</th>
										<th>Vấn đề</th>
										<th>Thứ</th>
										<th width="35%" >Thời gian</thư>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><?php echo $record['status'] == 1 ? '<button class="btn-success btn-sm"> Đã xác nhận </button>' : '<button class="btn-danger btn-sm"> Chưa xác nhận </button>'; ?>
										</td>
										<td><?php echo $record['note'] ?></td>
										<td><?php echo $dayNames[$record['day_id']] ?></td>
										<td><?php echo $record['end_time']. ' - ' . $record['start_time']; ?></td>

									</tr>
								</tbody>
							</table>
						</div>
					<?php } else { ?>
						<p>lịch hẹn chưa được xác nhận</p>
					<?php } ?>
				<?php } else { ?>
					
					<p>bạn chưa có lịch hẹn</p>
				<?php } ?>
			<?php } else { ?>
				<p><a href="">Đăng nhập</a>để hiển thị lịch hẹn sắp tới của bạn</p>
			<?php } ?>


		</div>
	</div>
</div>