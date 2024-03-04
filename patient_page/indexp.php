<?php 
include '../conn.php';
session_start();
if(!isset($_SESSION['patent_id'])){
    header("Location: ../main-page/main-page.php");
 }
 $patent_id = $_SESSION['patent_id'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patientpage</title>
    <link rel="stylesheet" href="css/patient.css">
</head>

<body>
    <?php
 // $patient_id ="2";
     $sql = "SELECT * FROM `patient` where patient_id = $patent_id";
     $result = mysqli_query($conn,$sql);
                            
     if($result==TRUE){
    $rows=mysqli_num_rows($result);//function to qet all the rows in database 
    //check the num of rows
     if($rows > 0){
         //we have data in database
      while($rows=mysqli_fetch_assoc($result))
   { $pat_id = $rows['patient_id'];
    $p_fname = $rows['p_fname'];
                     ?>
    <header class="header">
        <a href="#" class="logo"> <i class="header_line"></i>
            <img width="40px" height="40px" style="display: inline; margin-bottom: -10px;" src="img/03.png" alt=""> Safe
            Attention</a>
        <nav style="direction: rtl;" class="navbar">
            <a href="http://localhost:8080/mini-project/main-page/main-page.php
            
            " style="    border: 1px solid black;
    border-radius: 5px;
    padding: 2px 4px;"> الصفحة الرئيسية</a>
            <a href="#aboutas"> المريض :</a>
            <a href="#pncs"> <?php echo $rows['p_fname']."  ".$rows['p_lname'];  ?></a>
            <!-- <a href="#services"> خدماتنا</a> -->
        </nav>

    </header>
    <?php }}}?>

    <div class="page">




        <section>

            <?php
                                // $patient_id ="2";
                                        $sql = "SELECT * FROM `patient` where patient_id = $patent_id";
                                $result = mysqli_query($conn,$sql);
                            
                                if($result==TRUE){
                                $rows=mysqli_num_rows($result);//function to qet all the rows in database 
                                //check the num of rows
                                if($rows > 0){
                                    //we have data in database
                                    while($rows=mysqli_fetch_assoc($result))
                                    { $pat_id = $rows['patient_id'];
                                        ?>

            <div class="main">
                <div class="section_title">
                    <div class="part_div">
                        <div class="form_frist_head">
                            <form action="">
                                <input type="text" class="input_infoclass"
                                    placeholder=" اسم المريض  : <?php echo $rows['p_fname']."  ".$rows['p_lname'];  ?>"
                                    readonly>
                                <input type="text" class="input_infoclass"
                                    placeholder=" العمر : <?php echo $rows['p_age']; ?>" readonly>
                                <input type="text" class="input_infoclass"
                                    placeholder=" الهاتف : <?php echo $rows['p_phone']; ?>" readonly>
                                <?php }}}?>
                                <?php
                            include '../conn.php';
                            //   $patient_id ="2";
                                        $sql3 = "SELECT * FROM `diagnosis` where patient_id = $patent_id ";
                                        $result3 = mysqli_query($conn,$sql3);
                                        if($result3==TRUE){
                                        $rows3=mysqli_num_rows($result3);//function to qet all the rows in database 
                                        //check the num of rows
                                        if($rows3 > 0){
                                            //we have data in database
                                            while($rows3=mysqli_fetch_assoc($result3))
                                            { $dia_id=$rows3['dia_id'];
                                                // echo $dia_id;
                                             $sql5 = "SELECT * FROM `admit_a` where dia_id  =  $dia_id";
                                             $result5 = mysqli_query($conn,$sql5);
                                             if($result5==TRUE){
                                                $rows5=mysqli_num_rows($result5);
                                                if($rows5 > 0){
                                                while($rows5=mysqli_fetch_assoc($result5))
                                           { ?>
                                <input type="text" class="input_infoclass"
                                    placeholder=" رقم الغرفة : <?php echo $rows5['room']; ?>" readonly>
                                <input type="text" class="input_infoclass"
                                    placeholder=" رقم العنبر : <?php echo $rows5['dormisory']; ?>" readonly>
                                <?php }}}}}}?>
                                <!-- <input type="submit" class="class_submit" > -->

                        </div>
                    </div>
                    <!-- <div class="div_info_button"> 
                <button  class="pat_button"> <a href="#"> أكتب إحتياجاتك</a></button>
                <button  class="pat_button"><a href="#">الفحص</a></button> 
                <button  class="pat_button"><a href="#">معلومات اخرى</a></button>
             </div> -->

                    </form>




                    <h2 style="margin-top: 20px;">قائمة الوجبات</h2>
                    <!-- <h3 style="font-size: 22px; font-weight: 500; margin-bottom: 57px; margin-top: 30px;"> فضلا قم بإختيار ثلاث وجبات </h3>   -->
                    <div class="menus">
           <?php
                       

                       $sql1 = "SELECT  *  FROM `meal` where patient_id  = $patent_id";
                       $result1 = mysqli_query($conn,$sql1);
                          if($result1==TRUE){
                              $rows1=mysqli_num_rows($result1);//function to qet all the rows in database 
                               //check the num of rows
                                  if($rows1 > 0){
                                   //we have data in database
                                   while($rows1=mysqli_fetch_assoc($result1))
                                    {

                      ?>
                        <div>
                            <h4 style="font-size: 25px;
    font-weight: 550;"><?php echo $rows1['type'] ?></h4>
                            <div class="single_menu">
                                <img src="img/meall.png" alt="">
                                <div class="menu_content">
                                    <h5><?php echo $rows1['meal_name'] ?><span></span></h5>
                                    <br>
                                    <p><?php echo $rows1['meal_describtion'] ?> </p>
                                </div>
                            </div>
                        </div>
                            <?php }}}?>
                        </div>
                        <!-- <div class="single_menu">
                    <img src="img/b2.jpg" alt="">
                    <div class="menu_content">
                        <h5>الوجبة الثانية <span>2</span></h5>
                        <p>Lorem ipsum dolor sit amet confacere perferend</p>
                        <button class="button_style"><a href="#">إختيار</a></button>
                    </div>
                </div>
                <div class="single_menu">
                    <img src="img/b3.jpg" alt="">
                    <div class="menu_content">
                        <h5>الوجبة الثالثة <span>3</span></h5>
                        <p>Lorem ipsum dolor sit amet confacere perferend</p>
                        <button class="button_style"><a href="#">إختيار</a></button>
                    </div>
                </div> -->
                        <!-- 
            <div class="menu_column">
                <h4>الغداء</h4>
                <div class="single_menu">
                    <img src="img/meall.png" alt="">
                    <div class="menu_content">
                        <h5><span>1</span></h5>
                        <p>محتويات الوجبة: تحتوي الوجبة على رز أبيض وقطعتين صدور دجاج وصحن سلطةخضروات وعلبة 
                            زبادي وكوب ماء
                        </p>
                        <button class="button_style"><a href="#">تم إستقبال الوجبة</a></button>
                    </div>
                </div> -->
                        <!-- <div class="single_menu">
                    <img src="img/l2.jpg" alt="">
                    <div class="menu_content">
                        <h5>الوجبة الثانية <span>2</span></h5>
                        <p>Lorem ipsum dolor sit amet confacere perferend</p>
                        <button class="button_style"><a href="#">إختيار</a></button>
                    </div>
                </div>
                <div class="single_menu">
                    <img src="img/l3.jpg" alt="">
                    <div class="menu_content">
                        <h5>الوجبة الثالثة<span>3</span></h5>
                        <p>Lorem ipsum dolor sit amet confacere perferend</p>
                        <button class="button_style"><a href="#">إختيار</a></button>
                    </div>
                </div> -->
                   


                    <!-- <div class="menu_column">
                <h4>العشاء</h4>
                <div class="single_menu">
                    <img src="img/meall.png" alt="">
                    <div class="menu_content">
                        <h5><span>1</span></h5>
                        <p>محتويات الوجبة: تحتوي الوجبة على كوب حليب وقطعتين خبز أسمر
وصحن سلطة فواكه و200جرام جبن
                        </p>
                        <button class="button_style"><a href="#">تم إستقبال الوجبة</a></button>
                    </div>
                </div> -->
                    <!-- <div class="single_menu">
                    <img src="img/d2.jpg" alt="">
                    <div class="menu_content">
                        <h5>الوجبة الثانية<span>2</span></h5>
                        <p>Lorem ipsum dolor sit amet confacere perferend</p>
                        <button class="button_style"><a href="#">إختيار</a></button>
                    </div>
                </div>
                <div class="single_menu">
                    <img src="img/d1.jpg" alt="">
                    <div class="menu_content">
                        <h5>الوجبة الثالثة <span>3</span></h5>
                        <p>Lorem ipsum dolor sit amet confacere perferend</p>
                        <button class="button_style"><a href="#">إختيار</a></button>
                    </div>
                  
                    
                </div> -->
                </div>


            </div>

        </section>
    </div>



</body>

</html>