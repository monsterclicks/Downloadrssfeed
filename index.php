<?php
set_time_limit(0);
$cont = file_get_contents("https://api.blootle.com/topix_articles_get?count=5&bt_email=[-EMAILADDR-]&filter=%7B%22resource_type%22%3A%5B%22Offbeat%22%5D%7D");
$newdata = str_replace("\\","",$cont);
$data = json_decode($newdata, true);
//file_put_contents("/tmp/tmp.txt",$cont);
//$newdata = file_get_contents("/tmp/tmp.txt");
echo __DIR__."</br>";

//$template = file_get_contents(_DIR_ .'test_template.html');
$totalc = count($data['data']['recs']);
echo "{$totalc}</br>";
//$datatoarray = get_object_vars($data);
//var_dump($data);
echo "=================<pre>";
//var_dump($data1);
 for($i=0;$i<=$totalc;$i++){
  var_dump($data['data']['recs'][$i]);
 }
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
echo "</pre>";
?>
