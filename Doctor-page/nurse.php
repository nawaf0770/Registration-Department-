<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Nurse</title>
  <link rel="stylesheet" href="CSS/header.css" />
  <link rel="stylesheet" href="CSS/nurse.css" />
</head>

<body>
<header class="header"> 
        <a href="#" class="logo" > <i class="header_line" ></i> 
          <img width="40px" height="40px" style="display: inline; margin-bottom: -10px;" src="img/03.png" alt=""> Safe Attention</a>
         <nav style="direction: rtl;" class="navbar">
             <a href="#home"> الصفحة الرئيسية</a>
             <a href="#login"> تسجيل الدخول</a>
             <a href="#aboutas">  من نحن</a>
             <a href="#pncs">  PNCS</a>
             <a href="#services"> خدماتنا</a>
         </nav>
    </header> 
  <section class="main-section">
    <section class="section-doct-nurs">
      <div class="doct-nurs">
                 <?php
                 include '../conn.php';
                        $sql2 = "SELECT * FROM nurse";
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
        <img src="Img/human/1b52fd81c2282b432b85dc6a8a01f13d.jpg">
        <p>
        <label for="c"> <span style="color: black;"><?php echo $rows['n_fname']."  ". $rows['n_lname'];?></span> : اســـم الممـرض </label>
          <br>
          <br>
          <label for="c"> <span style="color: black;"><?php echo $rows['n_period'];?></span>  
                                               : الفتـــرة</label>
        </p>
        <button class="chose">إختيار</button>
      </div>
      <?php 

                    }

                }else{
                    //we dont have data in database

                }}?>
      <!-- <div class="doct-nurs">
        <img src="Img/human/1b52fd81c2282b432b85dc6a8a01f13d.jpg">
        <p>
          <span>محسن محمد</span>
          <br>
          <span>30 </span>
        </p>
        <button class="chose">إختيار</button>
      </div>
      <div class="doct-nurs">
        <img src="Img/human/1b52fd81c2282b432b85dc6a8a01f13d.jpg">
        <p>
          <span>محسن محمد</span>
          <br>
          <span>30 </span>
        </p>
        <button class="chose">إختيار</button>
      </div>
      <div class="doct-nurs">
        <img src="Img/human/1b52fd81c2282b432b85dc6a8a01f13d.jpg">
        <p>
          <span>محسن محمد</span>
          <br>
          <span>30 </span>
        </p>
        <button class="chose">إختيار</button>
      </div>
      <div class="doct-nurs">
        <img src="Img/human/1b52fd81c2282b432b85dc6a8a01f13d.jpg">
        <p>
          <span>محسن محمد</span>
          <br>
          <span>30 </span>
        </p>
        <button class="chose">إختيار</button>
      </div>
      <div class="doct-nurs">
        <img src="Img/human/1b52fd81c2282b432b85dc6a8a01f13d.jpg">
        <p>
          <span>محسن محمد</span>
          <br>
          <span>30 </span>
        </p>
        <button class="chose">إختيار</button> -->
      </div>
    </section>
  </section>
  <script src="JS/nurse.js"></script>
</body>

</html>