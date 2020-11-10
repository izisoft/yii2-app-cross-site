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

function randString($length = 32, $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890')
{
    // Length of character list
    $chars_length = (strlen($chars) - 1);
    
    
    // Start our string
    $string = $chars{rand(0, $chars_length)};
    
    
    if(!is_numeric($chars) && is_numeric($string)){
        $chars2 = preg_replace('/[0-9]+/', '', $chars);
        if( ($chars_length2 = (strlen($chars2) - 1)) > 0 ){
            $string = $chars2{rand(0, $chars_length2)};
        }
    }
    
    // Generate random string
    for ($i = 1; $i < $length; $i = strlen($string))
    {
        // Grab a random character from our list
        $r = $chars{rand(0, $chars_length)};
        
        // Make sure the same two characters don't appear next to each other
        if ($r != $string{$i - 1}) $string .=  $r;
    }
    
    // Return the string
    return $string;
}