<?php
function getFeed($feed_url) {

    $content = file_get_contents($feed_url);
    $x = new SimpleXmlElement($content);

    echo "<ul>";

    foreach($x->channel->item as $entry) {
        echo "<li><a href='$entry->link' title='$entry->title'>" . $entry->title . "</a></br>".$entry->description."</li>";
    }
    echo "</ul>";

}

getFeed('https://hnrss.org/newest');
?>
