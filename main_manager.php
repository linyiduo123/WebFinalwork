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
<style>
/* 下拉按钮样式 */
  .dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
  }

/* 容器 <div> - 需要定位下拉内容 */
  .dropdown {
    position: relative;
    display: inline-block;
  }

/* 下拉内容 (默认隐藏) */
  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  }

/* 下拉菜单的链接 */
  .dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
  }

/* 鼠标移上去后修改下拉菜单链接颜色 */
  .dropdown-content a:hover {background-color: #f1f1f1}

/* 在鼠标移上去后显示下拉菜单 */
  .dropdown:hover .dropdown-content {
    display: block;
  }

/* 当下拉内容显示后修改下拉按钮的背景颜色 */
  .dropdown:hover .dropbtn {
    background-color: #3e8e41;
  }
</style>
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
      <li><a href="#stu">学生信息</a></li>
      <li><a href="#teacher">教师信息</a></li>
      <li><a href="#teacher_notyet">待定教师</a></li>
    </ul>
    <div class="am-topbar-right">
      <button onclick="javascript:window.location.href='manager_password_edit.php'" class="am-btn am-btn-primary am-topbar-btn am-btn-sm"><span class="am-icon-user"></span>修改密码</button>
    </div>
    <div class="am-topbar-right">
      <button onclick="javascript:window.location.href='logout.php'" class="am-btn am-btn-primary am-topbar-btn am-btn-sm"><span class="am-icon-user"></span>注销</button>
    </div>
  </div>
</header>
<div>
<!--=============================== 学生信息 =============================-->
  <div id="stu">
    <div class="am-container">
      <p>未选名单：</p>
    </div>
    <div class="am-container">
      <div id="wx">
        <?php
          include_once('connectvars.php');
          require_once('stu_status/wx.php');
        ?>
      </div>
    </div>
    
    <div class="am-container">
      <p>待定名单：</p>
    </div>
    <div class="am-container">
      <div id="dd">
        <?php
          include_once('connectvars.php');
          require_once('stu_status/dd.php');
        ?>
      </div>
    </div>

    <div class="am-container">
      <p>选定名单：</p>
    </div>
    <div class="am-container">
      <div id="xd">
        <?php
          include_once('connectvars.php');
          require_once('stu_status/xd.php');
        ?>
      </div>
    </div>
  </div>
<!--=============================== 教师信息 =============================-->
    <div id="teacher">
      <?php
        include_once('connectvars.php');
        require_once('manager_teacher_info.php');
      ?>
    </div>
<!--=============================== 待定教师 =============================-->
    <div id="teacher_notyet">
      <?php
        include_once('connectvars.php');
        require_once('manager_teacher_not_yet.php');
      ?>
    </div>
</div>


<footer class="blog-footer">
  <p>blog template<br/>
    <small>© Copyright XXX. by the AmazeUI Team.</small>
  </p>
</footer>

<script src="scripts/jquery-3.0.0.min.js"></script> 
<script src="scripts/my_scripts.js"></script> 
<script src="scripts/jquery.idTabs.min.js"></script> 

</body>
</html>
<script type="text/javascript">

</script>