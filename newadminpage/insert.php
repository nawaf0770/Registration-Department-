<?php
include '../conn.php';
session_start();
// echo "jcl";
if(isset($_POST['login'])){
    $user_name=$_POST['user_name'];
    // echo $user_name;
    $password= $_POST['password'];
    $h_pass = md5($password);
    // echo  $h_pass;
    $roll=$_POST['roll'];
    // echo $roll;
    $fname=$_POST['fname'];
    // echo $fname;
    $lname=$_POST['lname'];
    // echo $lname;
    $age = $_POST['age'];
    // echo $age;
    $state = $_POST['state'];
    // echo $state;
    $typee = $_POST['typee'];
    // echo $typee;
    $depart = $_POST['depart'];
    // echo $depart;
    $period=$_POST['period'];
    // echo $period;
    $loca = $_POST['loca'];
    // echo $loca;
    $phone = $_POST['phone'];
    // echo $phone;
    $six = $_POST['six'];
    // echo $six;
    $doc_id=$_POST['doc_id'];
    // echo $doc_id;
    $doctor_id=$_POST['doctor_id'];
    // echo $doctor_id;
    $nutt_id=$_POST['select-nat-doctor'];
    // echo $nutt_id;

    

    $sql2 = "INSERT INTO employes (username, Password, role)  VALUES ( '$user_name',' $h_pass', '$roll')";
    $result2=mysqli_query($conn,$sql2) or die(mysqli_error($conn));
    if($result2){
    echo "تم";
    header("Location: ../newadminpage/index.php");}}
    ///////////////////////
    echo "                  ";
$sql3="SELECT * FROM employes WHERE U_id = LAST_INSERT_ID();";
$resultt = mysqli_query($conn,$sql3) or die(mysqli_error($conn));
if($resultt==TRUE){
$rows=mysqli_num_rows($resultt);//function to qet all the rows in database 
//check the num of rows
if($rows > 0){
while($rows=mysqli_fetch_assoc($resultt)){
    $laaa= $rows['U_id'];
    echo $laaa;


if ($roll == 'doctor'){
    $query = "INSERT INTO doctor (user_id ,d_fname, d_lname, d_sex, d_period, d_phone, d_department, d_address)
     VALUES ('$laaa','$fname', '$lname','$six', '$period','$phone', '$depart','$loca')";
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));}


 if ($roll == 'nutrition'){
    $query2 = "INSERT INTO nutrition (user_id ,nut_fname, nut_lname, nut_sex, nut_period, nut_phone, nut_address)
     VALUES ('$laaa','$fname', '$lname','$six', '$period','$phone', '$loca')";
    $result2 = mysqli_query($conn, $query2) or die(mysqli_error($conn));}
    if ($roll == 'patient'){
        $query4 = "INSERT INTO patient (user_id ,doctor_id ,p_fname, p_lname, p_sex, p_phone)
         VALUES ('$laaa','$doc_id','$fname', '$lname','$six','$phone')";
        $result4 = mysqli_query($conn, $query4) or die(mysqli_error($conn));}
    if ($roll == 'nurse'){
            $query5 = "INSERT INTO nurse (user_id ,doctor_id ,nutrition_id , n_fname, n_lname, n_sex, n_period, n_address, n_phone)
             VALUES ('$laaa','$doctor_id','$nutt_id', '$fname','$lname','$six', '$period',' $loca','$phone ')";
            $result5 = mysqli_query($conn, $query5) or die(mysqli_error($conn));}


   

 }}}

    
// 

?>
