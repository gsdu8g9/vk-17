<?php

$id = $_POST['id'];

$request = "https://api.vk.com/method/getProfiles?user_id={$id}&fields=bdate,photo_medium,connections,sex,city,country,timezone";

$json = file_get_contents($request);


echo $json;


?>
