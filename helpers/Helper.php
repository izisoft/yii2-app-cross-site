<?php
function view($param, $label = null, $exit = false)
{
    if(YII_DEBUG && !Yii::$app->request->isAjax){
        
        ini_set('memory_limit', -1);
        
        echo "$label:<hr><pre>";
        var_dump($param);
        echo "</pre><hr>";
        
        if($exit) exit(0);
    }
}


function uh($text,$i = 1){
    if(!is_string($text)) return $text;
    $h = htmlspecialchars_decode(stripslashes($text),ENT_QUOTES );
    switch ($i){
        case 'quot': $h = str_replace('"', '&quot;', $h);break;
        case 'nobr': $h = str_replace(array('<br/>','<br>','</br>'), array(' ',' ',' '), $h);break;
        
    }
    if(is_numeric($i) && $i > 1){    while ($i > 1){	$i--;   	return uh($h);    }    }
    return $h;
}