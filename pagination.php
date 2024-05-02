
<?php
if($current_page > 3){
    $first_page = 1;
    ?>
    <a  href="?per_page=<?= $doctors_per_page ?>&page=<?= $first_page ?>">Trang đầu</a>
    <?php
}
if($current_page > 1){
    $prev_page = $current_page - 1;
    ?>
    <a  href="?per_page=<?= $doctors_per_page ?>&page=<?= $prev_page ?>">Trang trước</a>
    <?php
}
for ($num =1; $num <= $total_page; $num++) { ?>
<?php if($num != $current_page) { ?>
    <?php if($num >$current_page - 3 && $num < $current_page + 3) { ?>
        <a  href="?per_page=<?= $doctors_per_page ?>&page=<?= $num ?>"><?= $num ?></a>
    <?php } ?>
<?php }else { ?>
    <a class="active"><?=$num?></a>

<?php } ?>

<?php } ?>
<?php
if($current_page < $total_page - 1){
    $next_page = $current_page + 1;
    ?>
    <a  href="?per_page=<?= $doctors_per_page ?>&page=<?= $next_page ?>">Trang sau</a>
    <?php
}
if($current_page < $total_page - 3){
    $end_page = $total_page;
    ?>
    <a  href="?per_page=<?= $doctors_per_page ?>&page=<?= $end_page ?>">Trang cuối</a>
    <?php
} ?>