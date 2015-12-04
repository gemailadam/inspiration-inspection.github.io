.container ,.row {
  /*padding-right: 15px;
  padding-left: 15px;*/
  margin-right: auto;
  margin-left: auto;
}

<br/>
.row-xs-1, .row-xs-2, .row-xs-3, .row-xs-4, .row-xs-5, .row-xs-6, .row-xs-7, .row-xs-8, .row-xs-9, .row-xs-10, .row-xs-11, .row-xs-12 {
}

<br/>
 .row-sm-1, .row-sm-2, .row-sm-3, .row-sm-4, .row-sm-5, .row-sm-6, .row-sm-7, .row-sm-8, .row-sm-9, .row-sm-10, .row-sm-11, .row-sm-12 {
  }
<br/>
  .row-md-1, .row-md-2, .row-md-3, .row-md-4, .row-md-5, .row-md-6, .row-md-7, .row-md-8, .row-md-9, .row-md-10, .row-md-11, .row-md-12 {
  }
<br/>
  .row-lg-1, .row-lg-2, .row-lg-3, .row-lg-4, .row-lg-5, .row-lg-6, .row-lg-7, .row-lg-8, .row-lg-9, .row-lg-10, .row-lg-11, .row-lg-12 {
  }

<br/>
<br/>
@media (min-width: 1200px ) { 
<br/>
.container { width: 1170px; } 
<br/>
.row {width: 1170px;}
<br/>

<?php

$calc=1170;
echo ".row-xs-12 {height:". $calc*(100/100) ."px;}<br/>";
echo ".row-xs-11 {height:". $calc*(91.66666667/100) ."px;}<br/>";
echo ".row-xs-10 {height:". $calc*(83.33333333/100) ."px;}<br/>";
echo ".row-xs-9 {height:". $calc*(75/100) ."px;}<br/>";
echo ".row-xs-8 {height:". $calc*(66.66666667/100) ."px;}<br/>";
echo ".row-xs-7 {height:". $calc*(58.33333333/100) ."px;}<br/>";
echo ".row-xs-6 {height:". $calc*(50/100) ."px;}<br/>";
echo ".row-xs-5 {height:". $calc*(41.66666667/100) ."px;}<br/>";
echo ".row-xs-4 {height:". $calc*(33.33333333/100) ."px;}<br/>";
echo ".row-xs-3 {height:". $calc*(25/100) ."px;}<br/>";
echo ".row-xs-2 {height:". $calc*(16.66666667/100) ."px;}<br/>";
echo ".row-xs-1 {height:". $calc*(8.33333333/100) ."px;}<br/>";
echo ".row-xs-1a {height:". $calc*(8.33333333/200) ."px;}<br/>";
echo "}<br/><br/>";
?>


<br/>
<br/>
@media (min-width: 992px ) and (max-width:1200px ) { 
<br/>
.container { width: 970px; }
<br/>
.row {width: 960px;}/*970 the real*/ 
<br/>

<?php

$calc=960;
echo ".row-lg-12 {height:". $calc*(100/100) ."px;}<br/>";
echo ".row-lg-11 {height:". $calc*(91.66666667/100) ."px;}<br/>";
echo ".row-lg-10 {height:". $calc*(83.33333333/100) ."px;}<br/>";
echo ".row-lg-9 {height:". $calc*(75/100) ."px;}<br/>";
echo ".row-lg-8 {height:". $calc*(66.66666667/100) ."px;}<br/>";
echo ".row-lg-7 {height:". $calc*(58.33333333/100) ."px;}<br/>";
echo ".row-lg-6 {height:". $calc*(50/100) ."px;}<br/>";
echo ".row-lg-5 {height:". $calc*(41.66666667/100) ."px;}<br/>";
echo ".row-lg-4 {height:". $calc*(33.33333333/100) ."px;}<br/>";
echo ".row-lg-3 {height:". $calc*(25/100) ."px;}<br/>";
echo ".row-lg-2 {height:". $calc*(16.66666667/100) ."px;}<br/>";
echo ".row-lg-1 {height:". $calc*(8.33333333/100) ."px;}<br/>";
echo ".row-lg-1a {height:". $calc*(8.33333333/200) ."px;}<br/>";
echo "}<br/><br/>";
?>




<br/>
<br/>

@media (min-width: 750px ) and (max-width:992px ) { /*768 the exact*/
<br/>
.container { width: 750px; } 
<br/>
.row {width: 750px;}
<br/>

<?php 
$calc=750;
echo ".row-md-12 {height:". $calc*(100/100) ."px;}<br/>";
echo ".row-md-11 {height:". $calc*(91.66666667/100) ."px;}<br/>";
echo ".row-md-10 {height:". $calc*(83.33333333/100) ."px;}<br/>";
echo ".row-md-9 {height:". $calc*(75/100) ."px;}<br/>";
echo ".row-md-8 {height:". $calc*(66.66666667/100) ."px;}<br/>";
echo ".row-md-7 {height:". $calc*(58.33333333/100) ."px;}<br/>";
echo ".row-md-6 {height:". $calc*(50/100) ."px;}<br/>";
echo ".row-md-5 {height:". $calc*(41.66666667/100) ."px;}<br/>";
echo ".row-md-4 {height:". $calc*(33.33333333/100) ."px;}<br/>";
echo ".row-md-3 {height:". $calc*(25/100) ."px;}<br/>";
echo ".row-md-2 {height:". $calc*(16.66666667/100) ."px;}<br/>";
echo ".row-md-1 {height:". $calc*(8.33333333/100) ."px;}<br/>";
echo ".row-md-1a {height:". $calc*(8.33333333/200) ."px;}<br/>";
echo "}<br/><br/>";
?>




<br/>
<br/>

<?php 
$calc=750;
while ($calc>=98) {
echo "@media (min-width:". ($calc-4) ."px ) and (max-width:".$calc."px  ) {<br/>";
echo ".container { width:".($calc-8)."px; }<br/>";
echo ".row { width:".($calc-4)."px; }<br/>";
echo ".row-sm-12 {height:". ($calc-4)*(100/100) ."px;}<br/>";
echo ".row-sm-11 {height:". ($calc-4)*(91.66666667/100) ."px;}<br/>";
echo ".row-sm-10 {height:". ($calc-4)*(83.33333333/100) ."px;}<br/>";
echo ".row-sm-9 {height:". ($calc-4)*(75/100) ."px;}<br/>";
echo ".row-sm-8 {height:". ($calc-4)*(66.66666667/100) ."px;}<br/>";
echo ".row-sm-7 {height:". ($calc-4)*(58.33333333/100) ."px;}<br/>";
echo ".row-sm-6 {height:". ($calc-4)*(50/100) ."px;}<br/>";
echo ".row-sm-5 {height:". ($calc-4)*(41.66666667/100) ."px;}<br/>";
echo ".row-sm-4 {height:". ($calc-4)*(33.33333333/100) ."px;}<br/>";
echo ".row-sm-3 {height:". ($calc-4)*(25/100) ."px;}<br/>";
echo ".row-sm-2 {height:". ($calc-4)*(16.66666667/100) ."px;}<br/>";
echo ".row-sm-1 {height:". ($calc-4)*(8.33333333/100) ."px;}<br/>";
echo ".row-sm-1a {height:". ($calc-4)*(8.33333333/200) ."px;}<br/>";
echo "}<br/><br/>";
$calc = $calc-4;
}

?>

<!-- <br/>
<br/>
@media (min-width: 8px ) and (max-width:294px) { 
<br/>
.container { width: 290px; } 
<br/>
.row {width: 290px;}
<br/>

<?php 
// $calc=290;
// echo ".row-sm-12 {height:". $calc*(100/100) ."px;}<br/>";
// echo ".row-sm-11 {height:". $calc*(91.66666667/100) ."px;}<br/>";
// echo ".row-sm-10 {height:". $calc*(83.33333333/100) ."px;}<br/>";
// echo ".row-sm-9 {height:". $calc*(75/100) ."px;}<br/>";
// echo ".row-sm-8 {height:". $calc*(66.66666667/100) ."px;}<br/>";
// echo ".row-sm-7 {height:". $calc*(58.33333333/100) ."px;}<br/>";
// echo ".row-sm-6 {height:". $calc*(50/100) ."px;}<br/>";
// echo ".row-sm-5 {height:". $calc*(41.66666667/100) ."px;}<br/>";
// echo ".row-sm-4 {height:". $calc*(33.33333333/100) ."px;}<br/>";
// echo ".row-sm-3 {height:". $calc*(25/100) ."px;}<br/>";
// echo ".row-sm-2 {height:". $calc*(16.66666667/100) ."px;}<br/>";
// echo ".row-sm-1 {height:". $calc*(8.33333333/100) ."px;}<br/>";
// echo "}<br/><br/>";
?>
 -->

