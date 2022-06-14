<?php

if(isset($_GET['del'])){
    $del = $_GET['del'];

    $query = "DELETE FROM tb_guest WHERE id=$del";

    mysqli_query($conn, $query) or die(mysqli_error($conn));
}