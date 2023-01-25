
<body>
  <?php
    include_once('header.php');

    session_start();
    if(isset($_SESSION['login'])){
      $dsn="mysql:host=localhost;dbname=member;charset=utf8";
      $pdo=new PDO($dsn,'root','');

      $sql_user="select `member`.`role`,`login`.`acc` from member,login where `member`.`login_id`=`login`.`id` &&  acc='{$_SESSION['login']}'";
      echo $sql_user;
      $user=$pdo->query($sql_user)->fetch(PDO::FETCH_ASSOC);
      echo "<pre>";
      print_r($user);
      echo "</pre>";

      //exit();

      switch($user['role']){
        case '會員':
            header('location:mem.php');
        break;
        case 'VIP':
            header('location:vip.php');
        break;
        case '管理員':
            header('location:admin.php');
        break;
      }

    }
  ?>
  <body>
  <div class="container mt-5">
    <div class="col-6 border bg-light m-auto" style="height:300px;box-shadow:1px 1px 10px #185761">
      <div class="text-center"><?php if(isset($_GET['meg'])){ echo $_GET['meg'] ;} ?></div>
      <h5 class="text-center py-3 border-bottom">會員登入</h5>
      <form action="check.php" class="mt-3 col-6 mx-auto" method="post">
        <p class="text-center">帳號：<input type="text" name="acc"></p>
        <p class="text-center">密碼：<input type="password" name="pw"></p>
        <p class="d-flex justify-content-around" style="font-size:0.87rem">
          <a href="forget_pw.php">忘記密碼?</a>
          <a href="register.php">註冊新帳號</a>
        </p>
        <p class="text-center"><input type="submit" value="登入"></p>
      </form>
    </div>
  </div>
  </body>
  <?php
    include_once('footer.php');
  ?>