<?php
 echo md5("12345");
include '../conn.php';
// $nut_idd= "8"; 
// include '../conn.php';
// session_start();
// if(!isset($_SESSION['patent_id'])){
//     header("Location: ../main-page/main-page.php");
//  }
//  $patent_id = $_SESSION['patent_id'];
//  echo $patent_id;
?>
<?php
// "SELECT diagnosis.nutrition_id , diagnosis.patient_id, patient.p_fname ,patient.patient_id 
// FROM patient
// JOIN order_items ON diagnosis.patient_id = patient.patient_id" ;
// $sql = "SELECT * FROM nutrition WHERE nutrition_id = $nut_idd ";
// $result = mysqli_query($conn, $sql);

// if ($result && mysqli_num_rows($result) > 0) {
//   $row = mysqli_fetch_assoc($result);
//   $nut_id = $row['nutrition_id'];

//   $sql2 = "SELECT * FROM diagnosis WHERE nutrition_id = $nut_id ";
//   $result2 = mysqli_query($conn, $sql2);

//   if ($result2 && mysqli_num_rows($result2) > 0) {
//     while ($row2 = mysqli_fetch_assoc($result2)) {
//       $p_id = $row2['patient_id'];

//       $sql3 = "SELECT * FROM patient WHERE patient_id =$p_id ";
//       $result3 = mysqli_query($conn, $sql3);

//       if ($result3 && mysqli_num_rows($result3) > 0) {
//         while ($row3 = mysqli_fetch_assoc($result3)) {
//           $p_fname = $row3['p_fname'];
//           $p_lname = $row3['p_lname'];

//           echo "اسم المريض: " . $p_fname . " " . $p_lname;
//         }
//       }
//     }
//   }
// }
// ةىنننننننننننننننننننننننننننننننننننننننننننننننن
// $sql = "SELECT * FROM diagnosis WHERE nutrition_id = $nut_id ";
// $result = mysqli_query($conn, $sql);
// if ($result && mysqli_num_rows($result) > 0) {
//   while ($row = mysqli_fetch_assoc($result)) {
//     $patient_id = $row['patient_id'];

//     $sql2 = "SELECT * FROM patient WHERE patient_id = $patient_id";
//     $result2 = mysqli_query($conn, $sql2);

//     if ($result2 && mysqli_num_rows($result2) > 0) {
//       while ($row2 = mysqli_fetch_assoc($result2)) {
//         $p_fname = $row2['p_fname'];
//         $p_lname = $row2['p_lname'];
//         $p_fname = $row2['patient_id'];

//         echo "اسم المريض: " . $p_fname . " " . $p_lname;
//       }
//     }
//   }
// }
// تنماتناااااااااااااااااااااااااااااااااااااااااا
//  echo md5("ali");

// $nameError="";
// $passwordError="";
// $nameORpassError="";
// session_start();
// include '../conn.php';
// if(isset($_POST['user-name']) && isset($_POST['password'])){
    
//       $username = $_POST['user-name'];
//       $password = $_POST['password'];
    
    
//   if(empty($username)){
//     $nameError="الرجاء ادخال اسم المستخدم";
//     //exit();
//   }
//   elseif(empty($password)){
//     $passwordError= "الرجاء ادخال كلمة المرور";
//     //exit();
//   }else{
   
  
//    // hashing the password
 
//     $password = md5($password);
//     $sql = "SELECT * FROM employes WHERE username	 = '$username' 
//     AND Password = '$password'";
//     $result= mysqli_query($conn,$sql);
//     if (mysqli_num_rows($result) === 1){
//       //the user must be unique 
//       $row = mysqli_fetch_assoc($result);
//       //$role = $row['role'];
      
//       if($row['Password'] === $password && $row['username'] == $username ){
      
//         // Check role 'admin','doctor','nutrition','patient','nurse'

//         if ($row['role'] == 'admin') {
//             header("Location: ../admin-page/index.php");
//             exit();

//         }elseif($row['role'] == 'doctor'){
//           header("Location: ../nurse/nurse.php");
//             exit();
//         }else{
//             header("location:main-page.php");
//           }
//         }
//         }
//       else
//       { $nameORpassError="اسم المستخدم او كلمة المرور خاطئة";
//       }}}

?>