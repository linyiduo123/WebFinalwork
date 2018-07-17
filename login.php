<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>Login</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="alternate icon" type="image/png" href="assets/i/favicon.png">
  <link rel="stylesheet" href="assets/css/amazeui.min.css"/>
  <style>
    *{
      font-family: '微软雅黑';
    }
    .header {
      text-align: center;
    }
    .header h1 {
      font-size: 200%;
      color:#333;
      margin-top: 30px;
    }
    .header p {
      font-size: 14px;
    }
  </style>
</head>
<body>

<div class="header" style="margin-top: 25px;">
  <div class="am-g">
    <img src="images/logo.png" alt="123">
    <h1>本科生导师制结对管理系统</h1>
    <h2>————学生端————</h2>
  </div>
  <hr/>
</div>
<div class="am-g">
  <div class="am-u-lg-5 am-u-lg-centered">
    <form method="post" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="am-form">
      <label for="username">学号:</label>
      <input type="text" name="username" id="username" value="">
      <br>
      <label for="password">密码:</label>
      <input type="password" name="password" id="password" value="">
      <br>
      <div>
        <input type="submit" name="submit" value="登 录" class="am-btn am-btn-primary am-u-lg-centered">
      </div>
    </form>
    <br>
    <div>
      <button onclick="javascript:window.location.href='admin_login.php'" class="am-btn am-btn-success am-u-lg-centered">管 理 员 登 录</button>
    </div>
    <br>
    <div>
      <button onclick="javascript:window.location.href='teacher_login.php'" class="am-btn am-btn-warning am-u-lg-centered">教 师 端 登 录</button>
    </div>
    <p>© Developed by HZNU-LYD 2018</p>
  </div>
</div>
<?php
    include_once('connectvars.php');
    $username = isset($_POST['username']) ? $_POST['username'] : "";
    $password = isset($_POST['password']) ? $_POST['password'] : "";;
    $check = mysqli_query($dbc, "SELECT id FROM students WHERE id='$username' AND password='$password' limit 1");
    if($result = mysqli_fetch_array($check)){
      session_start();
      $_SESSION['username'] = $username;
      header("location:main_stu.php");
    }
  ?>
<script src="scripts/jquery-3.0.0.min.js"></script> 
<script src="scripts/my_scripts.js"></script> 
<script src="scripts/jquery.idTabs.min.js"></script> 
</body>
</html>
