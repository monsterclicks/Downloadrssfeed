<?php
set_time_limit(0);
$cont = file_get_contents('https://api.blootle.com/topix_articles_get?count=5&bt_email=[-EMAILADDR-]&filter=%7B%22resource_type%22%3A%5B%22Offbeat%22%5D%7D');
//$data = json_decode($cont, true);
$data=array();
array_push($data,$cont);
//$template = file_get_contents(__DIR__ .'test_template.html');
//$totalc = count($data->data->recs);
//$datatoarray = get_object_vars($data);
var_dump($data);
echo "=================";
var_dump($cont);
// for($i=0;$i<=$totalc;$i++){
//
// }
//echo "<pre>";
// foreach($data->data->recs as $item){
//   $id = $item->id;
//   $cat = $item->props->category;
//   $des = $item->props->description;
//   $thum = $item->props->thumbnail;
//   $tit = $item->props->title;
//   $url = $item->props->url;
//   echo "{$id} - {$cat} - {$tit}</br>{$des}</br>{$thum}</br>";
// }
//var_dump($data);
//echo "</pre>";
?>
