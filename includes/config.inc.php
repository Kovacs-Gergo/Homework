<?php
    $pagetitle = array(
        'title' => 'MCU Movies'
    );

    $pageicon = array(
        'imageicon' => 'images/favicon.ico'
    );

    $header = array(
        'imagesource' => 'Marvel_Logo.png',
        'imagealt' => 'logo',
        'title' => 'This is not official Marvel site'
    );

    $footer = array(
        'copyright' => 'Copyright '. date("Y")."."
    );

    $pages = array(
        '/' => array('file' => 'main', 'text' => 'Main', 'menun' =>array(1,1)),
        'movies' => array('file' => 'movies', 'text' => 'Movies', 'menun' => array(1,1)),
        'top cast' => array('file' => 'cast', 'text' => 'Top Cast', 'menun' => array(1,1)),
        'gallery' => array('file' => 'gallery', 'text' => 'Gallery', 'menun' => array(1,1)),
        'contact' => array('file' => 'contact', 'text' => 'Contact', 'menun' => array(1,1)),
        'messages' => array('file' => 'messages', 'text' => 'Messages', 'menun' => array(1,1)),
        'login' => array('file' => 'login', 'text' => 'Login', 'menun' => array(1,0)),
        'logout' => array('file' => 'logout', 'text' => 'Logout', 'menun' => array(0,1)),
        'login2' => array('file' => 'login2', 'text' => '', 'menun' => array(0,0)),
        'registration' => array('file' => 'registration', 'text' => '', 'menun' => array(0,0))
    );
    $servers = array(
        'message' => array()
    );

    $error_page = array('file' => '404', 'text' => 'Page not found');
?>