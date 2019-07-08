<?php
    $url = Yii::app()->request->url;
    $urls = explode('/',$url);

    $len = count($urls);
    if ($len > 1) {
        $page = $urls[$len-1];
        if ($page != '') {
            $metas = Seo::model()->findAllByAttributes(array('url' => $page));
            foreach ($metas as $meta){
                echo $meta->meta_tags;
            }
        }else {
            $metas = Seo::model()->findAllByAttributes(array('url' => 'home'));
            foreach ($metas as $meta){
                echo $meta->meta_tags;
            }
        }

    }
?>
