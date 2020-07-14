<?php
 include "dbconn.php";
?>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>20200615</title>
  <link rel="stylesheet" href="responsive.css">
  <script src="http://code.jquery.com/jquery-1.12.3.min.js">
  </script>
  <script src="script.js" defer="defer"></script>
</head>

<body>
  <div id="wrap">
    <header>
      <div class="admin">
        <?php if(isset($_SESSION["id"])) { ?>
        <a href="logout.php">Logout</a>&nbsp;|&nbsp;
        <a href="member_edit.php">Edit</a>&nbsp;|&nbsp;
        <a href="withdrawal.php">withdrawal</a>
        <?php }else {?>
        <a href="javascript:login()">Login</a>&nbsp;|&nbsp;
        <a href="join.php">Join</a>&nbsp;|&nbsp;
        <a href="idpw.php">Id/Pw</a>
        <?php } ?>
      </div>
      <a href="responsive.php" class="logo">
        <h1>LOGO</h1>
      </a>
      <a href="#" class="gnb_menu">menu</a>
      <nav>
        <a href="#">MENU1</a>
        <a href="#">MENU2</a>
        <a href="#">MENU3</a>
        <a href="#">MENU4</a>
        <a href="#">MENU5</a>
        <a href="#">MENU6</a>
        <a href="#">MENU7</a>
        <a href="#">MENU8</a>
      </nav>
    </header>
    <section>
      <ul class="list">
        <li>
          <a href="#" class="inner">
            <div class="thumb">
              <img src="thumb.png">
            </div>
            <div class="title">
              타이틀 제목 1
            </div>
          </a>
        </li>
        <li>
          <a href="#" class="inner">
            <div class="thumb">
              <img src="thumb.png">
            </div>
            <div class="title">
              타이틀 제목 2
            </div>
          </a>
        </li>
        <li>
          <a href="#" class="inner">
            <div class="thumb">
              <img src="thumb.png">
            </div>
            <div class="title">
              타이틀 제목 3
            </div>
          </a>
        </li>
        <li>
          <a href="#" class="inner">
            <div class="thumb">
              <img src="thumb.png">
            </div>
            <div class="title">
              타이틀 제목 4
            </div>
          </a>
        </li>
        <li>
          <a href="#" class="inner">
            <div class="thumb">
              <img src="thumb.png">
            </div>
            <div class="title">
              타이틀 제목 5
            </div>
          </a>
        </li>
        <li>
          <a href="#" class="inner">
            <div class="thumb">
              <img src="thumb.png">
            </div>
            <div class="title">
              타이틀 제목 6은 좀더 길게써보도록 하지요~~~
            </div>
          </a>
        </li>
        <li>
          <a href="#" class="inner">
            <div class="thumb">
              <img src="thumb.png">
            </div>
            <div class="title">
              타이틀 제목 7
            </div>
          </a>
        </li>
        <li>
          <a href="#" class="inner">
            <div class="thumb">
              <img src="thumb.png">
            </div>
            <div class="title">
              타이틀 제목 8
            </div>
          </a>
        </li>
        <li>
          <a href="#" class="inner">
            <div class="thumb">
              <img src="thumb.png">
            </div>
            <div class="title">
              타이틀 제목 9
            </div>
          </a>
        </li>
      </ul>
    </section>
    <footer>
      Copyright &#169;shoppingmall.com All right reserved since 2020 by webeditor
    </footer>
  </div>
</body>

</html>