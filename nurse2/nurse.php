<?php 
include '../conn.php';
session_start();
//
if(!isset($_SESSION['nurse_id'])){
   header("Location: ../main-page/main-page.php");
}
$nurse_id = $_SESSION['nurse_id'];
// $id = $_GET['id'];
    // استخدام قيمة المتغير المرسلة باستخدام GET هنا
    if (isset($_GET['id'])) {
        // استخدام قيمة المتغير المرسلة باستخدام GET هنا
        $id = $_GET['id'];
    }
    if (isset($_POST['check'])) {
        $admit_nurse = mysqli_real_escape_string($conn, $_POST['admit_nurse']);
        $admitmeal_idd = mysqli_real_escape_string($conn, $_POST['admitmeal_idd']);
        if (isset($_POST['if_need_admitting']) && $_POST['if_need_admitting'] == '1') {
            $if_need_admitting=$_POST['if_need_admitting'];
        }
    
        // إدخال البيانات في الجدول الرئيسي meal
        $query = "INSERT INTO meal_check (admit_nurse_id, admitmael_id , Done)
                  VALUES ('$admit_nurse', '$admitmeal_idd', '$if_need_admitting')";
        $check_result = mysqli_query($conn, $query) or die(mysqli_error($conn));}
    //    if(isset($_POST['insert'])){
    //     $sub = mysqli_real_escape_string($conn, $_POST['sub']);
    //     $query2 = "INSERT INTO patient_nurse (patient_id , nurse_id)
    //     VALUES ('$sub', '$nurse_id')";
    //     $check_result2 = mysqli_query($conn, $query2) or die(mysqli_error($conn));
    //    }
    ?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>nurse</title>
    <link rel="stylesheet" href="css/nurse.css" />
</head>

<body>
<?php
                $sql = "SELECT * FROM nurse WHERE nurse_id = $nurse_id";
                $result = mysqli_query($conn, $sql);
                
                if ($result && mysqli_num_rows($result) > 0) {
                  $row = mysqli_fetch_assoc($result);
                  $nurse_id = $row['nurse_id'];
                  ?>

    <header class="header">
        <a href="#" class="logo"> <i class="header_line"></i>
            <img width="40px" height="40px" style="display: inline; margin-bottom: -10px;" src="img/03.png" alt=""> Safe
            Attention</a>
        <nav style="direction: rtl;" class="navbar">
            <a href="localhost/hospital/mini-project/main-page/main-page.php"> الصفحة الرئيسية</a>
            <!-- <a href="#login"> تسجيل الدخول</a> -->
            <a href="#aboutas">الممرض</a>
            <a href="#pncs"> <?php echo $row['n_fname']."  ".$row['n_lname'];  ?></a>
            <!-- <a href="#services"> خدماتنا</a> -->
        </nav>

    </header>
    <?php } ?>

    <section class="pos">
        <section class="all-patiot" id="pati">
    <?php
                $sql = "SELECT * FROM nurse WHERE nurse_id = $nurse_id";
                $result = mysqli_query($conn, $sql);
                
                if ($result && mysqli_num_rows($result) > 0) {
                  $row = mysqli_fetch_assoc($result);
                  $nurse_id = $row['nurse_id'];
                  $doctor_id = $row['doctor_id'];
                  $nutrition_id = $row['nutrition_id'];
                
                  $sql2 = "SELECT * FROM patient WHERE doctor_id = $doctor_id";
                  $result2 = mysqli_query($conn, $sql2);
                
                  if ($result2 && mysqli_num_rows($result2) > 0) {
                    while ($row2 = mysqli_fetch_assoc($result2)) {
                      $patient_id = $row2['patient_id'];
                
                
                         ?>
        <div class="pationt">
                <div>
                    <img src="img/food.jpg">
                    <p style="text-align:center;">
                        <span><label for="c"> <span style="color: red;"><?php echo $row2['p_fname']."  ". $row2['p_lname'];?></span>  
                                               </label> </span>
                        <br>
                    </p>
                </div>
                <div>
                <button class="checkup open"><a href='nurse.php?id=<?= $row2['patient_id'] ?>'>فحص المريض </a></button>
                    <!-- <button class="data-pationt">تم توصيل الطلب</button> -->
                    <button class="data-pationt"><a href='nurse.php?id=<?= $row2['patient_id'] ?>'>تم توصيل الطلب </a></button>
                </div>
            </div>
            <?php }}}?>
            <!-- <div class="pationt">
                <div>
                    <img src="img/food.jpg">
                    <p style="text-align:center;">
                        <span>مجمد اجمد</span>
                        <br>
                        <span>20 </span>
                    </p>
                </div>
                <div>
                    <button class="checkup open">عرض التشخيص</button>
                    <button class="data-pationt">تم توصيل الطلب</button>
                </div>
            </div>
            <div class="pationt">
                <div>
                    <img src="img/food.jpg">
                    <p style="text-align:center;">
                        <span>مجمد اجمد</span>
                        <br>
                        <span>20 </span>
                    </p>
                </div>
                <div>
                    <button class="checkup open">عرض التشخيص</button>
                    <button class="data-pationt">تم توصيل الطلب</button>
                </div>
            </div>
            <div class="pationt">
                <div>
                    <img src="img/food.jpg">
                    <p style="text-align:center;">
                        <span>مجمد اجمد</span>
                        <br>
                        <span>20 </span>
                    </p>
                </div>
                <div>
                    <button class="checkup open">عرض التشخيص</button>
                    <button class="data-pationt">تم توصيل الطلب</button>
                </div>
            </div>
            <div class="pationt">
                <div>
                    <img src="img/food.jpg">
                    <p style="text-align:center;">
                        <span>مجمد اجمد</span>
                        <br>
                        <span>20 </span>
                    </p>
                </div>
                <div>
                    <button class="checkup open">عرض التشخيص</button>
                    <button class="data-pationt">تم توصيل الطلب</button>
                </div>
            </div>
            <div class="pationt">
                <div>
                    <img src="img/food.jpg">
                    <p style="text-align:center;">
                        <span>مجمد اجمد</span>
                        <br>
                        <span>20 </span>
                    </p>
                </div>
                <div>
                    <button class="checkup open">عرض التشخيص</button>
                    <button class="data-pationt">تم توصيل الطلب</button>
                </div> -->
            </div>
        </section>
        <?php
  $sql2 = "SELECT * FROM patient WHERE patient_id = $id";
  $result2 = mysqli_query($conn, $sql2);

  if ($result2 && mysqli_num_rows($result2) > 0) {
    $row3 = mysqli_fetch_assoc($result2);
            ?>
        <div id="with-div"></div>
        <aside id="dignosis-for-pationt">
            <!-- بيانات المريض المراد الاهتمام به -->
            <form action="">
                <div class="see-infor-pationt" style="display: flex;
                flex-direction: row;
                justify-content: space-between; 
                direction: rtl;">
                    <input type="text" class="tex" name="name" value="<?php echo $row3['p_fname'];?>" readonly>
                    <input type="number" class="tex" name="age" value="<?php echo $row3['p_age'];?>" readonly>
                    <br>
                </div>
            </form>
            <?php }?>
            <!-- حالةالمريض -->
            <?php
  $sql3 = "SELECT * FROM diagnosis WHERE patient_id = $id ";
  $result4 = mysqli_query($conn, $sql3);

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
            <form method="POST" action="">
                <div class="see-state-for-pationt">
                    <div class="dignosis-">
                        <div style="    display: flex;
                        flex-direction: column;
                        flex-wrap: wrap;">
                            <label for="c">حالة
                                المريض</label>
                                <select name="state" id="c" class="tex">
                            <option value=""><?php echo $state;?></option>
                            </select>
                            <label for="b">فحص الضغط</label><input id="b" class="tex" name="pressure-check" type="text" value="<?php echo $hypertension;?>" readonly>
                            <label for="bb">فحص الدهون</label> <input id="bb" class="tex" name="s-check" type="number" value="<?php echo $fats_checkup;?>" readonly>
                            <label for="bbb">فحص السكر</label><input id="bbb" class="tex" name="cols-check"
                                type="number" value="<?php echo $diabetess;?>" readonly>
                            <div>

                                <label for="bbbb"> </label> 
                            </div>
                            <textarea style="direction: rtl;" name="allergy_area" class="tex" id="ff" cols="50" rows="25"
                            placeholder=" وصف الحساسية :<?php echo $allergy;?>" readonly></textarea>
                        </div>
                        <div class="for-area">
                            <textarea style="direction: rtl;" name="diagnosiss" class="tex" id="f" cols="25" rows="5"
                            placeholder=" التشخيص :<?php echo $dia_description;?>" readonly></textarea>
                            <textarea style="direction: rtl;" name="pharmaceutical" class="tex" id="f" cols="25" rows="5"
                            placeholder=" الادوية :<?php echo $dia_description;?>" readonly></textarea>
                        </div>
                        <div class="for-checked">
                            <!-- <label for="v">هل المريضة بحاجة للترقيد</label><input onclick="to_hide2()" id="v"
                                name="pregnant" type="checkbox"> -->
                        </div>
                        <?php
                $sql5 = "SELECT * FROM admit_a WHERE dia_id = $diagnosis_id ";
                $result5 = mysqli_query($conn, $sql5);

                if ($result5 && mysqli_num_rows($result5) > 0) {
                    $row6 = mysqli_fetch_assoc($result5);
                    $admit_id= $row6['admit_id'];
                    $dormisory = $row6['dormisory'];
                    $room = $row6['room'];
                }
                ?>
                        <div id="hidd">
                            <!-- <input type="text" id="vv" name="typeOf-block" class="tex" placeholder=""><label
                                for="vv">رمز
                                البلك</label> -->
                        <input type="text" class="tex" value="<?php echo $dormisory;?>"  readonly>
                        <label for="vv" >رقم البلك :</label>
                            <!-- <input type="text" id="vvv" name="number-room" class="tex" placeholder=""><label
                                for="vvv">رقم
                                الغرفة</label> -->
                       <input type="text" class="tex" value="<?php echo $room;?>"  readonly>
                       <label for="vvv">رقم الغرفة :</label>
                       <input type="hidden" name="sub" value="<?php echo $id ;?>" >
                        </div>
                        <?php }  ?>
                    </div>
                    <input type="submit" id="sub" name="insert" value=" اغلاق" >
                </div>
            </form>
        </aside>
        <aside id="pationt-service">
        <?php
                $sql = "SELECT * FROM diagnosis WHERE patient_id = $id";
                $result = mysqli_query($conn, $sql);
                
                if($result && mysqli_num_rows($result) > 0) {
                  $row = mysqli_fetch_assoc($result);
                  $dia_id  = $row['dia_id'];
                  $doctor_id = $row['doctor_id'];
                  $nutrition_id = $row['nutrition_id'];
                
                  $sql2 = "SELECT * FROM admit_a WHERE dia_id = $dia_id ";
                  $result2 = mysqli_query($conn, $sql2);
                
                  if($result2 && mysqli_num_rows($result2) > 0) {
                    while($row2 = mysqli_fetch_assoc($result2)) {
                      $admit_id  = $row2['admit_id'];

                      $sql3 = "SELECT * FROM admit_meal WHERE admit_id = $admit_id  ";
                      $result3 = mysqli_query($conn, $sql3);
                    
                      if ($result3 && mysqli_num_rows($result3) > 0) {
                        while($row3 = mysqli_fetch_assoc($result3)) {
                          $MI_id  = $row3['MI_id'];
                          $admitmeal_id = $row3['admitmeal_id'];
                
                          $sql4 = "SELECT * FROM meal_items WHERE MI_id  = $MI_id ";
                  $result4 = mysqli_query($conn, $sql4);
                
                  if($result4 && mysqli_num_rows($result4) > 0) {
                    while($row4 = mysqli_fetch_assoc($result4)) {
                     
                        $meal_id = $row4['meal_id'];
                        $sql5 = "SELECT * FROM meal WHERE meal_id = $meal_id ";
                        $result5 = mysqli_query($conn, $sql5);
                      
                        if($result5 && mysqli_num_rows($result5) > 0) {
                          while($row5 = mysqli_fetch_assoc($result5)) {
                            $meal_name = $row5['meal_name'];
                            $meal_describtion = $row5['meal_describtion'];
                            $type = $row5['type'];
                
                         ?>
            <!-- بيانات المريض المراد الاهتمام به -->
            <form method="POST" action="">
            <div class="see-infor-pationt">
                    <input type="text" class="tex" name="name"   placeholder=" اسم الوجبة :<?php echo $meal_name;?>" readonly>
                    <br>
                    <input type="number" class="tex" name="age" placeholder=" وصفها :<?php echo $meal_describtion;?>" readonly>
                    <br>
                    <input type="text" class="tex" name="type-of-disease" placeholder=" نوعها :<?php echo  $type;?>" readonly>
                    <br>
                </div>
            <div class="">
                <!-- رؤية طلبات المريض -->
                <?php 
               $sql6 = "SELECT * FROM admit_nurse WHERE admit_id = $admit_id ";
               $result6 = mysqli_query($conn, $sql6);
               if($result6 && mysqli_num_rows($result6) > 0) {
                   while($row6 = mysqli_fetch_assoc($result6)) {
                      $AN_id = $row6['AN_id'];?>
                <input type="hidden" name="admit_nurse" value="<?php echo $AN_id;?>" readonly >
                <input type="hidden" class="tex" name="admitmeal_idd" value=" <?php echo $admitmeal_id ;?>">
                <label for="v">هل تم استلام الوجبة</label><input id="v"
                            name="if_need_admitting" value="1" type="checkbox">
                    <input type="submit" name="check" value="check" > 
                </form>
            </div>
        </aside>
        <?php 
                   }}}}}}}}}}}
?>
        <script src="js/nurse.js"></script>
</body>

</html>
