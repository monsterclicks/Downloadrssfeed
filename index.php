<?php
function getFeed($feed_url) {

    $content = file_get_contents($feed_url);
    //$x = new SimpleXmlElement($content);
    $x = jsondecode($content);
    echo "<ul>";

    foreach($x->data->recs as $entry) {
        echo "<li><a href='$entry->link' title='$entry->title'>" . $entry->title . "</a></br>".$entry->description."</li>";
    }
    echo "</ul>";

}

getFeed('http://downloadrss.test/feed.json');
?>
