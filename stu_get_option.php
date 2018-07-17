<?php
    include_once('connectvars.php');
    $query = "SELECT * FROM teacher";
    $result = mysqli_query($dbc, $query);
    
    while($row = mysqli_fetch_array($result)){
        $id   = $row['id'];
        $name = $row['name'];
        echo "<option value='{$id}'>{$id} {$name}</option>";
    }
    echo "</tbody></table></div>";
?>