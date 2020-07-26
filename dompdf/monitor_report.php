<?php
include('db.php');
require_once("autoload.inc.php");
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$query = mysqli_query($koneksi,"select * from compost");
$html = '<center><h3>Report</h3></center><hr/><br/>';
$html .= '<table border="1" width="100%">
 <tr>
 <th>machineID</th>
 <th>compostID</th>
 <th>din</th>
 <th>tin</th>
 <th>dout</th>
 <th>tout</th>
 <th>sisaMakanan</th>
 <th>sisaDapur</th>
 <th>habukKelapa</th>
 <th>serbukKayu</th>
 <th>kulitBuahan</th>
 <th>kulitTelur</th>
 <th>daunReput</th>
 </tr>';
$no = 1;
while($row = mysqli_fetch_array($query))
{
 $html .= "<tr>
 <td>".$no."</td>
 <td>".$row['machineID']."</td>
 <td>".$row['compostID']."</td>
 <td>".$row['din']."</td>
 <td>".$row['tin']."</td>
 <td>".$row['dout']."</td>
 <td>".$row['tout']."</td>
 <td>".$row['sisaMakanan']."</td>
 <td>".$row['sisaDapur']."</td>
 <td>".$row['habukKelapa']."</td>
 <td>".$row['serbukKayu']."</td>
 <td>".$row['kulitBuahan']."</td>
 <td>".$row['kulitTelur']."</td>
 <td>".$row['daunReput']."</td>
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