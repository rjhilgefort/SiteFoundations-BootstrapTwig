<?php
require_once 'lib/lib-config.php';
$config = new config();
$twig = $config->load(true, true);

//do stuff

echo $twig->render('home.html.twig', array(
    'title' => 'Some Awesome Content'));
$config->destroy();
?>