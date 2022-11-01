<?php
if (isset($_POST['input'])){
    $nama = $_POST['nama'];
    $posisi = $_POST['posisi'];
    $alamat = $_POST['alamat'];
    $umur = $_POST['umur'];
    $kontak = $_POST['kontak'];
echo "<TABLE BORDER=0 width=50%>
<tr>
<td> Nama </td>
<td>:</td>
<td>$nama</td
</tr>
<tr>
<td> Posisi </td>
<td>:</td>
<td>$posisi</td
</tr>
<tr>
<td> Alamat </td>
<td>:</td>
<td>$alamat</td
</tr>
<tr>
<td> Umur </td>
<td>:</td>
<td>$umur</td
</tr>
<tr>
<td> Kontak </td>
<td>:</td>
<td>$kontak</td
</tr>
</table>
";}

?>