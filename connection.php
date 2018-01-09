<?php
$link = mysqli_connect("localhost", "mynotest_notes", "D$_YvN%k@#7^", "mynotest_onlinenotes");
if(mysqli_connect_error()){
    die('ERROR: Unable to connect:' . mysqli_connect_error()); 
    echo "<script>window.alert('Hi!')</script>";
}
    ?>