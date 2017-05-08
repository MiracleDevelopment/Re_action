<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>3</title>
</head>

<body>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <title>3</title>

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
          <li><a href="../login.html">ออกจากระบบ</a></li>
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
        <img src="../image/promotion.jpg" style="width: 100%; margin-bottom: 20px;">
        <div class="col-lg-6">
          <div class="col-lg-12 food">
            <button type="button" class="btn btn-delete dropdown-toggle position" style=" z-index: 1;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">X</button>
            <div class="col-lg-7">
              <img src="../image/promotion1.png" style="width: 100%;">
            </div>
            <div class="col-lg-5">
              <h3 style="color: black;">ชุดประหยัด set1</h3>
              <p style="color: black;">เมื่อสั่งผ่านเว็บ www.eat.com สามารถซื้อ สปาเก็ตตี้สไปซี่ซีฟู้ด ขนมปังกระเทียมชีส และมะนาวโซดา ในราคาที่ถูกกว่า</p>
              <div class="clearfix" style="padding-top: 20px;">
                <h3 class="col-lg-6" style="margin: 0px; color: black;">฿ 199</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="col-lg-12 food">
            <button type="button" class="btn btn-delete dropdown-toggle position" style=" z-index: 1;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">X</button>
            <div class="col-lg-7">
              <img src="../image/promotion2.png" style="width: 100%;">
            </div>
            <div class="col-lg-5">
              <h3 style="color: black;">ชุดประหยัด set2</h3>
              <p style="color: black;">
                เมื่อสั่งผ่านเว็บ www.eat.com สามารถซื้อ สปาเก็ตตี้ไวท์ครีมซอส ขนมปังกระเทียม และไก่นิวออร์ลีนส์ ในราคาที่ถูกกว่า</p>
              <div class="clearfix" style="padding-top: 20px;">
                <h3 class="col-lg-6" style="margin: 0px; color: black;">฿ 199</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="col-lg-12 food">
            <button type="button" class="btn btn-delete dropdown-toggle position" style=" z-index: 1;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">X</button>
            <div class="col-lg-7">
              <img src="../image/promotion3.png" style="width: 100%;">
            </div>
            <div class="col-lg-5">
              <h3 style="color: black;">แฟมิลี่อีท คอมโบ</h3>
              <p style="color: black;">คุ้มที่สุด กับ 2 พาสต้า 2 เบอร์เกอร์ ขนมปังกระเทียมชีส ชีสซี่ ป๊อป และเครื่องดื่ม </p>
              <div class="clearfix" style="padding-top: 20px;">
                <h3 class="col-lg-6" style="margin: 0px; color: black;">฿459</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="col-lg-12 food" style="padding: 130px 235px;height: 282px;">
            <button type="button" class="btn btn-default btn-lg btn-plus" data-toggle="modal" data-target=".bs-example-modal-lg"><strong>+</strong></button>
            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content col-lg-12" style="padding: 10px;">
                  <form>
                    <div class="col-lg-6">
                      <p><img src="" class="form-img"></p>
                      <input type="file">
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label>ชื่อเมนูอาหาร</label>
                        <input type="text" class="form-control" placeholder="ชื่อเมนูอาหาร">
                      </div>
                      <div class="form-group">
                        <label>รายละเอียดอาหาร</label>
                        <textarea class="form-control" rows="12" style="margin-bottom: 10px;" placeholder="รายละเอียดอาหาร"></textarea>
                      </div>
                      <div class="form-group col-lg-9">
                        <input type="text" class="form-control" placeholder="ราคา">
                      </div>
                      <div class="col-lg-3">
                        <button class="btn btn-primary btn-lg" href="#" role="button" style="float: right; font-size: 14px;">อัพโหลด</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
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