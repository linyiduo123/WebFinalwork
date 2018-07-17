<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>MasterManagementSystem</title>
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
    <header class="am-topbar am-topbar-inverse">
        <h1 class="am-topbar-brand">
            <p class="am-u-lg-centered">修改密码</p>
        </h1>
        <div>
        <ul class="idTabs am-nav am-nav-pills am-topbar-nav">
            <li><a href="main_stu.php">返回</a></li>
        </ul>
  </div>
    
    </header>
    <div class="am-g">
        <div class="am-u-lg-5 am-u-lg-centered">
            <form method="post" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="am-form">
                <label for="old">原密码:</label>
                <input type="password" name="old" id="old" value="">
                <br>
                <label for="new">新密码:</label>
                <input type="password" name="new" id="new" value="">
                <br>
                <label for="repeat">重复新密码:</label>
                <input type="password" name="repeat" id="repeat" value="">
                <br>
                <br/>
                <div>
                    <input type="submit" name="" value="提交" class="am-btn am-btn-primary am-u-lg-centered">
                </div>
            </form>
        </div>
    </div>
    <?php
        include_once('connectvars.php');
        session_start();
        $username = $_SESSION['username'];
        @$old = $_POST['old'];
        @$new = $_POST['new'];
        @$repeat = $_POST['repeat'];
        $query = "SELECT * FROM students WHERE id=$username";
        $check = mysqli_query($dbc, "SELECT password FROM students WHERE id='$username' AND password='$old' limit 1");
        $result = mysqli_fetch_array($check);
        $real_password = $result['password'];
        if(strlen($old)>5 && strlen($new)>5 && strlen($repeat)>5){
            if($old!=$real_password){
                echo "<div class='am-g'><div class='am-u-lg-5 am-u-lg-centered'>原密码错误！</div></div>";
            }
            else if($new!=$repeat){
                echo "<div class='am-g'><div class='am-u-lg-5 am-u-lg-centered'>重复输入新密码错误！</div></div></div>";
            }
            else{
                $query_update = "UPDATE students SET password='{$new}' WHERE id='{$username}'";
                mysqli_query($dbc, $query_update);
                echo "<div class='am-g'><div class='am-u-lg-5 am-u-lg-centered'>修改成功！</div></div>";
            }
        }
        else{
            echo "<div class='am-g'><div class='am-u-lg-5 am-u-lg-centered'>Tip：密码至少需要6位以上！</div></div>";
        }       
    ?>

<script src="scripts/jquery-3.0.0.min.js"></script> 
<script src="scripts/my_scripts.js"></script> 
<script src="scripts/jquery.idTabs.min.js"></script> 
</body>
</html>