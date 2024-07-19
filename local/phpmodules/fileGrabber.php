<?php
    function filegrabber($url)
    {
        $ch = curl_init($url);
        $filenames = explode("/",$url);
        // $fp = fopen('upload\news_photos\\'.$filenames[-1], 'wb');
        $path = 'upload\news_photos\\'.end($filenames);
        file_put_contents($path, file_get_contents($url));
        // curl_setopt($ch, CURLOPT_FILE, $fp);
        // curl_setopt($ch, CURLOPT_HEADER, 0);
        // curl_exec($ch);
        // curl_close($ch);
        // fclose($fp);
        return $path;
    }
?>