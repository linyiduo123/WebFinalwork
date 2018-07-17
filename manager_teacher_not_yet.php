<?php
    include_once('connectvars.php');
    $query1 = "SELECT * FROM students WHERE state='待定'";
    $result1 = mysqli_query($dbc, $query1);
    echo "<div class='am-container'><table class='am-table am-table-bordered am-table-striped am-table-compact'><thead><tr><th>工号</th><th>姓名</th><th>性别</th><th>职称</th><th>方向</th><th>电话</th></tr></thead><tbody>";
    
    while($row1 = mysqli_fetch_array($result1)){
        //利用双层while循环，将第一次查询的到的tutorId作为主键用来查询学生信息
        $tutorId = $row1['tutorId'];
        $query = "SELECT * FROM teacher WHERE id=$tutorId";
        $result = mysqli_query($dbc, $query);
        //若tutorId为空，则跳过这一条
        if(strlen($tutorId)==0){
            continue;
        }
        while($row = mysqli_fetch_array($result)){
            $id        = $row['id'];
            $name      = $row['name'];
            $sex       = $row['sex'];
            $position  = $row['position'];
            $direction = $row['direction'];
            $phone     = $row['phone'];
            echo "<tr>";
            echo "<td>{$id}</td>";    //按照数据表的列在表格里输出对应数据
            echo "<td>{$name}</td>";
            echo "<td>{$sex}</td>";
            echo "<td>{$position}</td>";
            echo "<td>{$direction}</td>";
            echo "<td>{$phone}</td>";
            echo "</tr>";
        }
    }
    
    echo "</tbody></table></div>";
?>