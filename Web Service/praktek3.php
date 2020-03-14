<?php
 
$connect=mysqli_connect("localhost", "id12789045_prakteklapangan", "fahindra","id12789045_pkl");
 
$query = "SELECT * from projek ";
$result = mysqli_query($connect,$query) or die(mysqli_error());
 
$arr = array();
while ($row = mysqli_fetch_assoc($result)) {
    $temp = array(

    "nama" => $row["nama"],
    "jurusan" => $row["jurusan"], 
    "nisn" => $row["nisn"]);
   
    array_push($arr, $temp);
}
 
$data = json_encode($arr);
 
echo "{\"MENAMPILKAN DATA projek\":" . $data . "}";
?>
