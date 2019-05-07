<?php

$content = glob('./includes/*.inc.php');
$page = isset($_GET['page']) ? $_GET['page'] : "";

$page = './includes/' . $page . '.inc.php';

if (in_array($page, $content)) {
    require $page;
}

else {
    require './includes/home.inc.php';
}