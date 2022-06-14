<?php

$query = "SELECT * FROM tb_guest WHERE id > 0";

//Делаем запрос к БД, результат запроса пишем в $result:
$result = mysqli_query($conn, $query) or die( mysqli_error($conn) );

//Преобразуем то, что отдала нам база в нормальный массив PHP $data:
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

foreach($data as $elem){
    echo "<div class='chatWind__body-in'>
                <p>".$elem['username']."</p>
                <span>".$elem['comment']."</span>
                <p class='time'>".substr($elem['time'], 0, 5)."</p>
                <a href='?del=".$elem['id']."' class='del'><img src='img/del.png'></a>
            </div>";
}