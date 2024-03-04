<?php 
include '../conn.php';
session_start();
//
if(!isset($_SESSION['nutrition_id'])){
   header("Location: ../main-page/main-page.php");
}
$nutrition_id = $_SESSION['nutrition_id'];
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nat_page</title>
    <link rel="stylesheet" href="css/css_file.css">
</head>

<body style="    background-color: #a0cde921;">


    <?php
$sql = "SELECT * FROM nutrition WHERE nutrition_id = $nutrition_id ";
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);
  $nut_id = $row['nutrition_id'];
  ?>
    <header class="header">
        <a href="#" class="logo">
            <img width="40px" height="40px" style="display: inline; margin-bottom: -10px;" src="img/02.png" alt=""> Safe
            Attention</a>
        <nav style="direction: rtl;" class="navbar">
            <a href="#http://localhost/hospital/mini-project/main-page/main-page.php" title="go to nures page" target="_blank"> الصفحة الرئيسية</a>
            <!-- <a href="nurse.html"> تسجيل الدخول</a> -->
            <a href="#aboutas"> طبيب التغذية :</a>
            <a href="#pncs"> <?php echo $row['nut_fname']."  ".$row['nut_lname'];  ?></a>
            <!-- <a href="#services"> خدماتنا</a> -->
        </nav>

    </header>
    <?php  }?>
    <div class="cardbox">
        <?php
$sql = "SELECT * FROM nutrition WHERE nutrition_id = $nutrition_id ";
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);
  $nut_id = $row['nutrition_id'];

  $sql2 = "SELECT * FROM diagnosis WHERE nutrition_id = $nut_id ";
  $result2 = mysqli_query($conn, $sql2);

  if ($result2 && mysqli_num_rows($result2) > 0) {
    while ($row2 = mysqli_fetch_assoc($result2)) {
      $p_id = $row2['patient_id'];

      $sql3 = "SELECT * FROM patient WHERE patient_id =$p_id ";
      $result3 = mysqli_query($conn, $sql3);

      if ($result3 && mysqli_num_rows($result3) > 0) {
        while ($row3 = mysqli_fetch_assoc($result3)) {
            $id_pat = $row3['patient_id'];
          $p_fname = $row3['p_fname'];
          $p_lname = $row3['p_lname'];


         ?>
        <div class="card">
            <div>
                <!-- <div style="font-size: 30px; color: teal;font-weight: 400;">1</div> -->
                <h2 style="text-align: center;
                color: red;
                margin-left: 20px;
                margin-left: -50px;
                margin-top: 18px;"> <?php echo $p_fname ;?> </h2>

                <button class="pat_button dis-info"><a
                        href='indexh.php?id=<?= $row3['patient_id'] ?>'>إختيار</a></button>
            </div>
            <div class="iconbx">
                <img class="img_class" src="img/6.png" alt="">
                <!-- <button class="pat_button dis-info">
                    إختيار
                </button> -->
            </div>

        </div>
        <?php
        }
      }
    }
  }
}?>
        <!-- <div class="card">
            <div>
                <div style="font-size: 30px; color: teal;font-weight: 400;">2</div>
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum laboriosam fuga voluptatem sed lauda
                </p> -->
        <!-- <h2 style="text-align: center;
                color: red;
                margin-left: 20px;
                margin-left: -50px;
                margin-top: 18px;">ريم هائل</h2>
                <buttona class="pat_button dis-info">
                    إختيار
                </buttona>

            </div>
            <div class="iconbx">
                <img class="img_class" src="img/6.png" alt="">

            </div>
        </div>
        <div class="card">
            <div>
                <div style="font-size: 30px; color: teal;font-weight: 400;">3</div>
                <h2 style="text-align: center;
                color: red;
                margin-left: 20px;
                margin-left: -50px;
                margin-top: 10px;">أمجد أحمد</h2>
                <button class="pat_button dis-info">
                    إختيار
                </button>
            </div>
            <div class="iconbx">
                <img class="img_class" src="img/6.png" alt="">
            </div>
        </div>
        <div class="card">
            <div>
                <div style="font-size: 30px; color: teal;font-weight: 400;">4</div>

                <br>
                <h2 style="text-align: center;
                color: red;
                margin-left: 20px;
                margin-left: -50px;
                margin-top: 18px;">مجد فؤاد</h2>

                <button class="pat_button dis-info">
                    إختيار
                </button>
            </div>
            <div class="iconbx">
                <img class="img_class" src="img/6.png" alt="">
                <buttona class="pat_button dis-info">
                    إختيار
                </buttona>
            </div>
        </div>  -->



    </div>




    <div class="container" style="display: none;">
        <?php
        $sql3 = "SELECT * FROM patient WHERE patient_id = $id ";
      $result3 = mysqli_query($conn, $sql3);

      if ($result3 && mysqli_num_rows($result3) > 0) {
        while ($row3 = mysqli_fetch_assoc($result3)) {
         $id_pat = $row3['patient_id'];
          $p_fname = $row3['p_fname'];
          $p_lname = $row3['p_lname'];
          $p_age = $row3['p_age'];
          $p_sex = $row3['p_sex'];
        

         ?>
        <form action="#" id="info" style="display: none;">

            <div class="infor_div">
                <div class="inside_div">
                    <input type="text" value=" <?php echo $p_fname ;?>" readonly>
                </div>
                <div class="inside_div">
                    <input type="text" value="<?php echo $p_age ;?>" readonly>
                </div>
                <div class="inside_div">
                    <input type="text" value="<?php echo $p_sex ;?>" readonly>
                </div>
            </div>
            <?php }}?>



            <!-- <div class="ll">
                <label for="" style="direction: rtl;    direction: rtl;
      margin-top: 30px;
      font-size: 18px;
      font-weight: 600;">
                    حالة المريض:</label>
                <select name="" id="depart" class="select_details">
                    <option value="">يستطيع الحركة</option>
                    <option value="">غائب عن الوعي</option>
                    <option value="">لا يستطيع الحركة</option>

                </select>
                <input type="text" class="dig_name">
            </div> -->
            <?php
  $sql4 = "SELECT * FROM diagnosis WHERE patient_id = $id ";
  $result4 = mysqli_query($conn, $sql4);

  if ($result4 && mysqli_num_rows($result4) > 0) {
    $row4 = mysqli_fetch_assoc($result4);
    $diagnosis_id = $row4['dia_id'];
    $diabetess = $row4['diabetess'];
    $state = $row4['state'];
    $fats_checkup = $row4['fats_checkup'];
    $hypertension = $row4['hypertension'];
    $allergy= $row4['allergy'];
    $dia_description = $row4['dia_description'];
    $med_description= $row4['med_description'];
            ?>
            <div class="dig_class">
                <label for="" style="direction: rtl; margin-top: 30px; font-size: 18px; font-weight: 600;">حالة
                    المريض:</label>
                <select name="" id="depart" class="select_details">
                    <option value=""><?php echo $state;?></option>
                </select>
            </div>
            <div class="dig_class">
                <label for="" class="dig_name">فحص الضغط:</label>
                <input type="text" class="text_style" value="<?php echo $hypertension;?>" readonly>
            </div>
            <div class="dig_class">
                <label for="" class="dig_name">فحص الدهون:</label>
                <input type="text" class="text_style" value="<?php echo $fats_checkup;?>" readonly>
            </div>
            <div class="dig_class">
                <label for="" class="dig_name">فحص السكر:</label>
                <input type="text" class="text_style" value="<?php echo $diabetess;?>" readonly>
            </div>
            <div class="dig_class"
                style="box-shadow: 0 7px 8px rgb(0 0 0 / 6%); margin-bottom: 20px; padding-bottom: 40px; padding-top: 5px; background-color: #d5f4da70; margin-top: 28px;">
                <!-- <label for="" class="dig_name">هل المريض يعاني من حساسية؟</label>
    <input type="checkbox" class="text_style" checked>  -->
            </div>
            <div class="row_div">
                <textarea name="" id="" cols="30" rows="12" class="textarea_class"
                    placeholder=" وصف الحساسية :<?php echo $allergy;?>" readonly></textarea>
                <textarea name="" id="" cols="30" rows="12" class="textarea_class"
                    placeholder=" وصف الادوية :<?php echo $med_description;?>" readonly></textarea>
            </div>
            <div class="row_div">
                <textarea name="" id="" cols="30" rows="12" class="textarea_class"
                    placeholder=" التشخيص :<?php echo $dia_description;?>" readonly
                    style="margin-right: 240px;"></textarea>

            </div>
            <?php
  }
?>
            <?php
                $sql5 = "SELECT * FROM admit_a WHERE dia_id = $diagnosis_id ";
                $result5 = mysqli_query($conn, $sql5);

                if ($result5 && mysqli_num_rows($result5) > 0) {
                    $row4 = mysqli_fetch_assoc($result5);
                    $admit_id= $row4['admit_id'];
                    $dormisory = $row4['dormisory'];
                    $room = $row4['room'];
                
                ?>
            <div class="dig_class" style="     box-shadow: 0 7px 8px rgb(0 0 0 / 6%);
            margin-bottom: 20px;
            padding-bottom: 40px;
            padding-top: 5px;
            background-color: #d5f4da70;
            margin-top: 28px;">
                <!-- <label for="" class="dig_name">هل المريضة حامل ؟</label>
                <input type="text" class="text_style" readonly> -->
            </div>
            <div class="infor_div">
                <div class="inside_div" class="style_in_d" style="  direction: rtl;">
                    <label for="">رقم البلك:</label>
                    <input type="text" value="<?php echo $dormisory;?>" readonly>
                </div>

                <div class="inside_div" class="style_in_d" style="  direction: rtl;">
                    <label for="" class="la_in">رقم الغرفة :</label>
                    <input type="text" value="<?php echo $room;?>" readonly>
                </div>


            </div>
        </form>

    </div>
    <?php }?>
    <div id="but-after-info" style="display: none;">
        <div>
            <button class="pat_button" id="dis-food" style=" 
        margin-top:14%;
        margin-left: 13%;
        width: 200px;">
                الذهاب إلى الوجبات
            </button>
        </div>
        <div>
            <button class="pat_button" id="back" style="
        margin-top: 21%;
        margin-left: 13%;
        width: 200px;">
                خروج
            </button>
        </div>
    </div>





    <div class="main" style="display: none;">
        <div class="section_title">
            <div class="part_div" class="nnn" style="position: absolute;
            left: 7%;
            width: 88%;
            background-color: #fff;
    margin-top: -110px;
    ">

                <div class="form_frist_head">


                    <h2 style="     margin-left: 268px;">قائمة عناصر الوجبات</h2>


                    <!-- <div class="ll"> -->
                    <!-- <select name="" id="depart" class="select_details" style="    margin-left: 140px;
        width: 250px;
        margin-bottom: 20px;
        margin-top: 60px;">
                            <option value="">الإفطار</option>
                            <option value="">الغداء</option>
                            <option value="">العشاء</option>
                        </select>
                    </div> -->
                    <!-- <div class="ll">
                        <select name="" id="depart" class="select_details" style="    margin-left: -27px;
    width: 250px;
    margin-bottom: 20px;
    margin-top: 60px;">
                            <option value="">الوجبة الأولى</option>
                            <option value="">الوجبة الثانية</option>
                            <option value="">الوجبة الثالثة</option>
                        </select>
                    </div> -->
                    <!-- <div class="ll"> -->
                    <!-- <input type="text" class="hhh">
                               <input type="text" class="hhh"> -->
                    '
                    <!-- </div>' -->



                    <br>
                    <br>
                    <div class="menus">
                        <div class="menu_column">
                            <?php

// عرض العناصر الخاصة بالوجبات
$sql_items = "SELECT * FROM items";
$result_items = mysqli_query($conn, $sql_items);

if ($result_items && mysqli_num_rows($result_items) > 0) {
    while ($row_item = mysqli_fetch_assoc($result_items)) {
        ?>

                            <!-- <div class="menus"> -->


                            <!-- <div class="menu_column"> -->
                            <div class="single_menu">
                                <img src="img/chiken.jpg" alt="">
                                <div class="menu_content">
                                    <form method="POST" action="" class="uu">
                                        <h5><?= $row_item['item_name'] ?> </h5>
                                        <label for="ccc">
                                            <h5>الكمية </h5>
                                        </label>
                                        <input style="background-color: azure;
    width: 186px;
    margin-left: 10px;
    border-radius: 5px;
    height: 25px;
    box-shadow: 0 7px 25px rgb(0 0 0 / 30%);" name="qunty" type="number">
                                        <label for="ccc">
                                            <h5>وقتها </h5>
                                        </label>
                                        <select name="type" id="depart" class="select_details" style="margin-left: 12px;
    width: 186px;
    margin-bottom: 9px;
    margin-top: 12px;
    height: 26px;">
                                            <option value="الإفطار">الإفطار</option>
                                            <option value="الغداء">الغداء</option>
                                            <option value="العشاء">العشاء</option>
                                        </select>
                                        <input type="hidden" name="item_id" value="<?= $row_item['item_id'] ?>">
                                        <label for="ccc">
                                            <h5>اسم الوجبة</h5>
                                        </label>
                                        <input type="text" name="m_name" class="hhh" style="  margin-left: 16px;
    width: 170px;
    margin-left: 19px;
    margin-bottom: 10px;
    margin-top: 12px;">
                                        <label for="cc">
                                            <h5>وصفها </h5>
                                        </label>
                                        <input type="text" name="de_male" class="hhh" style="    margin-left: 16px;
                          width: 170px;
                          margin-bottom: 10px;
                          margin-top: 12px;">>
                                        <input type="submit" name="choose" class="choose" value="إختيار">
                                    </form>
                                </div>

                            </div>
                            <?php
    }
}

// إضافة الوجبة إلى قاعدة البيانات بعد النقر على زر "إختيار"
if (isset($_POST['choose'])) {
    $type = mysqli_real_escape_string($conn, $_POST['type']);
    $male_name = mysqli_real_escape_string($conn, $_POST['m_name']);
    $de_male = mysqli_real_escape_string($conn, $_POST['de_male']);

    // إدخال البيانات في الجدول الرئيسي meal
    $query = "INSERT INTO meal (nut_id, meal_name, meal_describtion, type, patient_id)
              VALUES ('$nutrition_id', '$male_name', '$de_male', '$type', '$id')";
    $resulty = mysqli_query($conn, $query);

    // التحقق من عدد الصفوف المتأثرة في الجدول
    if (mysqli_affected_rows($conn) > 0) {
        // استرداد مفتاح الأساسي الخاص بالصف الرئيسي المدخل حديثًا
        $meal_id = mysqli_insert_id($conn);

        // إدخال البيانات في الجدول الفرعي meal_items
        $item_id = mysqli_real_escape_string($conn, $_POST['item_id']);
        $qunty_male = mysqli_real_escape_string($conn, $_POST['qunty']);
        $query3 = "INSERT INTO meal_items (meal_id, item_id, qunty)
                   VALUES ('$meal_id', '$item_id', '$qunty_male')";
        $result = mysqli_query($conn, $query3);

        // التحقق من عدد الصفوف المتأثرة في الجدول
        if (mysqli_affected_rows($conn) > 0) {
            // الحصول على مفتاح الأساسي الخاص بالصف الفرعي المدخل حديثًا
            $meal_item_id = mysqli_insert_id($conn);

            // التحقق من وجود مفتاح أساسي صحيح في جدول meal_items
            $check_query = "SELECT * FROM meal_items WHERE MI_id = '$meal_item_id'";
            $check_result = mysqli_query($conn, $check_query);

            if (mysqli_num_rows($check_result) > 0) {
                // إضافة القيمة إلى جدول admit_meal
                $query4 = "INSERT INTO admit_meal (MI_id, admit_id, time)
                           VALUES ('$meal_item_id', '$admit_id', NOW())";
                $result4 = mysqli_query($conn, $query4);

                // التحقق من عدد الصفوف المتأثرة في الجدول
                if (mysqli_affected_rows($conn) > 0) {
                    echo "تمت إضافة الوجبة بنجاح!";
                } else {
                    echo "خطأ: لم يتم إضافة الوجبة بنجاح.";
                }
            } else {
                echo "خطأ: قيمة MI_id غير صحيحة!";
            }
        } else {
            echo "خطأ: لم يتم إضافة الوجبة بنجاح.";
        }
    } else {
        echo "خطأ: لم يتم إضافة الوجبة بنجاح.";
    }
}
?>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/nat.js"></script>
</body>

</html>