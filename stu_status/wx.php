<?php
    include_once('connectvars.php');
    $query = "SELECT * FROM students WHERE state='未选'";
    $result = mysqli_query($dbc, $query);
    
    echo "<div class='am-container'><table class='am-table am-table-bordered am-table-striped am-table-compact'><thead><tr><th>学号</th><th>姓名</th><th>性别</th><th>专业</th><th>班级</th><th>电话</th><th>状态</th><th>导师工号</th></tr></thead><tbody>";
    while($row = mysqli_fetch_array($result)){
        $id      = $row['id'];
        $name    = $row['name'];
        $sex     = $row['sex'];
        $major   = $row['major'];
        $classId = $row['classId'];
        $phone   = $row['phone'];
        $state   = $row['state'];
        $tutorId = $row['tutorId'];
        echo "<tr>";
        echo "<td>{$id}</td>";    //按照数据表的列在表格里输出对应数据
        echo "<td>{$name}</td>";
        echo "<td>{$sex}</td>";
        echo "<td>{$major}</td>";
        echo "<td>{$classId}</td>";
        echo "<td>{$phone}</td>";
        echo "<td>{$state}</td>";
        echo "<td>{$tutorId}</td>";
        echo "</tr>";
    }
    echo "</tbody></table></div>";
?>