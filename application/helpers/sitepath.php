<?php
include("constants.php");
function getsiteurl($controller='',$method='',$value1='',$value2='',$value3=''){
 if(!empty($method))$method .='/';
 if(!empty($value1))$value1 .='/';
 if(!empty($value2))$value2 .='/';
 if(!empty($value3))$value3 .='/';
 return SITE.'/'.$controller.'/'.$method.$value1.$value2.$value3;
}

function getbaseurl($p1='',$p2='',$p3='',$p4='',$p5=''){
 if(!empty($p2))$p1 .='/';
 if(!empty($p3))$p2 .='/';
 if(!empty($p4))$p3 .='/';
 return BASE.$p1.$p2.$p3.$p4.$p5;
}


?>