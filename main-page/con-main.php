<?php
session_start();
include '../conn.php';

if(isset($_POST['user-name']) && isset($_POST['password'])){

      $username = $_POST['user-name'];
      $password = $_POST['password'];
    
    

  if(empty($username)){
    $val="الرجاء ادخال اسم المستخدم";
    exit();
  }elseif(empty($password)){
    $val2= "الرجاء ادخال كلمة المرور";
    exit();
  }else{
   
  
   // hashing the password
 
    $password = md5($password);
    $sql = "SELECT * FROM employes WHERE username	 = '$username' 
    AND Password = '$password'";
    $result= mysqli_query($conn,$sql);
    if (mysqli_num_rows($result) === 1){
      //the user must be unique 
      $row = mysqli_fetch_assoc($result);
      //$role = $row['role'];
      
      if($row['Password'] === $password && $row['username'] == $username ){
      
        // Check role 'admin','doctor','nutrition','patient','nurse'

        if ($row['role'] == 'admin') {
            header("Location: ../admin-page/index.php");
            exit();

        }elseif($row['role'] == 'doctor'){
          header("Location: ../nurse/nurse.php");
            exit();
        }
      }else{
        header("location:main-page.php");
      }
    }
    }
  }else
  { $error="اسم المستخدم او كلمة المرور خاطئة";
  }
  ?>
  


    
      
    
  




//include_once 'main-page.php';

/*if($_SERVER["REQUEST_METHOD"] == "POST") {
  // username and password sent from form 
  
  $myusername = mysqli_real_escape_string($conn,$_POST['user-name']);
  $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
  
  $sql = "SELECT * FROM users WHERE U_Name = '$myusername' and Password = '$mypassword'";
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  $active = $row['U_id'];
  $role = $row['role'];
  $count = mysqli_num_rows($result);
    
    // If result matched $myusername and $mypassword, table row must be 1 row
  
    if($count > 0) {
    
        // 0 === user
        // 1 === Doc
        // 2 === ner
        // 3 === admin
        
          if ($role == 0) {
            header("location:../nurse/nurse.php");
          }elseif($role == 1){
            header("location:../admin-page/index.php");
          }elseif($role == 2){
            header("location:../Doctor-page/nurse.php");
          }elseif($role == 3){
            header("location:../Doctor-page/nurse.php");
          }



      
    }else{
      echo "you don't have acount";
    }
}
*/


?> 