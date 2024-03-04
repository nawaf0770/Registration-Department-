<?php
include '../conn.php';

session_start();
// $doctor_id = $_SESSION["D_id"];
$dormitory ="";
$number_room="";
$dia_iddd="";

if(isset($_POST['save'])) {
    $doctor_id = $_SESSION["D_id"];
    $nut_id=$_POST['nut_id'];
    $p_id=$_POST['pat_id'];
    // $date = $_POST['date'];
    $diabetess = $_POST['diabetess'];
    $fats_checkup = $_POST['fats_checkup'];
    $hypertension = $_POST['hypertension'];
    $dia_description = $_POST['dia_description'];
    $med_description = $_POST['med_description'];
    $nurse_id = $_POST['nurse_id'];

    // $dia_id = $_POST['dia_id'];
   

    // Check if the allergy checkbox is checked
    if (isset($_POST['allergy-check']) && $_POST['allergy-check'] == 's1') {
        $allergy  = $_POST['allergy_area'];
    } else {
        $allergy = '';
    }

    if (isset($_POST['state'])) {
        $states = $_POST['state'];
    }
    if (isset($_POST['if_need_admitting']) && $_POST['if_need_admitting'] == '1') {
        $if_need_admitting=$_POST['if_need_admitting'];
        $dormitory = $_POST['dormisory'];
        $number_room = $_POST['number_room'];
    }
    // Insert the patient data into the database
    $sql = "INSERT INTO diagnosis (doctor_id, nutrition_id, patient_id, date, diabetess, state, fats_checkup, hypertension, allergy, dia_description, med_description,if_need_admit) 
    VALUES ('$doctor_id', '$nut_id', ' $p_id', NOW(), '$diabetess', '$states', '$fats_checkup', '$hypertension', '$allergy', '$dia_description', '$med_description','$if_need_admitting')";
    //
    $result=$conn->query($sql);
    $sql3="SELECT * FROM diagnosis WHERE dia_id = LAST_INSERT_ID();";
$result = mysqli_query($conn,$sql3) or die(mysqli_error($conn));
if($result==TRUE){
$rows=mysqli_num_rows($result);//function to qet all the rows in database 
//check the num of rows
if($rows > 0){
while($rows=mysqli_fetch_assoc($result)){
    $laaa= $rows['dia_id'];
    if($result){
    
    $sql2 = "INSERT INTO admit_a (dia_id, nutrition_id, dormisory, room)  VALUES ( '$laaa', '$nut_id', '$dormitory ', '$number_room')";
    $result2=mysqli_query($conn,$sql2) or die(mysqli_error($conn));
     // التحقق من عدد الصفوف المتأثرة في الجدول
     if (mysqli_affected_rows($conn) > 0) {
        // استرداد مفتاح الأساسي الخاص بالصف الرئيسي المدخل حديثًا
      $admit_a = mysqli_insert_id($conn);
   // التحقق من وجود مفتاح أساسي صحيح في جدول meal_items
   $check_query = "SELECT * FROM admit_a WHERE admit_id = '$admit_a'";
   $check_result = mysqli_query($conn, $check_query);

   if (mysqli_num_rows($check_result) > 0) {
       // إضافة القيمة إلى جدول admit_meal
       $query4 = "INSERT INTO admit_nurse (admit_id, nurse_id)
                  VALUES ('$admit_a', '$nurse_id')";
       $result4 = mysqli_query($conn, $query4);
       header("Location: ../Doctor-page/List-of-pationt.php");

    }}}}}}}


?>