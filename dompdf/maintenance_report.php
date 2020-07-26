<?php
include('db.php');
require_once("autoload.inc.php");
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$query = mysqli_query($koneksi,"select * from maintenance");
$html = '<center><h3>Report</h3></center><hr/><br/>';
$html .= '<table border="1" width="100%">
 <tr>
 <th>machineID</th>
 <th>maintenanceID</th>
 <th>report_date</th>
 <th>issue</th>
 </tr>';
$no = 1;
while($row = mysqli_fetch_array($query))
{
 $html .= "<tr>
 <td>".$no."</td>
 <td>".$row['machineID']."</td>
 <td>".$row['maintenanceID']."</td>
 <td>".$row['report_date']."</td>
 <td>".$row['issue']."</td>

 </tr>";
 $no++;
}
$html .= "</html>";
$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'landscape');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream('report.pdf');
?>