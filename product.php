<!DOCTYPE html>
<html lang="th">

<head>
  <!-- css -->
  <?php include("css.php") ?>
</head>

<body>
  <header>
    <!-- header -->
    <?php include("header.php") ?>
  </header>

  <!-- container -->
  <div id="container" class="container">
    <!-- rentdata -->
    <?php include("rentdata.php") ?>

    <!-- modal -->
    <?php include("modal.php") ?>

    <!-- product -->
    <div>
      <h2>สินค้าและบริการ</h2>
      <h4>รถเช่าทั้งหมดของเรา</h4>
      <div class="filter-menu text-end">
        <label for="filter-dropdown">เลือกประเภท:</label>
        <select id="filter-dropdown" class="filter-dropdown">
          <option value="all">ทั้งหมด</option>
          <option value="on-sale">ราคาพิเศษ</option>
          <option value="available" selected>รถว่าง</option>
          <option value="Toyota">Toyota</option>
          <option value="Honda">Honda</option>
          <option value="Mazda">Mazda</option>
          <option value="BMW">BMW</option>
          <option value="Benz">Benz</option>
          <option value="Porsche">Porsche</option>
          <option value="EV">EV (ไฟฟ้า)</option>
        </select>
      </div>
      <div id="sec3" class="row">
        <ul class="listing">
          <li class="product available EV">
            <a class="img-wrapper" href="#">
              <img src="https://scontent-bkk1-1.xx.fbcdn.net/v/t39.30808-6/395402483_1071064344260102_3540384491910781681_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=dd5e9f&_nc_ohc=pObWIX6Ks4EAX8t7ow-&_nc_ht=scontent-bkk1-1.xx&oh=00_AfBMmsVF_9c3fRB_u0JJXA0o67vGAAvFGRGhbindZxx3yg&oe=65D6FABD" />
            </a>

            <div class="info">
              <div class="title">MG VS HEV 1.5 X</div>
              <div class="price">฿ 950.-/วัน</div>
            </div>

            <div class="actions-wrapper">
              <a href="#" class="add-btn cart">จองรถ</a>
            </div>
          </li>

          <li class="product available Toyota">
            <a class="img-wrapper" href="#">
              <img src="https://scontent-bkk1-1.xx.fbcdn.net/v/t39.30808-6/402201283_1085630689470134_7230535223719627465_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=dd5e9f&_nc_ohc=A4VXqKBV5WYAX9p8cVp&_nc_ht=scontent-bkk1-1.xx&oh=00_AfBQfoCy8A1Ul5wXh6TP2v6xdbjpG31yagapRcrrz520Fg&oe=65D640D9" />
            </a>

            <div class="info">
              <div class="title">Toyota Yaris Ativ</div>
              <div class="price">฿ 950.-/วัน</div>
            </div>

            <div class="actions-wrapper">
              <a href="#" class="add-btn cart">จองรถ</a>
            </div>
          </li>

          <li class="product available Mitsubishi">
            <a class="img-wrapper" href="#">
              <img src="https://scontent-bkk1-1.xx.fbcdn.net/v/t39.30808-6/319549430_1078470239495052_7012047750811514703_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=dd5e9f&_nc_ohc=OmxlfGUvmoYAX9omFKC&_nc_ht=scontent-bkk1-1.xx&oh=00_AfB2xkR-f8EwxwrHhI42_Dc5TPy0hbIRgF0bIn-FuCI5sA&oe=65D6545A" />
            </a>

            <div class="info">
              <div class="title">MITSUBISHI PAJERO SPORT 2.4</div>
              <div class="price">฿ 1300.-/วัน</div>
            </div>

            <div class="actions-wrapper">
              <a href="#" class="add-btn cart">จองรถ</a>
            </div>
          </li>

          <li class="product available EV">
            <a class="img-wrapper" href="#">
              <img src="https://scontent-bkk1-1.xx.fbcdn.net/v/t39.30808-6/392928544_1071064454260091_8611352833986636842_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=dd5e9f&_nc_ohc=B6Ux7S4j8fMAX_gYm4J&_nc_ht=scontent-bkk1-1.xx&oh=00_AfArQOrUvA6M7trU-fe4kQKgVYyFAxBF395gvhyYDcTInA&oe=65D6A710" />
            </a>

            <div class="info">
              <div class="title">Tesla Model 3</div>
              <div class="price">฿ 1100.-/วัน</div>
            </div>

            <div class="actions-wrapper">
              <a href="#" class="add-btn cart">จองรถ</a>
            </div>
          </li>

          <li class="product available Honda">
            <a class="img-wrapper" href="#">
              <img src="https://scontent-bkk1-1.xx.fbcdn.net/v/t39.30808-6/395423246_1071064460926757_5526842956125578619_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=dd5e9f&_nc_ohc=Wgv-EXeb9DMAX_atPC6&_nc_oc=AQliRS4-55KcdMRRat0xPCpUvHCiSlOR5bM_uixy9rSugro4nU5Ubiscrm4RxhbyvZA&_nc_ht=scontent-bkk1-1.xx&oh=00_AfBJlmk_--5UJ45q7AcjWmfRsxmRLg2hh_aiNVj19KvcfA&oe=65D68CEB" />
            </a>

            <div class="info">
              <div class="title">Honda CIVIC EL 1.8</div>
              <div class="price">฿ 750.-/วัน</div>
            </div>

            <div class="actions-wrapper">
              <a href="#" class="add-btn cart">จองรถ</a>
            </div>
          </li>

          <li class="product Honda">
            <a class="img-wrapper" href="#">
              <img src="https://scontent-bkk1-1.xx.fbcdn.net/v/t39.30808-6/395123514_1071062054260331_7125346627700242001_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=dd5e9f&_nc_ohc=PyLHiV2d4I8AX9DUn_-&_nc_ht=scontent-bkk1-1.xx&oh=00_AfCxj3S-h9XN7RxxCmqN45DXLHPHPWSg88vbHsXWQtbU1g&oe=65D73406" />
            </a>
            <div class="note no-stock">ติดจอง</div>

            <div class="info">
              <div class="title">HONDA JAZZ 1.5 S</div>
              <div class="price">฿ 850.-/วัน</div>
            </div>

            <div class="actions-wrapper">
              <a href="#" class="add-btn cart">จองรถ</a>
            </div>
          </li>

          <li class="product available on-sale Mazda">
            <a class="img-wrapper" href="#">
              <img src="https://scontent-bkk1-1.xx.fbcdn.net/v/t39.30808-6/394553665_1071061950927008_2368852111178258515_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=dd5e9f&_nc_ohc=RFBprp7phCwAX_NzjEC&_nc_ht=scontent-bkk1-1.xx&oh=00_AfC7ggmf9ngkdeVzeTITc2aQm42lOfJ5RhBR7XEN1hRcmg&oe=65D5B9FF" />
            </a>
            <div class="note on-sale">ราคาพิเศษ</div>

            <div class="info">
              <div class="title"><a href="#">Mazda 2 1.3 skyactive</a></div>
              <div class="price sale">฿ 600.-/วัน</div>
              <div class="price old">฿ 650.-/วัน</div>
            </div>

            <div class="actions-wrapper">
              <a href="#" class="add-btn cart">จองรถ</a>
            </div>
          </li>

          <li class="product available on-sale Benz">
            <a class="img-wrapper" href="#">
              <img src="https://scontent-bkk1-1.xx.fbcdn.net/v/t39.30808-6/332456495_732218991836678_7588791716314147541_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=dd5e9f&_nc_ohc=sr9fl8lCS8wAX8gv3dw&_nc_ht=scontent-bkk1-1.xx&oh=00_AfA2SGoCNu7-t3vmP46gAdtppOUFfoyPl0ODBECanRYX1Q&oe=65D7671E" />
            </a>
            <div class="note on-sale">ราคาพิเศษ</div>

            <div class="info">
              <div class="title"><a href="#">Mercedes-Benz CLS53 AMG</a></div>
              <div class="price sale">฿ 2600.-/วัน</div>
              <div class="price old">฿ 2850.-/วัน</div>
            </div>

            <div class="actions-wrapper">
              <a href="#" class="add-btn cart">จองรถ</a>
            </div>
          </li>

          <li class="product available on-sale EV">
            <a class="img-wrapper" href="#">
              <img src="https://scontent-bkk1-1.xx.fbcdn.net/v/t39.30808-6/347258048_991432725556598_3416878070084161663_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=dd5e9f&_nc_ohc=E-I2u9Ql6X0AX9AJpuG&_nc_ht=scontent-bkk1-1.xx&oh=00_AfAnHbuJ3isxhvp_E3nhn-DJVLmaZrTIVv-TAL4moFLPTA&oe=65D67E2C" />
            </a>
            <div class="note on-sale">ราคาพิเศษ</div>

            <div class="info">
              <div class="title"><a href="#">ORA Good Cat</a></div>
              <div class="price sale">฿ 1200.-/วัน</div>
              <div class="price old">฿ 1350.-/วัน</div>
            </div>

            <div class="actions-wrapper">
              <a href="#" class="add-btn cart">จองรถ</a>
            </div>
          </li>

          <li class="product available on-sale Honda">
            <a class="img-wrapper" href="#">
              <img src="https://scontent-bkk1-1.xx.fbcdn.net/v/t39.30808-6/395412212_1071892334177303_3522676432218188303_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=dd5e9f&_nc_ohc=RDDbJdh9-s0AX9qfAmQ&_nc_ht=scontent-bkk1-1.xx&oh=00_AfAKpcIxQAmSZWdj-95kGV0E4Nai1RUJjq94uBFkrMQ-Rg&oe=65D6199B" />
            </a>
            <div class="note on-sale">ราคาพิเศษ</div>

            <div class="info">
              <div class="title"><a href="#">Honda HR-V 1.5 EL</a></div>
              <div class="price sale">฿ 1350.-/วัน</div>
              <div class="price old">฿ 1550.-/วัน</div>
            </div>

            <div class="actions-wrapper">
              <a href="#" class="add-btn cart">จองรถ</a>
            </div>
          </li>

          <li class="product EV">
            <a class="img-wrapper" href="#">
              <img src="https://scontent-bkk1-1.xx.fbcdn.net/v/t39.30808-6/337421512_204693072174540_3743762487851329957_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=dd5e9f&_nc_ohc=tONbJRlyDA8AX_I6KGp&_nc_ht=scontent-bkk1-1.xx&oh=00_AfBx3Lc1OJx2dkSmWPFLHc9ksPvWwe_eTMguhgB5L8BOpA&oe=65D6BCBC" />
            </a>
            <div class="note no-stock">ติดจอง</div>

            <div class="info">
              <div class="title">BYD Yuan PLUS</div>
              <div class="price">฿ 1500.-/วัน</div>
            </div>

            <div class="actions-wrapper">
              <a href="#" class="add-btn cart">จองรถ</a>
            </div>
          </li>

          <li class="product available on-sale BMW">
            <a class="img-wrapper" href="#">
              <img src="https://scontent-bkk1-1.xx.fbcdn.net/v/t39.30808-6/318420874_1077081769633899_7251494286587418950_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=dd5e9f&_nc_ohc=gpe26eMDHisAX9FWZxH&_nc_ht=scontent-bkk1-1.xx&oh=00_AfBvyc4Z3y5PsnepcICQ0CqLiOoW7wqlpwGtH1nSyfsTLA&oe=65D5F170" />
            </a>
            <div class="note on-sale">ราคาพิเศษ</div>

            <div class="info">
              <div class="title">
                <a href="#">BMW 330i (G20) M-Sport</a>
              </div>
              <div class="price sale">฿ 1300.-/วัน</div>
              <div class="price old">฿ 1550.-/วัน</div>
            </div>

            <div class="actions-wrapper">
              <a href="#" class="add-btn cart">จองรถ</a>
            </div>
          </li>

          <li class="product available on-sale Porsche">
            <a class="img-wrapper" href="#">
              <img src="https://scontent-bkk1-1.xx.fbcdn.net/v/t39.30808-6/279105566_931888937486517_1092078827315573529_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=dd5e9f&_nc_ohc=KAE8xelzqWwAX8iCXW_&_nc_ht=scontent-bkk1-1.xx&oh=00_AfAoYRiX4lketQ0QfvJVCN0SZjsluiUliRHmaXJ4iyihMQ&oe=65D5B29D" />
            </a>
            <div class="note on-sale">ราคาพิเศษ</div>

            <div class="info">
              <div class="title">
                <a href="#">PORSCHE TAYCAN 4S-4W</a>
              </div>
              <div class="price sale">฿ 2250.-/วัน</div>
              <div class="price old">฿ 2350.-/วัน</div>
            </div>

            <div class="actions-wrapper">
              <a href="#" class="add-btn cart">จองรถ</a>
            </div>
          </li>

          <li class="product available on-sale Toyota">
            <a class="img-wrapper" href="#">
              <img src="https://scontent-bkk1-1.xx.fbcdn.net/v/t39.30808-6/395440509_1071063854260151_8947796384180393407_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=dd5e9f&_nc_ohc=YOUOaVlVelAAX-9THZ5&_nc_ht=scontent-bkk1-1.xx&oh=00_AfBBwXEJxPSg70y-Ey0m3RARxg8UiZZLNa3z5otOAKb0-A&oe=65D67E7B" />
            </a>
            <div class="note on-sale">ราคาพิเศษ</div>

            <div class="info">
              <div class="title"><a href="#">TOYOTA VELLFIRE 2.5 Z</a></div>
              <div class="price sale">฿ 1850.-/วัน</div>
              <div class="price old">฿ 2000.-/วัน</div>
            </div>

            <div class="actions-wrapper">
              <a href="#" class="add-btn cart">จองรถ</a>
            </div>
          </li>

          <li class="product available on-sale Toyota">
            <a class="img-wrapper" href="#">
              <img src="https://scontent-bkk1-1.xx.fbcdn.net/v/t39.30808-6/395425506_1071892327510637_297336970538846836_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=dd5e9f&_nc_ohc=ZW7QWtJGes8AX_aqgZf&_nc_ht=scontent-bkk1-1.xx&oh=00_AfDMsUlMV0_nMe19R9SWNGm-BKyVIAswRgx3yUg6928mWg&oe=65D5869E" />
            </a>
            <div class="note on-sale">ราคาพิเศษ</div>

            <div class="info">
              <div class="title">
                <a href="#">Toyota Corolla Cross 1.8 XS</a>
              </div>
              <div class="price sale">฿ 1300.-/วัน</div>
              <div class="price old">฿ 1450.-/วัน</div>
            </div>

            <div class="actions-wrapper">
              <a href="#" class="add-btn cart">จองรถ</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <!-- footer -->
  <footer class="new_footer_area" style="background-color: #222222">
    <?php include("footer.php") ?>
  </footer>

  <!-- cookie -->
  <?php include("cookie.php") ?>

  <!-- script -->
  <?php include("script.php") ?>

</body>

</html>