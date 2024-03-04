<?php 
// include '../conn.php';
// if(isset($_GET['id'])){
//     $id=$_GET['id'];
//     // استعلام SQL لحذف البيانات من الجدول
// $sql = "DELETE FROM doctor WHERE doctor_id  = '$$id'";

// // تنفيذ الاستعلام
// mysqli_query($conn, $sql);

// // إغلاق الاتصال بقاعدة البيانات
//     if($sql){
//         echo "jdljlj";
//     }
// }
?>

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
        <ul class="back_class">
            <li class="nav_class">
                <a href="#"> <img class="nav_img" src="img/main.png" alt="">الصفحة الرئيسية</a></li>
            <li class="nav_class">
                <a href="#"> <img class="nav_img" src="img/login.png" alt="">تسجيل الدخول </a></li>
            <li class="nav_class">
                <a href="#"> <img class="nav_img" src="img/9.png" alt=""> من نحن</a></li>
            <li class="nav_class">
                <!-- <a href="#"> <img class="nav_img" src="img/pncs.png" alt="">PNCS</a></li> -->
            <li class="nav_class">
                <!-- <a href="#"> <img class="nav_img" src="img/add.png" alt="">إضافة</a></li> -->
            <li class="nav_class">
                <!-- <a href="#"><img class="nav_img" src="img/edit (2).png" alt=""> حذف </a></li> -->
            <li class="nav_class">
                <a href="#">
                    <!-- <img class="nav_img" src="img/edit (1).png" alt=""> تعديل </a> </li> -->
        </ul>
    </nav>

    <section>

        <div class="box">

            <!-- <div class="search_box">
                <input type="text" placeholder="أبحث هنا...">
                <img src="img/search.png" alt=" " class="search_img">
            </div> -->
        </div>


        <div class="cardbox">
            <div class="card" id="onclick-to-doctor">
                <div>
                    <div style="font-size: 30px; color: teal;font-weight: 400;">2</div>
                    <div style="text-decoration: none" class="uname">الأطباء</div>
                </div>
                <div class="iconbx">
                    <img class="img_class" src="img/3.png" alt="">
                    <button  style="    background-color: #aed2cb;
    border: none;
    width: 60px;
    box-shadow: 0 7px 25px rgb(0 0 0 /18%);
    height: 24px;
    margin-left: -6px;
    border-radius: 5px;" id="a">فتح</button>
                </div>

            </div>

            <div class="card" id="onclick-to-nurse">
                <div>
                    <div style="font-size: 30px; color: teal;font-weight: 400;">2</div>
                    <div class="uname">الممرضون</div>
                </div>
                <div class="iconbx">
                    <img class="img_class" src="img/4.png" alt="">
                    <button style="    background-color: #aed2cb;
    border: none;
    width: 60px;
    box-shadow: 0 7px 25px rgb(0 0 0 /18%);
    height: 24px;
    margin-left: -6px;
    border-radius: 5px;" id="b">فتح</button>
                </div>
            </div>

            <div class="card" id="onclick-to-nat-doctor">
                <div>
                    <div style="font-size: 30px; color: teal;font-weight: 400;">2</div>
                    <div class="uname">أطباء التغذية</div>
                </div>
                <div class="iconbx">
                    <img class="img_class" src="img/5.png" alt="">
                    <button style="    background-color: #aed2cb;
    border: none;
    width: 60px;
    box-shadow: 0 7px 25px rgb(0 0 0 /18%);
    height: 24px;
    margin-left: -6px;
    border-radius: 5px;" id="c">فتح</button>
                </div>
            </div>

            <div class="card" id="onclick-to-pationt">
                <div>
                    <div style="font-size: 30px; color: teal;font-weight: 400;">2</div>
                    <div class="uname">المرضى</div>
                </div>
                <div class="iconbx">
                    <img class="img_class" src="img/6.png" alt="">
                    <button style="    background-color: #aed2cb;
    border: none;
    width: 60px;
    box-shadow: 0 7px 25px rgb(0 0 0 /18%);
    height: 24px;
    margin-left: -6px;
    border-radius: 5px;"
     id="d">فتح</button>
                </div>
            </div>



        </div>

        <!--when click of card-->

        <div class="main-users">
            <div class="sub_menu_wrap" id="card-for-doctor">
                <div class="sub_menu">
                    <div class="user_info">
                        <img width="30px" height="30px" src="img/3.png" alt="">
                        <h3>الأطباء</h3>
                    </div>
                    <?php
                    include '../conn.php';
                    $sql="SELECT * FROM doctor ";
                    $result = mysqli_query($conn,$sql);
                    while($query=mysqli_fetch_array($result))
                    {?>
                    <hr>
                    <a href="#" class="sub_menu_link">
                        <img src="img/uesr.png" alt="" width="22px" height="22px">
                        <p style="color: black;"><?php echo $query['d_fname'];?></p>
                        <a href='delet_doc.php?id=<?=$query['doctor_id'] ?>' class="delet_button">حذف</a>
                        <a href='../doctor_edit/doctor_edit.php?id=<?=$query['doctor_id'] ?>' class="delet_button">تعديل</a>
                        <span></span>
                    </a>
                    <?php 

                       

                        
                    }

                ?>
                    <!-- <hr>
                    <a href="#" class="sub_menu_link">
                        <img src="img/uesr.png" alt="" width="22px" height="22px">
                        <p>حنين العريقي</p>
                        <button href="#" class="delet_button">حذف</button>
                        <span></span>
                    </a> -->
                    <!-- <a href="#" class="sub_menu_link">
                        <img src="img/uesr.png" alt="" width="22px" height="22px">
                        <p>حنين العريقي</p>
                        <button href="#" class="delet_button">حذف</button>
                        <span></span>
                    </a> -->
                    <!-- <a href="#" class="sub_menu_link">
                        <img src="img/uesr.png" alt="" width="22px" height="22px">
                        <p>حنين العريقي</p>
                        <button href="#" class="delet_button">حذف</button>
                        <span></span>
                    </a> -->
                </div>
            </div>
            <!-- #مربع الممرضون ######################################3 -->

            <div class="sub_menu_wrap" id="card-for-nurse">
                <div class="sub_menu">
                    <div class="user_info">
                        <img width="30px" height="30px" src="img/5.png" alt="">
                        <h3>الممرضون</h3>
                    </div>
                    <?php
                    include '../conn.php';
                    $sql="SELECT * FROM nurse ";
                    $result = mysqli_query($conn,$sql);
                    while($query=mysqli_fetch_array($result))
                    {?>
                    <hr>
                    <a href="#" class="sub_menu_link">
                        <img src="img/uesr.png" alt="" width="22px" height="22px">
                        <p style="color: black;"><?php echo $query['n_fname'];?></p>
                        <a 
      href='delet_nur.php?id=<?=$query['nurse_id'] ?>' class="delet_button">حذف</a>
                        <a href='../nurse_edit/nurse_edit.php?id=<?=$query['nurse_id'] ?>' class="delet_button">تعديل</a>
                        <span></span>
                    </a>
                    <?php 

                       

                        
                    }

                ?>
                    <!-- <a href="#" class="sub_menu_link">
                        <img src="img/uesr.png" alt="" width="22px" height="22px">
                        <p>حنين العريقي</p>
                        <button href="#" class="delet_button">حذف</button>
                        <span></span>
                    </a> -->
                    <!-- <a href="#" class="sub_menu_link">
                        <img src="img/uesr.png" alt="" width="22px" height="22px">
                        <p>حنين العريقي</p>
                        <button href="#" class="delet_button">حذف</button>
                        <span></span>
                    </a> -->
                </div>
            </div>

            <!-- <-- ######################مربع أطباء التغذية##################### -->

            <div class="sub_menu_wrap" id="card-for-nat-doctor">
                <div class="sub_menu">
                    <div class="user_info">
                        <img width="30px" height="30px" src="img/3.png" alt="">
                        <h3>أطباء التغذية</h3>
                    </div>
                    <?php
                    include '../conn.php';
                    $sql8="SELECT * FROM nutrition ";
                    $result8 = mysqli_query($conn,$sql8);
                    while($query=mysqli_fetch_array($result8))
                    {?>
                    <hr>
                    <a href="#" class="sub_menu_link">
                        <img src="img/uesr.png" alt="" width="22px" height="22px">
                        <p style="color: black;"><?php echo $query['nut_fname'];?></p>
                        <a href='delet_nut.php?id=<?=$query['nutrition_id'] ?>' class="delet_button">حذف</a>
                        <a href='../nut_edit/nut_edit.php?id=<?=$query['nutrition_id']?>' class="delet_button">تعديل</a>
                        <span></span>
                    </a>
                    <?php 

                       

                        
                    }

                ?>
                    <!-- <hr>
                    <a href="#" class="sub_menu_link">
                        <img src="img/uesr.png" alt="" width="22px" height="22px">
                        <p>حنين العريقي</p>
                        <button href="#" class="delet_button">حذف</button>
                        <span></span>
                    </a>
                    <a href="#" class="sub_menu_link">
                        <img src="img/uesr.png" alt="" width="22px" height="22px">
                        <p>حنين العريقي</p>
                        <button href="#" class="delet_button">حذف</button>
                        <span></span>
                    </a>
                    <a href="#" class="sub_menu_link">
                        <img src="img/uesr.png" alt="" width="22px" height="22px">
                        <p>حنين العريقي</p>
                        <button href="#" class="delet_button">حذف</button>
                        <span></span>
                    </a> -->
                </div>
            </div>
            <!-- ######################مربع المرضى##################### -->
            <div class="sub_menu_wrap" id="card-for-pationt">
                <div class="sub_menu">
                    <div class="user_info">
                        <img width="30px" height="30px" src="img/6.png" alt="">
                        <h3>المرضى</h3>
                    </div>
                    <?php
                    include '../conn.php';
                    $sql="SELECT * FROM patient";
                    $result = mysqli_query($conn,$sql);
                    while($query=mysqli_fetch_array($result))
                    {?>
                    <hr>
                    <a href="#" class="sub_menu_link">
                        <img src="img/uesr.png" alt="" width="22px" height="22px">
                        <p style="color: black;"><?php echo $query['p_fname'];?></p>
                        <a href='delet_pat.php?id=<?=$query['patient_id'] ?>' class="delet_button">حذف</a>
                        <a href='../pat_edit/pat_edit.php?id=<?=$query['patient_id'] ?>' class="delet_button">تعديل</a>
                        <span></span>
                    </a>
                    <?php 

                       

                        
                    }

                ?>
                    <!-- <hr>
                    <a href="#" class="sub_menu_link">
                        <img src="img/uesr.png" alt="" width="22px" height="22px">
                        <p>حنين العريقي</p>
                        <button href="#" class="delet_button">حذف</button>
                        <span></span>
                    </a>
                    <a href="#" class="sub_menu_link">
                        <img src="img/uesr.png" alt="" width="22px" height="22px">
                        <p>حنين العريقي</p>
                        <button href="#" class="delet_button">حذف</button>
                        <span></span>
                    </a>
                    <a href="#" class="sub_menu_link">
                        <img src="img/uesr.png" alt="" width="22px" height="22px">
                        <p>حنين العريقي</p>
                        <button href="#" class="delet_button">حذف</button>
                        <span></span>
                    </a> -->
                </div>
            </div>
        </div>
        <!-- nnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn -->



        <div class="container">
            <form action="" method="POST">
                <!--  -->
                <!--  -->
                <!--  -->
                <!-- <div class="title">أختار نوع المستخدم</div>
                <select name="type_user" id="depart" class="select_details">
                    <option value="none">اختر نوع المستخدم</option>
                    <option value="doctor">الأطباء</option>
                    <option value="nat-doctor">أطباء التغذية</option>
                    <option value="nurse">الممرضون</option>
                    <option value="pationt">مريض</option>
                </select> -->
                <!--  -->
                <!--  -->
                <!--  -->
                <!-- <form action="#"> -->
                <!-- <div class="user_details">

                    <div class="input_box" style="display: none;" id="name">
                        <span class="details">الاسم</span>
                        <div class="two">
                            <input type="text" name="fname" placeholder=" الاسم الاول">
                            <input type="tex-t" name="lname" placeholder=" الاسم الاخير">
                        </div>
                    </div> -->

                    <!-- <div class="input_box" id="age" name="age" style="display: none;">
                        <span class="details">العمر</span>
                        <input type="text" placeholder="أدخل العمر">
                    </div>

                    <div class="input_box" id="status" name="state" style="display: none;">
                        <span class="details">الحالة المرضية</span>
                        <input type="text" placeholder="الحالة المرضية">
                    </div> -->

                    <!-- <div class="input_box" id="type" style="display: none;">
                        <span class="details">النوع</span>

                        <input type="text" name="typee" placeholder="أدخل نوعه">
                    </div>

                    <div class="input_box" id="section-for-info" name="depart" style="display: none;">
                        <span class="details">القسم</span>
                        <input type="text" placeholder="أدخل القسم">
                    </div> -->

                    <!-- <div class="input_box" id="period" style="display: none;">
                        <span class="details">الفترة</span>
                        <select name="period" id="">
                            <option value="morning">صباحي</option>
                            <option value="evening">مسائي</option>
                        </select>
                    </div>

                    <div class="input_box" id="location" name="loca" style="display: none;">
                        <span class="details"> الموقع</span>
                        <input type="text" placeholder="أدخل الموقع">
                    </div> -->


                    <!-- <div class="input_box" name="phone" style="display: none;" id="phone">
                        <span class="details">رقم الهاتف</span>
                        <input type="text" placeholder="أدخل رقم الهاتف">
                    </div> -->
                    <!--  -->

                    <!-- <div>
            <input type="checkbox">
            <label for="">male</label>
        </div>
        <div>
            <input type="checkbox">
            <label for="">male</label>
        </div> -->

                <!-- </div>
                <div class="gender_details">

                    <div class="gender_div"  style="display: none;" id="six">
                        <span class="gender_title">تحديد الجنس</span>
                        <br>
                        <div class="gender_checkbox">
                            <input type="checkbox" name="six">
                            <label class="gender_checkbox_title" for="">ذكر</label>
                        </div>
                        <div class="gender_checkbox">
                            <input type="checkbox" name="six">
                            <label class="gender_checkbox_title" for="">أنثى</label>
                        </div>
                    </div>

                    <br> -->
                    <!--  -->
                    <!-- <input type="text" class="last_input" placeholder="حدد جنس المستخدم"> -->
                </div>

            </form>
            <!--  -->
            <div class="container">
            <!-- 'admin','doctor','nutrition','patient','nurse' -->
            <form action="insert.php" method="POST" class="sort">
                <div class="title">أختار نوع المستخدم</div>
                <select name="roll" id="depart" class="select_details">
                    <option value="none">اختر نوع المستخدم</option>
                    <option value="doctor">الأطباء</option>
                    <option value="nutrition">أطباء التغذية</option>
                    <option value="nurse">الممرضون</option>
                    <option value="patient">مريض</option>
                </select>
                <div class="user_details">

                <div class="input_box" style="display: none;" id="name">
                    <span class="details">الاسم</span>
                    <div class="two">
                        <input type="text" name="fname" placeholder=" الاسم الاول">
                        <input type="tex-t" name="lname" placeholder=" الاسم الاخير">
                    </div>
                </div>
                
                <div class="input_box" id="age" name="age" style="display: none;">
                        <span class="details">العمر</span>
                        <input type="text" name="age" placeholder="أدخل العمر">
                    </div>

                    <div class="input_box" id="status" name="state" style="display: none;">
                        <span class="details">الحالة المرضية</span>
                        <!-- <input type="text" name="state" placeholder="الحالة المرضية"> -->
                        
                        <label for="">اختيار طبيب 
                                                </label>
                        <!--  -->
                        <select name="doc_id" id="c" class="tex">
                            <?php 
                            $select="SELECT * FROM doctor ";
                            $result = mysqli_query($conn,$select);
                            if($result==TRUE){
                                $rows=mysqli_num_rows($result);//function to qet all the rows in database 
                                //check the num of rows
                                if($rows > 0){
                            while($rows=mysqli_fetch_assoc($result))
                            {?>

                        <!--  -->
                            <option value="<?php echo $rows['doctor_id'];?>"><?php echo $rows['d_fname']."    ".$rows['d_lname'];?> </option>
                            <?php 
                            }}}?>
                        </select>
                    </div>
                    <div class="input_box" id="type" style="display: none;">
                        <!-- <span class="details">النوع</span> -->

                        <!-- <input type="text" name="typee" placeholder="أدخل نوعه"> -->
                    </div>

                    <div class="input_box" id="section-for-info" name="depart" style="display: none;">
                        <span class="details">القسم</span>
                        <input type="text" name="depart" placeholder="أدخل القسم">
                    </div>
                    <div class="input_box" id="period" style="display: none;">
                        <span class="details">الفترة</span>
                        <select name="period" id="">
                            <option value="صباحي">صباحي</option>
                            <option value="مسائي">مسائي</option>
                        </select>
                    </div>

                    <div class="input_box" id="location" name="loca" style="display: none;">
                        <span class="details"> الموقع</span>
                        <input type="text" name="loca" placeholder="أدخل الموقع">
                    </div>
                    <div class="input_box" name="phone" style="display: none;" id="phone">
                        <span class="details">رقم الهاتف</span>
                        <input type="text" name="phone" placeholder="أدخل رقم الهاتف">
                        
                    </div>
                    </div>
                <div class="gender_details">

                    <div class="gender_div"  style="display: none;" id="six">
                        <!-- <span class="gender_title">تحديد الجنس</span>
                        <br>
                        <div class="gender_checkbox">
                            <input type="checkbox" name="six">
                            <label class="gender_checkbox_title" for="">ذكر</label>
                        </div>
                        <div class="gender_checkbox">
                            <input type="checkbox" name="six">
                            <label class="gender_checkbox_title" for="">أنثى</label>
                        </div> -->
                        <span  style="    font-weight: 500;
    margin-bottom: 5px;
    align-content: flex-start;
    flex-direction: row;
    justify-content: center;
    align-items: flex-start;
    margin-top: -25px;
    margin-left: -74px;
    font-size:19px;"class="gender_title">تحديد الجنس</span>
                        <br>
                        <br>
                        <select  style="    width: 437px;
    margin-bottom: 12px;
    font-size: 17px;
         "name="six" id="">
                            <option value="انثى">انثى</option>
                            <option value="ذكر">ذكر</option>
                        </select>

                    </div>
                    <!--  -->
                    <div class="input_box form-heden " id="ggga" style="display: none;" >
                        <label for="">اختيار طبيب 
                                                </label>
                            <select name="doctor_id" >
                            <?php 
                            $select="SELECT * FROM doctor ";
                            $result = mysqli_query($conn,$select);
                            if($result==TRUE){
                                $rows=mysqli_num_rows($result);//function to qet all the rows in database 
                                //check the num of rows
                                if($rows > 0){
                            while($rows=mysqli_fetch_assoc($result))
                            {?>
                               <option value="<?php echo $rows['doctor_id'];?>"><?php echo $rows['d_fname']."    ".$rows['d_lname'];?> </option>
                            <?php 
                            }}}?>
                        </select>
                            <br>
                            <label for="">اختيار طبيب تغذية
                                                </label>
                            <div>
                            <select name="select-nat-doctor">
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
                        </div>
                    <!--  -->

                    <br>
                    </div>
                    <div class="input_box form-heden" id="form-hiden1" style="display: none;">
                        <span class="details">اسم المستخدم</span>
                        <input type="text" name="user_name" placeholder="اسم المستخدم" required>
                    </div>

                    <div class="input_box form-heden" id="form-hiden2" style="display: none;">
                        <span class="details">كلمة المرور</span>
                        <input type="text" name="password" placeholder="أدخل كلمة مرور" required>
                    </div>
                    <!-- <input type="text" name="roll" placeholder="النوع" required> -->
                    <!-- <div> -->
            <button id="contin" class="ss" style="display: none;" s>تابع</button>

                    <input type="submit" name="login" id="adddd"  value="إضافة">
                </div>
                <!-- <input  id="add" name="add" style="display: none; text-align: center;" class="btn btn-primary my-5"><a href="insert.php">إضافة</a></input> -->

                <!-- <button  id="add" name="add" style="display: none; text-align: center;" class="btn btn-primary my-5"><a href="insert.php">إضافة</a></button> -->

            </form>
            <!-- <button id="add" style="display: none; text-align: center;" class="aa">إضافة<a href</button> -->
        </div>

    </section>
    <!-- <aside>jhxsbnxb</aside>
    <footer>hbnj nm</footer> -->
    <script src="js/admin.js"></script>
</body>

</html>