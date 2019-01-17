<?php
set_time_limit(0);
$cont = file_get_contents("https://api.blootle.com/topix_articles_get?count=5&bt_email=[-EMAILADDR-]&filter=%7B%22resource_type%22%3A%5B%22Offbeat%22%5D%7D");
$newdata = str_replace("\\","",$cont);
$data = json_decode($newdata, true);
//file_put_contents("/tmp/tmp.txt",$cont);
//$newdata = file_get_contents("/tmp/tmp.txt");

echo __DIR__."</br>";

$template = file_get_contents(__DIR__ .'/test_template.html');
$totalc = count($data['data']['recs']);
echo "{$totalc}</br>";
//$datatoarray = get_object_vars($data);
//var_dump($data);
var_dump($data);
echo "=================<pre>";

 for($i=1;$i<=$totalc;$i++){
   $find_ifequalvoltn_cat_a = strstr($template,"[IFEQUALVOLTN_CAT_{$i}");
   $find_ifequalvoltn_cat = strstr($find_ifequalvoltn_cat_a,"]",true)."]";
   if(strpos($template,$find_ifequalvoltn_cat) != FALSE){
     $parts = explode("_",$find_ifequalvoltn_cat);
     //$var = $data['data']['recs'][$i]['props']['category'];
     $var = $parts[2];
     $comparison = $parts[3];
     $result = $parts[4];
     $else = $parts[5];
     $replacement = ($data['data']['recs'][$i]['props']['category'] == $comparison)?$result:$else;
     $template = str_replace($find_ifequalvoltn_cat,$replacement,$template);
   }
   //var_dump($data['data']['recs'][$i]['props']['title']);
    echo "[VOLTN_TITLE_{$i}] - ". $data['data']['recs'][$i]['props']['title']."</br>";
   $template = str_replace("[VOLTN_TITLE_{$i}]",$data['data']['recs'][$i]['props']['title'],$template);
   $template = str_replace("[VOLTN_DESCRIPTION_".$i."]",$data['data']['recs'][$i]['props']['description'],$template);
   $template = str_replace("[VOLTN_CATEGORY_".$i."]",$data['data']['recs'][$i]['props']['category'],$template);
   $template = str_replace("[VOLTN_THUMBNAIL_".$i."]",$data['data']['recs'][$i]['props']['thumbnail'],$template);
   $template = str_replace("[VOLTN_URL_".$i."]",$data['data']['recs'][$i]['props']['url'],$template);
   $template = str_replace("[VOLTN_ID_".$i."]",$data['data']['recs'][$i]['id'],$template);


 }
echo "=====================</br>";

var_dump($template);
echo $template;


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
