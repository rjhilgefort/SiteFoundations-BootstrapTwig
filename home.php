<?php
require_once 'lib/lib-config.php';
$config = new config();
$twig = $config->load(true, true);

//do stuff

echo $twig->render('home.html.twig', array(
    'title' => 'Rob'));
$config->destroy();
?>