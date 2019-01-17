<?php

$content = '{
    "data": {
        "recs": [
            {
                "id": "17469",
                "props": {
                    "category": "story",
                    "description": "#ForeverAlone",
                    "thumbnail": "https://proxy.topixcdn.com/ipicimg/UFDO6BCV4CUQT4TV-cp0x73x1920x1034-fill600x300x.jpg",
                    "title": "37 So True Tweets About Only Children",
                    "url": "https://offbeat.topix.com/slideshow/17469"
                }
            },
            {
                "id": "19115",
                "props": {
                    "category": "quiz",
                    "description": "What IS that thing??",
                    "thumbnail": "https://proxy.topixcdn.com/ipicimg/EGQES7HF6MSPVEVJ-cp43x392x1480x1111-fill600x300x.jpg",
                    "title": "Can you Identify These Vintage Household Things?",
                    "url": "https://offbeat.topix.com/quiz/19115"
                }
            },
            {
                "id": "18116",
                "props": {
                    "category": "story",
                    "description": "Got a secret admirer you need to chase away? Try these ghastly cards!",
                    "thumbnail": "https://proxy.topixcdn.com/ipicimg/E86M2LL79NMTHUK1-cp0x502x2000x1501-fill600x300x.jpg",
                    "title": "39 Hilariously Creepy Valentines",
                    "url": "https://offbeat.topix.com/slideshow/18116"
                }
            },
            {
                "id": "19424",
                "props": {
                    "category": "story",
                    "description": "How did they catch any of these guys?",
                    "thumbnail": "https://proxy.topixcdn.com/ipicimg/NJJGTU8D3POEASAG-cp0x111x1778x1000-brt100-sat100-fill600x300x.jpg",
                    "title": "Nailed It: 31 Hilariously Bad Police Sketches",
                    "url": "https://offbeat.topix.com/slideshow/19424"
                }
            },
            {
                "id": "19214",
                "props": {
                    "category": "story",
                    "description": "Nails on a chalkboard? Child\'s play. ",
                    "thumbnail": "https://proxy.topixcdn.com/ipicimg/UPTOTNQR85UC65HR-cp0x18x3000x1518-fill600x300x.jpg",
                    "title": "31+ Annoying Noises That Make Us Want To Scream",
                    "url": "https://offbeat.topix.com/slideshow/19214"
                }
            }
        ]
    }
}
';

$cont = file_get_contents('https://api.blootle.com/topix_articles_get?count=5&bt_email=vietlucky@gmail.com&filter=&resource_type=Offbeat');
$data = json_decode($cont);
//echo "<pre>";
foreach($data->data->recs as $item){
  $id = $item->id;
  $cat = $item->props->category;
  $des = $item->props->description;
  $thum = $item->props->thumbnail;
  $tit = $item->props->title;
  $url = $item->props->url;
  echo "{$id} - {$cat} - {$tit}</br>{$des}</br>{$thum}</br>";
}
//var_dump($data);
//echo "</pre>";
?>
