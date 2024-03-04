<?php 
include '../conn.php';
session_start();
//
if(!isset($_SESSION["D_id"])){
   header("Location: ../main-page/main-page.php");
}
$doctor_id = $_SESSION["D_id"];
// $id = $_GET['id'];
if (isset($_GET['id'])) {
    // استخدام قيمة المتغير المرسلة باستخدام GET هنا
    $id = $_GET['id'];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor</title>
    <link rel="stylesheet" href="CSS/ForPationt.css">
</head>

<body>
        
    <div class="back-img"></div>
    <!-- <header class="headerr">
        <ul class="nav">
            <li class="a"><a href=""><b>Home</b></a></li>
            <li class="a"><a href=""><b>About</b></a></li>
            <li class="a"><a href=""><b>Contact</b></a></li>
            <li class="a"><a href=""><b>Facility</b></a></li>
            <li class="a"><a href=""><b>Review</b></a></li>
            <li class="a"><a href=""><b>Post</b></a></li>
        </ul>
        <img src="Img/IMG-20230324-WA0004.jpg" class="img-header" alt="">
    </header> -->
    <?php
                        $sql2 = "SELECT * FROM `doctor` WHERE doctor_id = $doctor_id";
                $result2 = mysqli_query($conn,$sql2);
                if($result2==TRUE){
                $rows=mysqli_num_rows($result2);//function to qet all the rows in database 
                //check the num of rows
                if($rows > 0){
                    //we have data in database
                    while($rows=mysqli_fetch_assoc($result2))
                    {
                        // $p_id = $rows['patient_id'];
                        ?>
    <header class="header"> 
        <a href="#" class="logo" > <i class="header_line" ></i> 
          <img width="40px" height="40px" style="display: inline; margin-bottom: -10px;" src="img/03.png" alt=""> Safe Attention</a>
         <nav style="direction: rtl;" class="navbar">
             <a href="#http://localhost/hospital/mini-project/main-page/main-page.php"> الصفحة الرئيسية</a>
             <!-- <a href="#login"> تسجيل الدخول</a> -->
             <a href="#aboutas">  الدكتور :</a>
             <a href="#pncs"> <?php echo $rows['d_fname']."  ".$rows['d_lname'];  ?></a>
             <a href="#services"> <?php echo $rows['d_department'] ; ?></a>
         </nav>

    </header> 
    <?php }}}?>

    <section class="pos">
        <section class="all-patiot" id="pati">
                            <?php
                        $sql2 = "SELECT * FROM `patient` WHERE doctor_id = $doctor_id";
                $result2 = mysqli_query($conn,$sql2);
                if($result2==TRUE){
                $rows=mysqli_num_rows($result2);//function to qet all the rows in database 
                //check the num of rows
                if($rows > 0){
                    //we have data in database
                    while($rows=mysqli_fetch_assoc($result2))
                    {
                        // $p_id = $rows['patient_id'];
                        ?>
            <div class="pationt">
                            <div>
                                <img src="Img/patient.png">
                                <p style="text-align:center;">
                                <label for="c"> <span style="color: black; direction:rtl;">  اســـم المريض :</label>
                                 <?php echo $rows['p_fname']."  ". $rows['p_lname'];?> 
                                    <br>
                                    <br>
                                    <label for="c"> <span style="color: black;"><?php echo $rows['p_age'];?></span>  
                                               : العمـــر</label>
                                    <br>
                                 </br>
                                 <br>
                                </p>
                            </div>
                            <div>
                                <!-- <button class="checkup open">فحص المريض</button> -->
                                <button class="checkup open"><a style="text-decoration: none; color:black;" href='List-of-pationt.php?id=<?= $rows['patient_id'] ?>'>فحص المريض </a></button>
                                <!-- <button class="data-pationt">بيانات المريض</button> -->
                            </div>
                        </div>
                        <?php 

                    }

                }else{
                    //we dont have data in database

                }}?>
            <!-- <div class="pationt">
                <div>
                    <img src="Img/human/3eba9b54d023f488041f36e0efdf7428.jpg">
                    <p style="text-align:center;">
                        <br>
                        <span>20 </span>
                    </p>
                </div>
                <div>
                    <button class="checkup open">فحص المريض</button>
                    <button class="data-pationt">بيانات المريض</button>
                </div>
            </div>
            <div class="pationt">
                <div>
                    <img src="Img/human/3eba9b54d023f488041f36e0efdf7428.jpg">
                    <p style="text-align:center;">
                        <br>
                        <span>20 </span>
                    </p>
                </div>
                <div>
                    <button class="checkup open">فحص المريض</button>
                    <button class="data-pationt">بيانات المريض</button>
                </div>
            </div>
            <div class="pationt">
                <div>
                    <img src="Img/human/3eba9b54d023f488041f36e0efdf7428.jpg">
                    <p style="text-align:center;">
                        <span>مجمد اجمد</span>
                        <br>
                        <span>20 </span>
                    </p>
                </div>
                <div>
                    <button class="checkup open">فحص المريض</button>
                    <button class="data-pationt">بيانات المريض</button>
                </div>
            </div>
            <div class="pationt">
                <div>
                    <img src="Img/human/3eba9b54d023f488041f36e0efdf7428.jpg">
                    <p style="text-align:center;">
                        <span>مجمد اجمد</span>
                        <br>
                        <span>20 </span>
                    </p>
                </div>
                <div>
                    <button class="checkup open">فحص المريض</button>
                    <button class="data-pationt">بيانات المريض</button>
                </div>
            </div>
            <div class="pationt">
                <div>
                    <img src="Img/human/3eba9b54d023f488041f36e0efdf7428.jpg">
                    <p style="text-align:center;">
                        <span>مجمد اجمد</span>
                        <br>
                        <span>20 </span>
                    </p>
                </div>
                <div>
                    <button class="checkup open">فحص المريض</button>
                    <button class="data-pationt">بيانات المريض</button>
                </div>
            </div>
            <div class="pationt">
                <div>
                    <img src="Img/human/3eba9b54d023f488041f36e0efdf7428.jpg">
                    <p style="text-align:center;">
                        <span>مجمد اجمد</span>
                        <br>
                        <span>20 </span>
                    </p>
                </div>
                <div>
                    <button class="checkup open">فحص المريض</button>
                    <button class="data-pationt">بيانات المريض</button>
                </div>
            </div> -->
        </section>
        <div id="with-div"></div>
        <aside id="onclicc">
            <div class="see-infor-pationt">
                <!-- <input type="text" class="tex" name="name" value="الاسم" readonly>
                <br>
                <input type="number" class="tex" name="age" placeholder="العمر" readonly>
                <br>
                <input type="text" class="tex" name="sex" placeholder="الجنس" readonly>
                <br>
                <input type="text" class="tex" name="type-of-disease" value="الحالة المرضية" readonly>
                <br>. -->
                        <br>

            </div>
            <br>
            <br>
            </div>
            <form action="dignosis.php" method="POST" >
            <!-- <form action="dignosis"> -->
                <div class="dignosis-">
                    <div>
                        <select name="nut_id" id="" class="tex" style="    width: 270px;
                                                           border-radius: 4px;
                                                           height: 24px;
                                                           border: 1px solid #ccc;">
                            <?php 
                            $select="SELECT * FROM nutrition ";
                            $result = mysqli_query($conn,$select);
                            if($result==TRUE){
                                $rows=mysqli_num_rows($result);//function to qet all the rows in database 
                                //check the num of rows
                                if($rows > 0){
                            while($rows=mysqli_fetch_assoc($result))
                            {?>
                            <option value="<?php echo $rows['nutrition_id'];?>"><?php echo $rows['nut_fname']."    ".$rows['nut_lname'];?> </option>
                            <?php 
                            }}}?>
                        </select>
                        <label for="c"> أختار طبيب تغذية
                                                </label>
                        <br>
                         <select name="pat_id" id="" class="tex"  style="    width: 283px;
                                                           border-radius: 4px;
                                                           height: 24px;
                                                           border: 1px solid #ccc;
                                                           direction: rtl;">
                            <?php 
                            $select3="SELECT * FROM `patient` WHERE patient_id = $id";
                            $result3 = mysqli_query($conn,$select3);
                            if($result3==TRUE){
                                $rows=mysqli_num_rows($result3);//function to qet all the rows in database 
                                //check the num of rows
                                if($rows > 0){
                            while($rows=mysqli_fetch_assoc($result3))
                            {?>
                        
                            <option value="<?php echo $rows['patient_id'];?>"><?php echo $rows['p_fname']."    ".$rows['p_lname'];?> </option>
                            <?php 
                            }}}?>
                        </select>
                        <label  for="c"> اســـم المريـض
                                                </label>
                        <br>
                         <select name="state" id="c" class="tex"  style="    width: 293px;
                                                           border-radius: 4px;
                                                           height: 24px;
                                                           border: 1px solid #ccc;">
                            <option value="يستطيع الحركة">يستطيع الحركة</option>
                            <option value="غائب عن الوعي">غائب عن الوعي</option>
                            <option value="لايستطيع الحركة">لا يستطيع الحركة</option>
                            
                        </select><label for="c">حالة
                                                المريض</label> 
                        <!-- <br> -->
                        <!-- <input type="date" id="birthdate" name="date">
                            <label for="date">التـاريخ</label> -->
                        <br>
                        <div class="bb">
                        <input id="bbb" class="tex" name="diabetess" type="number"><label for="bbb">فحص السكر</label>
                        <br>
                        <input id="bb" class="tex" name="fats_checkup" type="number"><label for="bb">فحص الدهون</label>
                        <br>
                        <input id="b" class="tex" name="hypertension" type="text"><label for="b">فحص الضغط</label>
                        
                        </div>
                        <br>

                       <div class="ll"> <label class="nnn" for="bbbb">هل يعاني المريض من حساسية</label> <input onclick="to_hide()" type="checkbox"
                            id="bbbb" name="allergy-check" value="s1" style="    margin-right: 20px;">
                            </div>
                        <br>
                        <div class="oo">
                        <textarea class="hh" class="ff" name="allergy_area" class="tex" id="ff" cols="25" rows="5"
                            placeholder="وصف الحساسية"></textarea>
                    
                    <!-- <div class="for-area"> -->
                        <textarea class="ff" name="dia_description" class="tex" id="f" cols="25" rows="5"
                            placeholder="diagnosis"></textarea>
                        <textarea class="ff" name="med_description" class="tex" id="f" cols="25" rows="5"
                            placeholder="الادوية مع التوقيت"></textarea>
                    <!-- </div> -->
                    
                    </div>
                     <?php
                        ///////////////////////
                //     $sql3="SELECT * FROM diagnosis";
                // $resultt = mysqli_query($conn,$sql3);
                // if($resultt==TRUE){
                //     $rows=mysqli_num_rows($resultt);//function to qet all the rows in database 
                //     //check the num of rows
                //     if($rows > 0){
                // while($rows=mysqli_fetch_assoc($resultt))
                // { ?> 
                <!-- // <input type="hidden" name="dia_id"  value="<?php // $rows['dia_id']; ?>">
              
    
               --> 
               <div class="tt">
                    <div class="for-checked">
                        <label for="v">هل المريضة بحاجة للترقيد</label><input onclick="to_hide2()" id="v"
                            name="if_need_admitting" value="1" type="checkbox">
                        <br>
                    </div>
                    <div id="hidd">
                        <input type="text" id="vv" name="dormisory" class="tex" placeholder=""><label for="vv">رمز
                            البلك</label>
                        <br>
                        <input type="text" id="vvv" name="number_room" class="tex" placeholder=""><label for="vvv">رقم
                            الغرفة</label>
                    </div>
                    <br>
                    <select name="nurse_id" id="" class="tex"  style="    width: 283px;
                                                           border-radius: 4px;
                                                           height: 24px;
                                                           border: 1px solid #ccc;">
                    <?php 
                            $select4="SELECT * FROM nurse WHERE doctor_id = $doctor_id ";
                            $result4 = mysqli_query($conn,$select4);
                            if($result4==TRUE){
                                $rows4=mysqli_num_rows($result4);//function to qet all the rows in database 
                                //check the num of rows
                                if($rows4 > 0){
                            while($rows4=mysqli_fetch_assoc($result4))
                            {?>
                            <option value="<?php echo $rows4['nurse_id'];?>"><?php echo $rows4['n_fname']."    ".$rows4['n_lname'];?> </option>
                            <?php 
                            }}}?>
                            </select>
                        <br>
                    <input class="pp" type="submit" name ="save" value="حفظ الفحص">
                    <!--  id="sub" -->
                </div>
                </div>
            </form>
        </aside>
    </section>
    <script src="JS/ForPationt.js"></script>
</body>

</html>