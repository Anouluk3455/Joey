<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuan3</title>
    <link rel="stylesheet" href="food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="sun1">
        <div class="logo">
        <a href="index.php"><img src="img/nuan logo.png" alt=""></a>
        </div>
  <div class="tap">
  <ul>
      <li> <a href="index.php"><b>ຫນ້າຫລັກ</b></a></li>
      <li> <a href="Group1.php"><b>ເມນູອາຫານ</b></a></li>
      <li> <a href="callcenter.php"><b>ສອບຖາມຂໍ້ມູ່ນ</b></a></li>
      <li> <a href="Group 7.php"><b>ກ່ຽວກັບ</b></a></li>
  </ul>
  </div>
</div>
<div class="header">
  
 <div class="thergpok" >
     <img src="img/khao.png" alt=""></a>
 </div>

     <div class="Descritption">
     <p><b>ເປັນອາຫານປະເພດຫນື່ງເພື່ອລູກຄ້າຢາກກີນເສັ້ນແບບປະເທດຫວຽດນາມ ເປັນອາຫານທີ່ນໍາໃຊ້ຂາເປັດ ຫອມເຕົ້າຮູ້ ແລະ ຊີ້ນເປັດເອົາມາປະຍຸກໃຫ້ເກີດເປັນອາຫານຂອງຮ້ານເຮົາ ໄດ້ມີການແຕ່ງຫນ້າຫມີ່ແຫ່ງກໍ່ຄືເຮົາຈະລາດຫນ້າຫມີ່ດ້ວຍອາຫານທີ່ເຮົາປຸງແຕ່ງສໍາເລັດເຊີ່ງວ່າເມນູແຕ່ລະຢ່າງຈະມີຄວາມແຕກຕ່າງກັນລວມໄປເຖີງລົດຊາດທີ່ຫອມແຊບກົມກ່ອມ</b></p>
     </div>
     
   
         <!-- เพิ่มโค้ดสำหรับการเชื่อมต่อฐานข้อมูลและดึงข้อมูลสินค้า -->
    <?php
        // ทำการเชื่อมต่อฐานข้อมูล
        $sname= "localhost";
        $unmae= "root";
        $password = "";
        
        $db_name = "final";
        
        $conn = mysqli_connect($sname, $unmae, $password, $db_name);
        
        if (!$conn) {
          echo "Connection failed!";
        }

// สร้างคำสั่ง SQL สำหรับดึงข้อมูลสินค้าที่มี Ty_ID เท่ากับ "ອາຫານ"
$sql = "SELECT * FROM products WHERE Ty_ID = 'ເສັ້ນໝີ່'";

// ทำการส่งคำสั่ง SQL ไปยังฐานข้อมูล
$result = mysqli_query($conn, $sql);
        ?>
        <div class="menu">
    <?php
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="menu1">
                <a href="data:image/jpeg;base64,<?php echo base64_encode($row['image']); ?>" target="_blank">
                    <img src="data:image/jpeg;base64,<?php echo base64_encode($row['image']); ?>" alt="" style="width: 100px; height: 100px;">
                </a>
                <p style="color:#701417; margin-top:5px;"><?php echo $row["Pro_name"]; ?></p>
                <p class="text-danger"><?php echo $row["Pro_price"]; ?> Kip</p>
            </div>
            <?php
        }
    } else {
        echo 'ไม่พบข้อมูลสินค้า';
    }
    ?>
</div>

    <?php

        // ปิดการเชื่อมต่อฐานข้อมูล
        mysqli_close($conn);
    ?>


</div>

<div class="footer">
  <div class="social">
    <hr>
 <a href="www.joeyyy3455@gmail.com"><i class="fa fa-envelope-o"></i></a>
 <a href="tittr.php"><i class="fa fa-whatsapp" ></i></a>
 <a href="https://www.facebook.com/callme.nuan"><i class="fa fa-facebook" ></i></a>
</div>
<div class="tap2">
    <nav>
        <ul>
            <li><a href="index.php"><b>ຫນ້າຫລັກ</b></a></li>
            <li><a href="Group1.php"><b>ເມນູອາຫານ</b></a></li>
            <li><a href="callcenter.php"><b>ສອບຖາມຂໍ້ມູ່ນ</b></a></li>
            <li><a href="Group 7.php"><b>ກ່ຽວກັບ</b></a></li>
        </ul>
    </nav>
</div>

</div>
    
</body>
</html>