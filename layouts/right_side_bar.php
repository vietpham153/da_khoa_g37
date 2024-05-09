<?php
$query = "SELECT appointments.user_uuid, appointments.day_id, appointments.shift_id, appointments.note, appointments.status, appointments.updated_at, shifts.name FROM appointments 
join shifts on appointments.shift_id = shifts.id
ORDER BY updated_at DESC";
$details = mysqli_query($conn, $query);

$record = mysqli_fetch_assoc($details);
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
										<th>Ca</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><?php echo $record['status'] == 1 ? '<button class="btn-success btn-sm"> Đã xác nhận </button>' : '<button class="btn-danger btn-sm"> Chưa xác nhận </button>'; ?>
										</td>
										<td><?php echo $record['note'] ?></td>
										<td><?php echo $dayNames[$record['day_id']] ?></td>
										<td><?php echo $shiftNames[$record['shift_id']] ?></td>
									</tr>
								</tbody>
							</table>
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
</div>