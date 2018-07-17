<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>MasterManagementSystem</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp"/>
  <link rel="alternate icon" type="image/png" href="assets/i/favicon.png">
  <link rel="stylesheet" href="assets/css/amazeui.min.css"/>
  <link rel="stylesheet" href="assets/css/mystyle.css">
</head>
<body>
  <div class="studentStatus"></div>

<header class="am-topbar am-topbar-inverse">
  <h1 class="am-topbar-brand">
    <a href="#">本科生导师制结对管理系统</a>
  </h1>

  <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only"
          data-am-collapse="{target: '#doc-topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span
      class="am-icon-bars"></span></button>
  <div>
    <ul class="idTabs am-nav am-nav-pills am-topbar-nav">
      <li><a href="#info">个人信息</a></li>
      <li><a href="#stu">学生列表</a></li>
      <li><a href="#comfirm">学生确认</a></li>
    </ul>
    <div class="am-topbar-right">
      <button onclick="javascript:window.location.href='logout.php'" class="am-btn am-btn-primary am-topbar-btn am-btn-sm"><span class="am-icon-user"></span>注销</button>
    </div>
  </div>
</header>
<div>
<!--=============================== 个人习惯信息 =============================-->
  <div id="info">
    <?php
      include_once('connectvars.php');
      require_once('teacher_self_info.php');
    ?>
    <div class="am-container">
      <div class="am-u-lg-centered">
        <button onclick="javascript:window.location.href='teacher_password_edit.php'" class="am-btn am-btn-success am-u-lg-centered">修改密码</button>
      </div>
    </div>
  </div>
<!--=============================== 学生列表 =============================-->
  <div id="stu">
    <?php
      include_once('connectvars.php');
      require_once('teacher_view_stu_info.php');
    ?>
  </div>
<!--=============================== 学生确认 =============================-->
  <div id="comfirm">

    <div class="am-g">
      <div class="am-u-lg-5 am-u-lg-centered">
        <h1>请确认以下学生：</h1>
        <form method="post" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="am-form">
          <select name="select" id="select">
            <?php
              include_once('connectvars.php');
              require_once('teacher_get_option.php');
            ?>
          </select>
          <br>
          <div>
            <input type="submit" name="submit" value="确 认" class="am-btn am-btn-primary am-u-lg-centered">
          </div>
        </form>
        <?php
          if(isset($_POST['submit'])){
            include_once('connectvars.php');
            @$id = $_POST['select'];
            $username = $_SESSION['username'];
            $query = "SELECT * FROM students WHERE tutorId='$username'";
            $result = mysqli_query($dbc, $query);
            $row = mysqli_fetch_array($result);
            if($row['state']=="待定"){
              $query = "UPDATE students SET state='选定' WHERE id='$id'";
              mysqli_query($dbc, $query);
              echo "<script>alert('确认成功！');</script>";
            }
          }
        ?>
      </div>
    </div>
    
  </div>
</div>


<footer class="blog-footer">
  <p>---HZNU---<br/>
    <small>© Developed by LYD.</small>
  </p>
</footer>

<script src="scripts/jquery-3.0.0.min.js"></script> 
<script src="scripts/my_scripts.js"></script> 
<script src="scripts/jquery.idTabs.min.js"></script> 

</body>
</html>
<script type="text/javascript">

</script>