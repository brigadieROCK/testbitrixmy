<?php
    // require_once '../../bitrix/vendor/autoload.php';
    require 'DBconnector.php';
    require 'fileGrabber.php';
    require 'stringEscape.php';
    // require 'C:\OSPanel\home\new-bitrix.local\bitrix\vendor\autoload.php';
    use PHPHtmlParser\Dom;
    function parseNews(){
        $url = 'https://lenta.ru/search/v2/process?query=McDonalds&from=0&size=10&sort=2&title_only=0&domain=1&modified%2Cformat=yyyy-MM-dd';
        $doc = new Dom;

        $text = $doc->loadFromUrl($url);
        // echo $doc->outerHtml;
        $news_mass = json_decode($text, true);
        foreach ($news_mass['matches'] as $news)
        {
            // echo $news.'<br>';
            $title = string_escaper(strip_tags($news['title']));
            $previev = string_escaper(strip_tags($news['rightcol'].' '.$news['snippet']));
            $photo_path = str_replace('\\','/',filegrabber($news['image_url']));
            $newsText = string_escaper(strip_tags($news['text']));
            $urlSource = $news['url'];

            // echo $previev.'<br>';



            $query = "INSERT INTO `b_iblock_element_prop_s5`(`PROPERTY_9`, `PROPERTY_10`, `PROPERTY_11`, `PROPERTY_12`, `PROPERTY_13`) VALUES ('$title','$previev', 'http://new-bitrix.local/local/phpmodules/$photo_path','$newsText','$urlSource')";
            mysqli_query($conn, $query);
            // $conn->exec($query);
            // echo '<br>';
            // echo $news['title'].'<br>';
        }

    }
?>