
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN PAGE</title>
    <link rel="stylesheet" href="css/newadmin.css">
</head>

<body class="page">

    <h3 style="    margin-bottom: 1px; margin-top: -4px; font-weight: bold;"><img src="img/02.png" alt=""
            class="logo_img">Safe Attention</h3>
    <nav>
    </nav>

    <section>




        </div>
              

             <?php 
                include '../conn.php';
                $id= $_GET['id'];

                ?>

            <!--  -->
            <div class="container">
            <!-- 'admin','doctor','nutrition','patient','nurse' -->
            <?php
            include '../conn.php';
            $id = $_GET['id'];
            $sql="SELECT *FROM doctor WHERE doctor_id = ".$id;
            $data= mysqli_query($conn,$sql);
            $query= mysqli_fetch_array($data);
            $user_id=$query['user_id'];
            ?>
            <form action="" method="POST" class="sort">
                <div class="user_details">

                <div class="input_box" style="display: flex;" id="">
                    <span class="details">الاسم</span>
                    <div class="two">
                        <input type="text" name="fname" value="<?=$query['d_fname']?>">
                        
                    </div>
                </div>
                <div class="input_box" id="" name="lname" style="display: flex;">
                        <span class="details">اللقب</span>
                        <input type="text" name="lname" value="<?=$query['d_lname']?>">
                    </div>

                    <div class="input_box" id="type" style="display: flex;">
                        <span class="details">الجنس</span>

                        <input type="text" name="typee" value="<?=$query['d_sex']?>">
                    </div>

                    <div class="input_box" id="section-for-info" name="depart" style="display: flex;">
                        <span class="details">القسم</span>
                        <input type="text" name="depart" value="<?=$query['d_department']?>">
                    </div>
                    <div class="input_box" id="period" style="display: flex;">
                        <span class="details">الفترة</span>
                        <select name="period" id="">
                            <option value="morning"><?=$query['d_period']?> صباحي</option>
                            <option value="evening">مسائي</option>
                        </select>
                    </div>

                    <div class="input_box" id="location" name="loca" style="display: flex;">
                        <span class="details"> الموقع</span>
                        <input type="text" name="loca" value="<?=$query['d_address']?>">
                    </div>
                    <div class="input_box" name="phone" style="display: flex;" id="phone">
                        <span class="details">رقم الهاتف</span>
                        <input type="text" name="phone" value="<?=$query['d_phone']?>">
                    </div>
                    
                    </div>
                <div class="gender_details">

                    <div class="gender_div"  style="display: flex;" id="six">
                        <!-- <span class="gender_title">تحديد الجنس</span>
                        <select name="period" id="">
                            <option value="morning"> صباحي</option>
                            <option value="evening">مسائي</option>
                        </select> -->
                        <div class="gender_checkbox">
                            <!-- <input type="checkbox" name="six">
                            <label class="gender_checkbox_title" for="">ذكر</label> -->
                        </div>
                        <div class="gender_checkbox">
                            <!-- <input type="checkbox" name="six">
                            <label class="gender_checkbox_title" for="">أنثى</label> -->
                        </div>
                    </div>
                    </div>
                    <?php
                    $sql3="SELECT * FROM employes WHERE U_id = $user_id";
                     $data3= mysqli_query($conn,$sql3);
                    $query= mysqli_fetch_array($data3);
                    ?>
                    <div class="input_box form-heden" id="form-hiden1" style="display: flex;">
                        <span class="details">اسم المستخدم</span>
                        <input type="text" name="user_name" value="<?=$query['username']?>">
                    </div>

                    <div class="input_box form-heden" id="form-hiden2" style="display: flex;">
                        <span class="details">كلمة المرور</span>
                        <input type="text" name="password" value="<?=$query['Password']?>">
                    </div>
                    <input type="submit" name="login"  value="إضافة">
                </div>

            </form>
            <?php 
           if(isset($_POST['login'])) {
            $f_name = mysqli_real_escape_string($conn, $_POST['fname']);
            $l_name = mysqli_real_escape_string($conn, $_POST['lname']);
            $six = mysqli_real_escape_string($conn, $_POST['typee']);
            $depart = mysqli_real_escape_string($conn, $_POST['depart']);
            $period = mysqli_real_escape_string($conn, $_POST['period']);
            $address = mysqli_real_escape_string($conn, $_POST['loca']);
            $phone = mysqli_real_escape_string($conn, $_POST['phone']);
            $user_name = mysqli_real_escape_string($conn, $_POST['user_name']);
            $password = mysqli_real_escape_string($conn, $_POST['password']);
            $h_pass = md5($password);
        
            $sql2 = "UPDATE doctor SET d_fname='$f_name', d_lname='$l_name', d_sex='$six', d_department='$depart', d_period='$period', d_address='$address', d_phone='$phone' WHERE doctor_id='$id'";
            $result2 = mysqli_query($conn, $sql2) or die(mysqli_error($conn));
        
            $sql3 = "UPDATE employes SET username='$user_name', Password='$h_pass' WHERE U_id='$user_id'";
            $result3 = mysqli_query($conn, $sql3)or die(mysqli_error($conn));
        
            if($result2 && $result3) {
                // رسالة تأكيد النجاح
                echo "تم تحديث البيانات بنجاح!";
            } else {
                // رسالة خطأ في حالة فشل الاستعلام
                echo "خطأ في تحديث البيانات!";
            }
        }

            // if($sql2){
            //     if($sql3){           
                // $sql4="SELECT * FROM doctor WHERE doctor_id  = $id";
                // $sql5="SELECT * FROM employes WHERE U_id  = $user_id";
                // $result4 = mysqli_query($conn,$sql4) or die(mysqli_error($conn));
                // $result5 = mysqli_query($conn,$sql5) or die(mysqli_error($conn));
                // while($row=mysqli_fetch_assoc($result4)){
                //     $user_id =row['user_id'];
                //     $f_name=$row['d_fname'];
                //     $d_lname=$row['d_lname'];
                //     $d_sex=$row['d_sex'];
                //     $d_period=$row['d_period'];
                //     $d_phone=$row['d_phone'];
                //     $d_department=$row['d_department'];
                //     $d_address=$row['d_address'];

                


            //  header("Location: ../newadminpage/index.php");
                
            //  $query4 = "INSERT INTO doctor (user_id ,d_fname, d_lname, d_sex, d_period, d_phone, d_department, d_address)
            //  VALUES ('$user_id','$f_name', '$l_name','$six', '$period','$phone', '$depart','$address')";

              ?>
        
        </div>

    </section>
  
</body>

</html>