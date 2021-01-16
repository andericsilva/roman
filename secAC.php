<?php
print '<pre>';
print '######################################################################';
print PHP_EOL;
require 'vendor/autoload.php';
$converter = new CrazyCodr\Converters\Roman();
function seculoAC($int){
    global $converter;
    if($int==1){
        $start=100;
        $end=1;
    }else{
        $start=$int*100;
        $end=($start-100)+1;
    }
    $roman=$converter->toRoman($int);
    if($start>=10000){
        $str1=$start.'ac-'.$end.'ac';
        $str2=' SEC.'.$int.' ac ('.$roman.' ac) ';
    }elseif($start>=1000){
        $str1=$start.'ac-'.$end.'ac';
        $str2='   SEC.'.$int.' ac ('.$roman.' ac) ';
    }else{
        $str1=$start.'ac-'.$end.'ac ';
        $str2='    SEC.'.$int.' ac ('.$roman.' ac) ';
    }
    if($start==1000){
        $str1=$start.'ac-'.$end.'ac ';
    }
    if($start==10000){
        $str1=$start.'ac-'.$end.'ac ';
    }
    $len1=strlen($str1);
    $i=1;
    $max=12-$len1;
    while($i<=$max){
        $str1.=' ';
        $i++;
    }
    print $str1;
    $len2=strlen($str2);
    $i=1;
    $max=58-$len2;//58=lauda 70
    if($start>=10000){
        $max=$max-3;
    }
    if($start>=1000 AND $start<10000){
        $max=$max-1;
    }
    while($i<=$max){
        $str2.='#';
        $i++;
    }
    print $str2.PHP_EOL;
}

$i=40;
while($i>0){
    print seculoAC($i);
    $i--;
}
$i=1;
while($i<=21){
    //print seculoDC($i);
    $i++;
}
