
<?php
$nameError="";
$passwordError="";
$nameORpassError="";
session_start();
include '../conn.php';
if(isset($_POST['user-name']) && isset($_POST['password'])){
    
      $username = $_POST['user-name'];
      $password = $_POST['password'];
    
    
  if(empty($username)){
    $nameError="الرجاء ادخال اسم المستخدم";
    //exit();
  }
  elseif(empty($password)){
    $passwordError= "الرجاء ادخال كلمة المرور";
    //exit();
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
            header("Location: ../newadminpage/index.php");
            exit();
        }elseif($row['role'] == 'doctor'){
            $D_ID = $row['U_id'];
                        
                $sql = " SELECT doctor_id  FROM doctor WHERE user_id = $D_ID ";
                if($result = mysqli_query($conn, $sql)){
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_array($result)){
                             $_SESSION['D_id'] = $row['doctor_id'];
                        }
                    } else{
                        echo "No records matching your query were found.";
                    }
                } else{
                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                }
          header("Location: ../Doctor-page/List-of-pationt.php");
            exit();
        }
        
        elseif($row['role'] == 'patient') {
            include '../conn.php';
            $patent_id = $row['U_id'];
            $sql4 = "SELECT patient_id FROM patient WHERE user_id = $patent_id";
            if ($result4 = mysqli_query($conn, $sql4)) {
                if (mysqli_num_rows($result4) > 0) {
                    while ($row = mysqli_fetch_array($result4)) {
                        $_SESSION['patent_id'] = $row['patient_id'];
                    }
                } else {
                    echo "No records matching your query were found.";
                }
            } else {
                echo "ERROR: Could not able to execute $sql4. " . mysqli_error($conn);
            }
            // header("Location: ../patient-page2/index.php");
            header("Location: ../patient_page/indexp.php");
            exit();
        } elseif($row['role'] == 'nutrition'){
            include '../conn.php';
            $nutrition_id = $row['U_id'];
            $sql5 = "SELECT nutrition_id FROM nutrition WHERE user_id = $nutrition_id";
            if ($result5 = mysqli_query($conn, $sql5)) {
                if (mysqli_num_rows($result5) > 0) {
                    while ($row = mysqli_fetch_array($result5)) {
                        $_SESSION['nutrition_id'] = $row['nutrition_id'];
                    }
                } else {
                    echo "No records matching your query were found.";
                }
            } else {
                echo "ERROR: Could not able to execute $sql5. " . mysqli_error($conn);
            }
            // header("Location: ../nat_page2/index.php");
            header("Location: ../nutation haneen2/indexh.php");
            exit();
        }elseif($row['role'] == 'nurse'){
            include '../conn.php';
            $nurse_id = $row['U_id'];
            $sql6 = "SELECT nurse_id FROM nurse WHERE user_id = $nurse_id";
            if ($result6 = mysqli_query($conn, $sql6)) {
                if (mysqli_num_rows($result6) > 0) {
                    while ($row = mysqli_fetch_array($result6)) {
                        $_SESSION['nurse_id'] = $row['nurse_id'];
                    }
                } else {
                    echo "No records matching your query were found.";
                }
            } else {
                echo "ERROR: Could not able to execute $sql6. " . mysqli_error($conn);
            }
            header("Location: ../nurse2/nurse.php");
            exit(); }
        else{
            header("location:main-page.php");
          }
        }
        }
      else
      { $nameORpassError="اسم المستخدم او كلمة المرور خاطئة";
      }}}
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الصفحة الرئيسية</title>
    <link rel="stylesheet" href="CSS/main-page.CSS">
</head>

<body>
    <!-- <div class="back"> </div> -->
    <header class="main-header" >
        <nav>
            <!-- <h3 class="logp">PNCS</h3> -->
            <ul>
                <li><a href="http://localhost/hospital/mini-project/main-page/main-page.php">الصفحة الرئيسية</a></li>
                <!-- <li><a href="#">تسجيل الدخول</a></li>
                <li><a href="#">من نحن</a></li> -->
            </ul>
        </nav>
        <div class="login">
            <h1 style="color: white;"> Stay Safe , Stay Healthy
    </h1>
    <br>
         <h5 style="color: red;"> تقديم خدمة الغذاء والتغذية للمرضى بشكل أكثر كفاءة </h5>
            <button style="width: 227px;
    height: 50px;
    margin-left: -5px;
    font-size: 17px;
    background-color: #b5a295;" id="log">تسجيل الدخول</button>
        </div>
    </header>
    <div class="with-div"></div>
    <div id="hid">
        <!-- تسجيل الدخول -->
        <form action="main-page.php" method="POST" >
            <section class="section-log">
                <br>
                <input class="user-inp inputt" name="user-name" id="username" placeholder="اسم المستخدم" type="text">
                <br>
                <span style="color: red;"><?php echo $nameError?></span>
                <br>
                <input class="pass-inp inputt" name="password" id="password" type="password" placeholder="كلمة المرور">
                <br>
                <span style="color: red;"><?php echo $passwordError?></span>
                <br>
                <span style="color: red;"><?php echo  $nameORpassError?></span>
                <input type="submit" name="login"  value="تسجيل الدخول">
                
            </section>
        </form>
        <aside class="aside-log">
            <img src="img/h2.png" alt="" class="imgg">
        </aside>
    </div>
    <section class="main-section">
        <section class="info-for-PNCS">
            <div>
                <img src="img/04.png" alt="">
                <p style ="
    margin-top: 31px;
    font-size: 16px;
     font-family: fangsong;
    color: #7f766a" > كادر صحي متكامل ملتزم بلمواعيد     
                </p>
            </div>
            <div>
                <img src="img/03.png" alt="">
                <p style ="
    margin-top: 31px;
    font-size: 16px;
     font-family: fangsong;
    color: #7f766a" > تقديم وجبات غذائية مختارة بعناية لمرضانا  
                </p>
            </div>
            <div>
                <img src="img/02.png" alt="">
                <p style ="
    margin-top: 31px;
    font-size: 16px;
     font-family: fangsong;
    color: #7f766a" > رعاية متواصلة للمرضى 
                </p>
            </div>
            <div>
                <img src="img/01.png" alt="">
                <p style ="
    margin-top: 31px;
    font-size: 16px;
     font-family: fangsong;
    color: #7f766a" > تنظيم وتسهيل عملية توفير الغذاء والوجبات للمرضى
                </p>
            </div>
        </section>
        <section class="addvantage">
            <img src="img/169671343ef815d20808e6c9e43c5c19.jpg" alt="">
            <div>
                <h3 style="margin: 0 38px 5px 0;"><b>مميزاتنا</b></h3>
                <p style ="
    margin-top: 31px;
    font-size: 16px;
     font-family: fangsong;
    color: #000000;" >  تقديم وجبات مثالية للمرضى -
        <br>
        فريق صحي متكامل للرعاية -
        <br>
         سهولة التواصل مع طاقم العمل -
          
                </p>
            </div>
        </section>
        <section class="my-dr">
            <h3 style="font-size: xx-large;;"><b>فريقنا</b></h3>
            <div>
            <?php
                        $sql7 = "SELECT * FROM doctor";
                $result7 = mysqli_query($conn,$sql7);
                if($result7==TRUE){
                $rows=mysqli_num_rows($result7);//function to qet all the rows in database 
                //check the num of rows
                if($rows > 0){
                    //we have data in database
                    while($rows=mysqli_fetch_assoc($result7))
                    {
                        
                        ?>
                <div>
                    <img src="img/docooo.png" alt="">
                    <p><label for="c"> <span style="color: black;"><?php echo $rows['d_fname']."  ". $rows['d_lname'];?></span>  
                                               </label>
                    </p>
                </div>
                <?php 

                    }

                    }else{
                    //we dont have data in database

                    }}?>
                <!-- <div>
                    <img src="img/169671343ef815d20808e6c9e43c5c19.jpg" alt="">
                    <p>Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Id voluptate, sit
                        voluptates quam pariatur eum voluptatum
                        dolores a sequi distinctio, asperiores
                        ipsum dolorum quas repellendus vero rem
                        repellat, unde quibusdam.
                    </p>
                </div>
                <div>
                    <img src="img/1b52fd81c2282b432b85dc6a8a01f13d.jpg" alt="">
                    <p>Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Id voluptate, sit
                        voluptates quam pariatur eum voluptatum
                        dolores a sequi distinctio, asperiores
                        ipsum dolorum quas repellendus vero rem
                        repellat, unde quibusdam.
                    </p>
                </div> -->
            </div>
        </section>
    </section>
    <footer>

    </footer>
    <script src="JS/main-page.js"></script>
</body>

</html>