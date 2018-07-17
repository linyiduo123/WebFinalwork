<?php
    include_once('connectvars.php');
    session_start();
    $username = $_SESSION['username'];
    $query = "SELECT * FROM teacher WHERE id=$username";
    $result = mysqli_query($dbc, $query);
    
    echo "<div class='am-container'><table class='am-table am-table-bordered am-table-striped am-table-compact'><tbody>";
    while($row = mysqli_fetch_array($result)){
        $id = $row['id'];
        $name = $row['name'];
        $sex = $row['sex'];
        $position = $row['position'];
        $direction = $row['direction'];
        $phone = $row['phone'];
        echo "<tr><td>工号</td><td>{$id}</td></tr>";    //按照数据表的列在表格里输出对应数据
        echo "<tr><td>姓名</td><td>{$name}</td></tr>";
        echo "<tr><td>性别</td><td>{$sex}</td></tr>";
        echo "<tr><td>职称</td><td>{$position}</td></tr>";
        echo "<tr><td>方向</td><td>{$direction}</td></tr>";
        echo "<tr><td>联系电话</td><td>{$phone}</td></tr>";
    }
    echo "</tbody></table></div>";
?>