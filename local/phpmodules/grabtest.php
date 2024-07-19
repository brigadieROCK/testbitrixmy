<?php
    require_once 'fileGrabber.php';

    $fname = filegrabber('https://icdn.lenta.ru/images/2024/06/06/12/20240606125535594/detail_a7c245ebd82f20fded6a1489a1347a4f.jpg');
    echo $fname;
?>