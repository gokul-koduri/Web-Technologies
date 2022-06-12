<?php
if(isset($_POST['submit'])){

    $str =$_POST['str'];
    $str=preg_replace('/[?|.|!]?/', '', $str);
    $delimiter = ' ';
    $words = explode($delimiter, $str);
    $result=[];
    foreach ($words as $word) {
        if(isset($result[$word])){
            $result[$word]=$result[$word]+1;
        }
        else $result[$word]=1;
    }
    print_r($result);
}
?>
