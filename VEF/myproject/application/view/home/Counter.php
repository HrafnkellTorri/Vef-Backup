<?php
    include ("db.php");

    $sql = "SELECT Count FROM counts";
    
    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $current_count = $row['count'];
        $new_count = $current_count + 1;
        $updatecount = "UPDATE views SET count = '$new_count'";
        $updateaccout = mysqli_query($conn, $updatecount);
        echo $new_count;
?>