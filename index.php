<?php
set_time_limit(0);
$cont = file_get_contents("https://api.blootle.com/topix_articles_get?count=5&bt_email=[-EMAILADDR-]&filter=%7B%22resource_type%22%3A%5B%22Offbeat%22%5D%7D");
$newdata = str_replace("\\","",$cont);
$data = json_decode($newdata, true);
//file_put_contents("/tmp/tmp.txt",$cont);
//$newdata = file_get_contents("/tmp/tmp.txt");

echo __DIR__."</br>";

$template = file_get_contents(__DIR__ .'/test_test.html');
$totalc = count($data['data']['recs']);
echo "{$totalc}</br>";
//$datatoarray = get_object_vars($data);
//var_dump($data);
var_dump($data);
echo "=================<pre>";

 for($i=0;$i<=$totalc;$i++){
   var_dump($data['data']['recs'][$i]);
  //  echo "[VOLTN_TITLE_".$i."]"." - ". $data['data']['recs'][$i]['props']['title']."</br>";
  // $data2 = str_replace("[VOLTN_TITLE_".$i."]",$data['data']['recs'][$i]['props']['title'],$template);
  // $data2 = str_replace("[VOLTN_DESCRIPTION_".$i."]",$data['data']['recs'][$i]['props']['description'],$data2);
  // $data2 = str_replace("[VOLTN_CATEGORY_".$i."]",$data['data']['recs'][$i]['props']['category'],$data2);
  // $data2 = str_replace("[VOLTN_THUMBNAIL_".$i."]",$data['data']['recs'][$i]['props']['thumbnail'],$data2);
  // $data2 = str_replace("[VOLTN_URL_".$i."]",$data['data']['recs'][$i]['props']['url'],$data2);
 }
echo "=====================</br>";

echo $data2;


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
