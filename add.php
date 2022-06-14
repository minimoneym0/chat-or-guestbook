<?php

if(isset($_POST['username'], $_POST['comment']) && !empty($_POST['username']) && !empty($_POST['comment'])){
    $username = $_POST['username'];
    $comment = $_POST['comment'];
    $today = date("H:i:s");

    $query = "INSERT INTO tb_guest SET username='$username', comment='$comment', time='$today'";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
} else {$alert = "вы не заполнили одно из полей";}

