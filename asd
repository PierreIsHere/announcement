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
        echo (-1*$n)+7;
        return star($n)."<br>".star3((-1*$n)+7);
    }
}
// echo star3(6);

function star4($n)
{
  return star5(0,$n);
}
function star5($n, $init)
{
  if($n == $init)
  {
    return;
  }else
  {
    return str_repeat("*",$n)."<br>".star4($n+1,$init);
  }
}
//echo star4(5);
function bottom($n)
{
  if ($n == 0)
  {
    return;
  }
  return 
}

?>
