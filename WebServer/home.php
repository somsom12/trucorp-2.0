<?php
$conect = mysqli_connect("172.19.0.2","root","mos","trucorp");
if(!conect){
echo "Not Connected to Database". PHP_EOL;
exit;
}

$query = $conect->query("SELECT * FROM users");
while($data=$query->fetch_assoc()){
echo $data['ID'];
echo $data['NAMA'];
echo $data['KANTOR'];

echo "==============================================================";

}
?>
