<?php
function star($n){
    if($n == 1){
    return "*";
    }else{
    return "*".star($n-1);
    }
}
//echo star(3);

function star2($x,$n){
    if($x == $n+1){
    return ;
    }else{
    return str_repeat("*",$x)."<br>".star2($x+1,$n);
    }


}
//echo star2(0,12);

function star3($n){ 
    if($n == 1){
    return "*";
    }else{
        return star($n)."<br>".star3($n-1);
    }
}
echo star3(8);

?>
1 2 3 4 5 6 

6 5 4 3 2 1 
