<?php
include '../conn.php';
$id = $_GET['id'];
// echo $id;
// $sql="DELETE FROM doctor WHERE doctor_id =".$id;
// $data=mysqli_query($conn,$sql);
// if($data){
    // echo "تم";
$sql3="SELECT * FROM patient WHERE patient_id  = ".$id;
$resultt = mysqli_query($conn,$sql3) or die(mysqli_error($conn));
if($resultt==TRUE){
$rows=mysqli_num_rows($resultt);//function to qet all the rows in database 
//check the num of rows
if($rows > 0){
while($rows=mysqli_fetch_assoc($resultt)){
    $patient_id = $rows['patient_id'];
    $user_id= $rows['user_id'];
    echo  $patient_id ;
    echo "         ";
    echo $user_id;
    $sql="DELETE FROM patient WHERE patient_id =".$patient_id;
    $data=mysqli_query($conn,$sql);
    $sql4="DELETE FROM employes WHERE U_id =".$user_id;
    $data=mysqli_query($conn,$sql4);
echo " كفو";


}}}
?>