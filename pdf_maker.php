<?php
require 'check_user.php';
include_once ('tcpdf_6_2_13/tcpdf/tcpdf.php');

$id = $_GET['id'];

$query = "SELECT 
    medical_records.*, 
    doctors.first_name as doctor_first_name, 
    doctors.last_name as doctor_last_name,
    patients.first_name as patient_first_name, 
    patients.last_name as patient_last_name,
    numbers.number,
    rooms.name
FROM 
    medical_records
JOIN 
    number_medical_records ON medical_records.id = number_medical_records.medical_record_id
JOIN 
    numbers ON number_medical_records.number_id = numbers.id
JOIN 
    rooms ON numbers.room_id = rooms.id
JOIN 
    users as doctors ON medical_records.doctor_uuid = doctors.uuid
JOIN 
    users as patients ON medical_records.user_uuid = patients.uuid
WHERE 
    medical_records.id = '$id'
AND 
    medical_records.user_uuid = '{$_SESSION['uuid']}';";

$medical_details = mysqli_query($conn, $query);

$count = mysqli_num_rows($medical_details);
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
if ($count > 0) {
    $data_row = mysqli_fetch_array($medical_details, MYSQLI_ASSOC);

    // Định dạng ngày khám bệnh
    $exam_date_formatted = date("d-m-Y", strtotime($data_row['exam_date']));

    //----- Code for generate pdf
    $pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);
    $pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
    $pdf->setFooterFont(array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
    $pdf->SetDefaultMonospacedFont('helvetica');
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
    $pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);
    $pdf->setPrintHeader(false);
    $pdf->setPrintFooter(false);
    $pdf->SetAutoPageBreak(TRUE, 10);

    // Sử dụng font hỗ trợ Unicode
    $pdf->SetFont('dejavusans', '', 12);
    $pdf->AddPage(); //default A4
    //$pdf->AddPage('P','A5'); //when you require custome page size 

    $content = '';

    $content .= '
    <style type="text/css">
    body{
    font-size:12px;
    line-height:24px;
    font-family:"Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
    color:#000;
    }
    </style>    
    <table cellpadding="0" cellspacing="0" style="border:1px solid #ddc;width:100%;">
    <table style="width:100%;" >
    <tr><td colspan="2">&nbsp;</td></tr>
    <tr style="font-size:24px;"><td colspan="2" align="center"><b>PHIẾU KHÁM BỆNH</b></td></tr>
    <tr style="font-size:18px;"><td colspan="2" align="center"><b>Bệnh viện đa khoa G37</b></td></tr>
    <tr><td></td></tr>
    <tr><td colspan="2"><b>TÊN KHÁCH HÀNG: ' . $data_row['patient_last_name'] . ' ' . $data_row['patient_first_name'] . ' </b></td></tr>
    <tr><td ><b>NGÀY XUẤT PHIẾU: ' . date("d-m-Y") . '</b> </td></tr>
    <tr><td></td></tr>
    <tr style="font-size:20px;"><td colspan="2" align="center"><b>THÔNG TIN PHIẾU :</b></td></tr>
    <tr><td></td></tr>
    <tr><td colspan="2"><b>
            SỐ THỨ TỰ KHÁM BỆNH : ' . $data_row['number'] . '
            </b>
        </td>
    </tr>
    <tr><td colspan="2"><b>
            PHÒNG KHÁM : ' . $data_row['name'] . '
            </b>
        </td>
    </tr>
    <tr><td colspan="2"><b>
            BÁC SĨ KHÁM : ' . $data_row['doctor_last_name'] . ' ' . $data_row['doctor_first_name'] . '
            </b>
        </td>
    </tr>
    <tr><td colspan="2"><b>
            BỆNH : ' . $data_row['disease'] . '
            </b>
        </td>
    </tr>
    <tr><td colspan="2"><b>
            NGÀY KHÁM : ' . $exam_date_formatted . '
            </b>
        </td>
    </tr>
    <tr><td colspan="2"><b>
            THỜI GIAN KHÁM BỆNH : ' . $shiftNames[$data_row['shift_id']] . '
            </b>
        </td>
    </tr>
    
    <tr><td colspan="2" align="center">------------------------</td></tr>
    <tr><td colspan="2" align="center"><b>BỆNH VIỆN ĐA KHOA G37 RẤT HÂN HẠNH KHI ĐƯỢC PHỤC VỤ QUÝ KHÁCH</b></td></tr>
    <tr><td colspan="2">&nbsp;</td></tr>
    </table>
</table>';
    $pdf->writeHTML($content);


    $datetime = date('dmY');
    $file_name = "BVDDKG37_" . $datetime . ".pdf";
    ob_end_clean();

    if ($_GET['ACTION'] == 'VIEW') {
        $pdf->Output($file_name, 'I'); // I means Inline view
    }

    //----- End Code for generate pdf

} else {
    echo 'Không tìm thấy bản ghi nào để xuất PDF.';
}
?>