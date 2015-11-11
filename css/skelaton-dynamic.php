.container {
  /*padding-right: 15px;
  padding-left: 15px;*/
  margin-right: auto;
  margin-left: auto;
}

<br/>
.col-xs-1, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9, .col-xs-10, .col-xs-11, .col-xs-12 {
  float: left;
}

<br/>
 .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12 {
    float: left;
  }
<br/>
  .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12 {
    float: left;
  }
<br/>
  .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12 {
    float: left;
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
echo ".col-xs-12 {width:". $calc*(100/100) ."px;}<br/>";
echo ".col-xs-11 {width:". $calc*(91.66666667/100) ."px;}<br/>";
echo ".col-xs-10 {width:". $calc*(83.33333333/100) ."px;}<br/>";
echo ".col-xs-9 {width:". $calc*(75/100) ."px;}<br/>";
echo ".col-xs-8 {width:". $calc*(66.66666667/100) ."px;}<br/>";
echo ".col-xs-7 {width:". $calc*(58.33333333/100) ."px;}<br/>";
echo ".col-xs-6 {width:". $calc*(50/100) ."px;}<br/>";
echo ".col-xs-5 {width:". $calc*(41.66666667/100) ."px;}<br/>";
echo ".col-xs-4 {width:". $calc*(33.33333333/100) ."px;}<br/>";
echo ".col-xs-3 {width:". $calc*(25/100) ."px;}<br/>";
echo ".col-xs-2 {width:". $calc*(16.66666667/100) ."px;}<br/>";
echo ".col-xs-1 {width:". $calc*(8.33333333/100) ."px;}<br/>";
echo "}<br/><br/>";
?>


<br/>
<br/>
@media (min-width: 992px ) and (max-width:1200px ) { 
<br/>
.container { width: 970px; }
<br/>
.row {width: 970px;} 
<br/>

<?php

$calc=970;
echo ".col-lg-12 {width:". $calc*(100/100) ."px;}<br/>";
echo ".col-lg-11 {width:". $calc*(91.66666667/100) ."px;}<br/>";
echo ".col-lg-10 {width:". $calc*(83.33333333/100) ."px;}<br/>";
echo ".col-lg-9 {width:". $calc*(75/100) ."px;}<br/>";
echo ".col-lg-8 {width:". $calc*(66.66666667/100) ."px;}<br/>";
echo ".col-lg-7 {width:". $calc*(58.33333333/100) ."px;}<br/>";
echo ".col-lg-6 {width:". $calc*(50/100) ."px;}<br/>";
echo ".col-lg-5 {width:". $calc*(41.66666667/100) ."px;}<br/>";
echo ".col-lg-4 {width:". $calc*(33.33333333/100) ."px;}<br/>";
echo ".col-lg-3 {width:". $calc*(25/100) ."px;}<br/>";
echo ".col-lg-2 {width:". $calc*(16.66666667/100) ."px;}<br/>";
echo ".col-lg-1 {width:". $calc*(8.33333333/100) ."px;}<br/>";
echo "}<br/><br/>";
?>




<br/>
<br/>

@media (min-width: 768px ) and (max-width:992px ) { 
<br/>
.container { width: 750px; } 
<br/>
.row {width: 750px;}
<br/>

<?php 
$calc=750;
echo ".col-md-12 {width:". $calc*(100/100) ."px;}<br/>";
echo ".col-md-11 {width:". $calc*(91.66666667/100) ."px;}<br/>";
echo ".col-md-10 {width:". $calc*(83.33333333/100) ."px;}<br/>";
echo ".col-md-9 {width:". $calc*(75/100) ."px;}<br/>";
echo ".col-md-8 {width:". $calc*(66.66666667/100) ."px;}<br/>";
echo ".col-md-7 {width:". $calc*(58.33333333/100) ."px;}<br/>";
echo ".col-md-6 {width:". $calc*(50/100) ."px;}<br/>";
echo ".col-md-5 {width:". $calc*(41.66666667/100) ."px;}<br/>";
echo ".col-md-4 {width:". $calc*(33.33333333/100) ."px;}<br/>";
echo ".col-md-3 {width:". $calc*(25/100) ."px;}<br/>";
echo ".col-md-2 {width:". $calc*(16.66666667/100) ."px;}<br/>";
echo ".col-md-1 {width:". $calc*(8.33333333/100) ."px;}<br/>";
echo "}<br/><br/>";
?>




<br/>
<br/>

<?php 
$calc=768;
while ($calc>=298) {
echo "@media (min-width:". ($calc-4) ."px ) and (max-width:".$calc."px  ) {<br/>";
echo ".container { width:".$calc."px; }<br/>";
echo ".row { width:".$calc."px; }<br/>";
echo ".col-sm-12 {width:". $calc*(100/100) ."px;}<br/>";
echo ".col-sm-11 {width:". $calc*(91.66666667/100) ."px;}<br/>";
echo ".col-sm-10 {width:". $calc*(83.33333333/100) ."px;}<br/>";
echo ".col-sm-9 {width:". $calc*(75/100) ."px;}<br/>";
echo ".col-sm-8 {width:". $calc*(66.66666667/100) ."px;}<br/>";
echo ".col-sm-7 {width:". $calc*(58.33333333/100) ."px;}<br/>";
echo ".col-sm-6 {width:". $calc*(50/100) ."px;}<br/>";
echo ".col-sm-5 {width:". $calc*(41.66666667/100) ."px;}<br/>";
echo ".col-sm-4 {width:". $calc*(33.33333333/100) ."px;}<br/>";
echo ".col-sm-3 {width:". $calc*(25/100) ."px;}<br/>";
echo ".col-sm-2 {width:". $calc*(16.66666667/100) ."px;}<br/>";
echo ".col-sm-1 {width:". $calc*(8.33333333/100) ."px;}<br/>";
echo "}<br/><br/>";
$calc = $calc-4;
}

?>

<br/>
<br/>
@media (min-width: 8px ) and (max-width:298px) { 
<br/>
.container { width: 298px; } 
<br/>
.row {width: 298px;}
<br/>

<?php 
$calc=298;
echo ".col-sm-12 {width:". $calc*(100/100) ."px;}<br/>";
echo ".col-sm-11 {width:". $calc*(91.66666667/100) ."px;}<br/>";
echo ".col-sm-10 {width:". $calc*(83.33333333/100) ."px;}<br/>";
echo ".col-sm-9 {width:". $calc*(75/100) ."px;}<br/>";
echo ".col-sm-8 {width:". $calc*(66.66666667/100) ."px;}<br/>";
echo ".col-sm-7 {width:". $calc*(58.33333333/100) ."px;}<br/>";
echo ".col-sm-6 {width:". $calc*(50/100) ."px;}<br/>";
echo ".col-sm-5 {width:". $calc*(41.66666667/100) ."px;}<br/>";
echo ".col-sm-4 {width:". $calc*(33.33333333/100) ."px;}<br/>";
echo ".col-sm-3 {width:". $calc*(25/100) ."px;}<br/>";
echo ".col-sm-2 {width:". $calc*(16.66666667/100) ."px;}<br/>";
echo ".col-sm-1 {width:". $calc*(8.33333333/100) ."px;}<br/>";
echo "}<br/><br/>";
?>


