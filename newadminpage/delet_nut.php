<?php
include '../conn.php';
$id = $_GET['id'];
// $sql="DELETE FROM doctor WHERE doctor_id =".$id;
// $data=mysqli_query($conn,$sql);
// if($data){
    // echo "تم";
$sql3="SELECT * FROM nutrition WHERE nutrition_id = ".$id;
$resultt = mysqli_query($conn,$sql3) or die(mysqli_error($conn));
if($resultt==TRUE){
$rows=mysqli_num_rows($resultt);//function to qet all the rows in database 
//check the num of rows
if($rows > 0){
while($rows=mysqli_fetch_assoc($resultt)){
    $nutrition_id= $rows['nutrition_id'];
    $user_id= $rows['user_id'];
    echo  $nutrition_id;
    echo "         ";
    echo $user_id;
    $sql="DELETE FROM nutrition WHERE nutrition_id =".$nutrition_id;
    $data=mysqli_query($conn,$sql);
    $sql4="DELETE FROM employes WHERE U_id =".$user_id;
    $data=mysqli_query($conn,$sql4);
echo " كفو";


}}}
?>