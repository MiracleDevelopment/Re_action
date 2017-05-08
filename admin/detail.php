<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>detail</title>
</head>

<body>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <title>home</title>

    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/mystyle/mystyle15.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </head>

  <body>
    <header class="header-color">
      <div class="container">
        <ul class="nav navbar-nav navbar-right">
          <li>
            <p style="padding-top:14px; padding-right:7px; font-weight: bold">Dhanaithorn</p>
          </li>
          <li><a href="../login.php">ออกจากระบบ</a></li>
        </ul>
      </div>
      <div class="header-color2">
        <div class="container">
          <a href="home.php"><img class="logo" src="../image/logo.png"></a>
          <a href="#" style="float: right; font-size: 50px; color: #a92111; margin: 25px 20px;">ADMIN</a>
        </div>
      </div>
    </header>
    <main style="background: #333; margin-top: 130px;">
      <div class="container">
        <nav style="margin-bottom: 20px;">
          <ul class="nav nav-justified">

            <li>
              <a href="promotionadmin.php" class="manu">โปรโมชั่น</a>
            </li>
            <li>
              <a href="pastaadmin.php" class="manu">พาสต้า</a>
            </li>
            <li>
              <a href="burgeradmin.php" class="manu">เบอร์เกอร์</a>
            </li>
            <li>
              <a href="appetizersadmin.php" class="manu">อาหารทานเล่น</a>
            </li>
            <li>
              <a href="drinksadmin.php" class="manu">เครื่องดื่ม</a>
            </li>
            <li>
              <a href="detail.php" class="manu">ข้อมูลการสั้งซื้อ</a>
            </li>
          </ul>
        </nav>
        <div style="margin-top: 40px;" class="clearfix">
          <h2 style="float: left;">ข้อมูลการสั้งซื้อ</h2>
          <ul class="nav navbar-nav navbar-right" style="margin: auto;">
            <li><a href="#" class="manu" style="font-size: 16px; padding: 10px;">ประจำวัน</a></li>
            <li><a href="#" class="manu" style="font-size: 16px; padding: 10px;">สัปดาห์</a></li>
            <li><a href="#" class="manu" style="font-size: 16px; padding: 10px;">เดือน</a></li>
          </ul>
        </div>
        <table class="table-data">
          <tr>
            <th>
              <p>ชื่อ - นามสกุล
                <span class="btn-group" role="group">
<button type="button" class="btn btn-arrow dropup"><span class="caret"></span></button>
                <button type="button" class="btn btn-arrow"><span class="caret"></span></button>
                </span>
              </p>
            </th>
            <th>
              <p>อีเมลล์หรือชื่อบัญชี
                <span class="btn-group" role="group">
<button type="button" class="btn btn-arrow dropup"><span class="caret"></span></button>
                <button type="button" class="btn btn-arrow"><span class="caret"></span></button>
                </span>
              </p>
            </th>
            <th>
              <p>รายการอาหาร</p>
            </th>
            <th style="text-align: center;">
              <p>จำนวน</p>
            </th>
            <th style="text-align: center;">
              <p>ยอดชำระ
                <span class="btn-group" role="group">
<button type="button" class="btn btn-arrow dropup"><span class="caret"></span></button>
                <button type="button" class="btn btn-arrow"><span class="caret"></span></button>
                </span>
              </p>
            </th>
          </tr>
          <tr>
            <td>
              <p>ดนัยธร ตันยา</p>
            </td>
            <td>
              <p>turkky.dnt@hotmail.com</p>
            </td>
            <td>
              <p>สปาเก็ตตี้ไวท์ครีมซอส</p>
            </td>
            <td style="text-align: center;">
              <p>2</p>
            </td>
            <td style="text-align: center;">
              <p>฿ 258</p>
            </td>
          </tr>
          <tr>
            <td>
              <p>พรนภา เจริญศิริ</p>
            </td>
            <td>
              <p>eye-vava@gmail.com</p>
            </td>
            <td>
              <p>ดับเบิล ชีส เบอร์เกอร์ XL</p>
              <p>ดับเบิล ชีส เบอร์เกอร์ XL</p>
            </td>
            <td style="text-align: center;">
              <p>1</p>
              <p>2</p>
            </td>
            <td style="text-align: center;">
              <p>฿ 129</p>
              <p>฿ 129</p>
            </td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td>
              <p style="text-align: center; font-weight:bold;">รวม</p>
            </td>
            <td style="text-align: center; font-weight:bold;">
              <p>5</p>
            </td>
            <td style="text-align: center; font-weight:bold;">
              <p>฿ 1450</p>
            </td>
          </tr>
        </table>
        <div style="margin-top: 40px;" class="clearfix">
          <h2 style="float: left;">เมนูยอดนิยม</h2>
        </div>
        <table class="table-detail">
          <tr>
            <th style="text-align: center;">
              <p>ลำดับ</p>
            </th>
            <th style="text-align: center;">
              <p>ชื่ออาหาร</p>
            </th>
            <th style="text-align: center;">
              <p>รูปอาหาร</p>
            </th>
            <th style="text-align: center;">
              <p>ราคา</p>
            </th>
          </tr>
          <tr>
            <td style="text-align: center;">
              <p>1</p>
            </td>
            <td style="text-align: center;">
              <p>ดับเบิล ชีส เบอร์เกอร์ XL</p>
            </td>
            <td>
              <center><img src="../image/2.jpg" style="height: 150px; width: 145px;"></center>
            </td>
            <td style="text-align: center;">
              <p>฿ 129</p>
            </td>
          </tr>
          <tr>
            <td style="text-align: center;">
              <p>2</p>
            </td>
            <td style="text-align: center;">
              <p>ดับเบิล ชีส เบอร์เกอร์ XL</p>
            </td>
            <td>
              <center><img src="../image/2.jpg" style="height: 150px; width: 145px;"></center>
            </td>
            <td style="text-align: center;">
              <p>฿ 129</p>
            </td>
          </tr>
          <tr>
            <td style="text-align: center;">
              <p>3</p>
            </td>
            <td style="text-align: center;">
              <p>ดับเบิล ชีส เบอร์เกอร์ XL</p>
            </td>
            <td>
              <center><img src="../image/2.jpg" style="height: 150px; width: 145px;"></center>
            </td>
            <td style="text-align: center;">
              <p>฿ 129</p>
            </td>
          </tr>
        </table>
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
          <a href="#" class="font-size-footer">พาสต้า</a>
          <br>
          <a href="#" class="font-size-footer">เบอร์เกอร์</a>
          <br>
          <a href="#" class="font-size-footer">อาหารทานเล่น</a>
          <br>
          <a href="#" class="font-size-footer">เครื่องดื่ม</a>
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
          <a href="#"><img src="../image/eat.png" style="margin: 15px;"></a>
        </center>
      </div>
    </footer>
  </body>

  </html>
</body>

</html>