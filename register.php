<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>register</title>

  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/mystyle/mystyle15.css">
  <script src="//code.jquery.com/jquery.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>
  <header class="header-color">
    <div class="container">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="register.php">สมัครสมาชิก</a></li>
        <li><a href="login.html">เข้าสู่ระบบ</a></li>
      </ul>
    </div>
    <div class="header-color2">
      <div class="container">
        <a href="index.html"><img class="logo" src="image/logo.png"></a>
      </div>
    </div>
  </header>
  <main style="background: #333; margin-top: 130px;">
    <div class="container">
      <nav style="margin-bottom: 100px;">
        <ul class="nav nav-justified">
          <li>
            <a href="Promotion.php" class="manu">โปรโมชั่น</a>
          </li>
          <li>
            <a href="Pasta.php" class="manu">พาสต้า</a>
          </li>
          <li>
            <a href="Burger.php" class="manu">เบอร์เกอร์</a>
          </li>
          <li>
            <a href="appetizers.php" class="manu">อาหารทานเล่น</a>
          </li>
          <li>
            <a href="Drinks.php" class="manu">เครื่องดื่ม</a>
          </li>
        </ul>
      </nav>
      <div class="col-lg-6 login">
        <form>
          <h2 style="margin-bottom: 20px; color: black;">สร้างบัญชีของคุณ</h2>
          <div class="form-group">
            <label>อีเมลล์หรือชื่อบัญชี</label>
            <input type="email" class="form-control" placeholder="อีเมลล์หรือชื่อบัญชี">
          </div>
          <div class="form-group">
            <label>รหัสผ่าน</label>
            <input type="password" class="form-control" placeholder="รหัสผ่าน">
          </div>
          <div class="form-group">
            <label>หมายเลขโทรศัพท์</label>
            <input type="text" class="form-control" placeholder="0XX-XXX-XXXX">
          </div>
          <div class="form-group col-lg-3" style="padding: 0px;">
            <label>เลขที่</label>
            <input type="text" class="form-control" placeholder="เลขที่">
          </div>
          <div class="form-group col-lg-9" style="padding-right: 0px;">
            <label>ถนน</label>
            <input type="text" class="form-control" placeholder="ถนน">
          </div>
          <div class="form-group col-lg-6" style="padding: 0px;">
            <label>แขวง/ตำบล</label>
            <input type="text" class="form-control" placeholder="แขวง/ตำบล">
          </div>
          <div class="form-group col-lg-6" style="padding-right: 0px;">
            <label>เขต/อำเภอ</label>
            <input type="text" class="form-control" placeholder="เขต/อำเภอ">
          </div>
          <div class="form-group" style="padding: 0px;">
            <label>จังหวัด</label>
            <input type="text" class="form-control" placeholder="จังหวัด">
          </div>
          <div class="form-group" style="padding-right: 0px;">
            <label>รหัสไปรณีย์</label>
            <input type="text" class="form-control" placeholder="รหัสไปรณีย์">
          </div>
          <div style="float: right;">
            <a class="btn btn-default btn-lg" href="login.html" role="button">ยืนยัน</a>
          </div>
        </form>
      </div>
      <div class="col-lg-6">
        <h2 class="login-detail">บัญชีผู้ใช้ของคุณสามารถ</h2>
        <ul style="list-style-type: none;">
          <li>
            <h4 class="login-detail">บันทึกเมนูโปรดของคุณไว้เพื่อความรวดเร็วในการสั้งครั้งต่อไป</h4>
          </li>
          <li>
            <h4 class="login-detail">ผ่านขั้นตอนการคิดเงินได้อย่างรวดเร็วด้วยข้อมูลที่อยู่จัดส่งและข้อมูลการชำระเงินที่ได้บบันทึกไว้</h4>
          </li>
          <li>
            <h4 class="login-detail">ข้อเสนอพิศษส่งตรงถึงอีเมลล์คุณ</h4>
          </li>
        </ul>
      </div>
    </div>
  </main>
  <footer>
    <div class="container" style="padding-bottom: 40px;">
      <hr>
      <div class="col-lg-3">
        <h4>เกี่ยวกับเรา</h4>
        <p class="font-size-footer">
          Eat Restaurant
          <br>มีเมนู ดังนี้
        </p>
        <a href="Pasta.php" class="font-size-footer">พาสต้า</a>
        <br>
        <a href="Burger.php" class="font-size-footer">เบอร์เกอร์</a>
        <br>
        <a href="appetizers.php" class="font-size-footer">อาหารทานเล่น</a>
        <br>
        <a href="Drinks.php" class="font-size-footer">เครื่องดื่ม</a>
        <br>
      </div>
      <div class="col-lg-3" style="padding-right: 130px;">
        <h4>สถานที่ตั้ง</h4>
        <a href="https://www.google.co.th/maps/place/King+Mongkut's+University+of+Technology+Thonburi+(Bangkhuntian)/@13.5772745,100.4414213,15z/data=!4m5!3m4!1s0x0:0x25141f65cef4c68b!8m2!3d13.5772745!4d100.4414213" target="_blank" class="font-size-footer">เทียนทะและ 25, แขวง ท่าข้าม เขต บางขุนเทียน กรุงเทพมหานคร 10150</a>
      </div>
      <div class="col-lg-3">
        <h4>เวลาทำการ</h4>
        <p class="font-size-footer">เปิดทุกวัน</p>
        <p class="font-size-footer">เวลา 10:00 - 22:00 น.</p>
      </div>
      <div class="col-lg-3">
        <h4>ติดต่อเรา</h4>
        <p class="font-size-footer">เดลิเวอรี่ 4949</p>
      </div>
    </div>
    <div style="background-color: #a92111">
      <center>
        <a href="index.html"><img src="image/eat.png" style="margin: 15px;"></a>
      </center>
    </div>
  </footer>
</body>

</html>