<?php
    include_once('connectvars.php');
    @header('Content-type: text/html;charset=UTF-8');
    session_start();
    $username = $_SESSION['username'];
    $query = "SELECT * FROM students WHERE state='??' AND tutorId=$username";
    $result = mysqli_query($dbc, $query);
    
    while($row = mysqli_fetch_array($result)){
        $id   = $row['id'];
        $name = $row['name'];
        echo "<option value='{$id}'>{$id} {$name}</option>";
    }
    echo "</tbody></table></div>";
?>