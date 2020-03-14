<html>
<head>
<title>Rest Web Services</title>
</head>
<body>
<?php
if (isset ($_POST['nama'])) {
$url = 'https://fahindra.000webhostapp.com/praktek2.php';
//$data = "[{\"nama\":\".$_POST['nama'].\",\"jurusan\":\".$_POST['jurusan'].\",\"nisn\":\".$_POST['nisn'].\"}]";//
$data="{\"nama\":\"".$_POST['nama']."\",\"jurusan\":\"".$_POST['jurusan']."\",\"nisn\":\"".$_POST['nisn']."\"}";
echo "datanya ".$data;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$response = curl_exec($ch);
echo "response ".$response;
curl_close($ch);
}
?>
<form method="POST" action="praktek1.php">
<table>
<tr>
<td>nama</td>
<td><input type="text" name="nama" id="nama"></td>
</tr>
<tr>
<td>jurusan</td>
<td><input type="text" name="jurusan" id="jurusan"></td>
</tr>
<tr>
<td>nisn</td>
<td><input type="text" name="nisn" id="nisn"></td>
</tr>
<tr>
<tr>
<td><input type="submit" name="submit" id="submit" value="Tambah"></td>
<td></td>
</tr>
</table>
</form>
</body>
</html>