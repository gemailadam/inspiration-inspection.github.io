.container {
  /*padding-right: 15px;
  padding-left: 15px;*/
  margin-right: auto;
  margin-left: auto;
}

<br/>
<br/>
@media (min-width: 1200px ) { 
<br/>
.container { width: 1170px; } 
<br/>

<?php

$calc=1170;
echo ".col-static-12 {width:". $calc*(100/100) ."px;}<br/>";
echo ".col-static-11 {width:". $calc*(91.66666667/100) ."px;}<br/>";
echo ".col-static-10 {width:". $calc*(83.33333333/100) ."px;}<br/>";
echo ".col-static-9 {width:". $calc*(75/100) ."px;}<br/>";
echo ".col-static-8 {width:". $calc*(66.66666667/100) ."px;}<br/>";
echo ".col-static-7 {width:". $calc*(58.33333333/100) ."px;}<br/>";
echo ".col-static-6 {width:". $calc*(50/100) ."px;}<br/>";
echo ".col-static-5 {width:". $calc*(41.66666667/100) ."px;}<br/>";
echo ".col-static-4 {width:". $calc*(33.33333333/100) ."px;}<br/>";
echo ".col-static-3 {width:". $calc*(25/100) ."px;}<br/>";
echo ".col-static-2 {width:". $calc*(16.66666667/100) ."px;}<br/>";
echo ".col-static-1 {width:". $calc*(8.33333333/100) ."px;}<br/>";
echo "}<br/><br/>";
?>





<br/>
<br/>
@media (min-width: 992px ) { 
<br/>
.container { width: 970px; } 
<br/>

<?php

$calc=970;
echo ".col-static-12 {width:". $calc*(100/100) ."px;}<br/>";
echo ".col-static-11 {width:". $calc*(91.66666667/100) ."px;}<br/>";
echo ".col-static-10 {width:". $calc*(83.33333333/100) ."px;}<br/>";
echo ".col-static-9 {width:". $calc*(75/100) ."px;}<br/>";
echo ".col-static-8 {width:". $calc*(66.66666667/100) ."px;}<br/>";
echo ".col-static-7 {width:". $calc*(58.33333333/100) ."px;}<br/>";
echo ".col-static-6 {width:". $calc*(50/100) ."px;}<br/>";
echo ".col-static-5 {width:". $calc*(41.66666667/100) ."px;}<br/>";
echo ".col-static-4 {width:". $calc*(33.33333333/100) ."px;}<br/>";
echo ".col-static-3 {width:". $calc*(25/100) ."px;}<br/>";
echo ".col-static-2 {width:". $calc*(16.66666667/100) ."px;}<br/>";
echo ".col-static-1 {width:". $calc*(8.33333333/100) ."px;}<br/>";
echo "}<br/><br/>";
?>


<br/>
<br/>

@media (min-width: 768px ) { 
<br/>
.container { width: 750px; } 
<br/>

<?php 
$calc=750;
echo ".col-static-12 {width:". $calc*(100/100) ."px;}<br/>";
echo ".col-static-11 {width:". $calc*(91.66666667/100) ."px;}<br/>";
echo ".col-static-10 {width:". $calc*(83.33333333/100) ."px;}<br/>";
echo ".col-static-9 {width:". $calc*(75/100) ."px;}<br/>";
echo ".col-static-8 {width:". $calc*(66.66666667/100) ."px;}<br/>";
echo ".col-static-7 {width:". $calc*(58.33333333/100) ."px;}<br/>";
echo ".col-static-6 {width:". $calc*(50/100) ."px;}<br/>";
echo ".col-static-5 {width:". $calc*(41.66666667/100) ."px;}<br/>";
echo ".col-static-4 {width:". $calc*(33.33333333/100) ."px;}<br/>";
echo ".col-static-3 {width:". $calc*(25/100) ."px;}<br/>";
echo ".col-static-2 {width:". $calc*(16.66666667/100) ."px;}<br/>";
echo ".col-static-1 {width:". $calc*(8.33333333/100) ."px;}<br/>";
echo "}<br/><br/>";
?>




<br/>
<br/>

<?php 
$calc=750;
while ($calc>=298) {
echo "@media (min-width:".$calc."px ) {<br/>";
echo ".container { width:".$calc."px; }<br/>";
echo ".col-static-12 {width:". $calc*(100/100) ."px;}<br/>";
echo ".col-static-11 {width:". $calc*(91.66666667/100) ."px;}<br/>";
echo ".col-static-10 {width:". $calc*(83.33333333/100) ."px;}<br/>";
echo ".col-static-9 {width:". $calc*(75/100) ."px;}<br/>";
echo ".col-static-8 {width:". $calc*(66.66666667/100) ."px;}<br/>";
echo ".col-static-7 {width:". $calc*(58.33333333/100) ."px;}<br/>";
echo ".col-static-6 {width:". $calc*(50/100) ."px;}<br/>";
echo ".col-static-5 {width:". $calc*(41.66666667/100) ."px;}<br/>";
echo ".col-static-4 {width:". $calc*(33.33333333/100) ."px;}<br/>";
echo ".col-static-3 {width:". $calc*(25/100) ."px;}<br/>";
echo ".col-static-2 {width:". $calc*(16.66666667/100) ."px;}<br/>";
echo ".col-static-1 {width:". $calc*(8.33333333/100) ."px;}<br/>";
echo "}<br/><br/>";
$calc = $calc-4;
}

?>

<br/>
<br/>
@media (min-width: 8px ) { 
<br/>
.container { width: 298px; } 
<br/>

<?php 
$calc=298;
echo ".col-static-12 {width:". $calc*(100/100) ."px;}<br/>";
echo ".col-static-11 {width:". $calc*(91.66666667/100) ."px;}<br/>";
echo ".col-static-10 {width:". $calc*(83.33333333/100) ."px;}<br/>";
echo ".col-static-9 {width:". $calc*(75/100) ."px;}<br/>";
echo ".col-static-8 {width:". $calc*(66.66666667/100) ."px;}<br/>";
echo ".col-static-7 {width:". $calc*(58.33333333/100) ."px;}<br/>";
echo ".col-static-6 {width:". $calc*(50/100) ."px;}<br/>";
echo ".col-static-5 {width:". $calc*(41.66666667/100) ."px;}<br/>";
echo ".col-static-4 {width:". $calc*(33.33333333/100) ."px;}<br/>";
echo ".col-static-3 {width:". $calc*(25/100) ."px;}<br/>";
echo ".col-static-2 {width:". $calc*(16.66666667/100) ."px;}<br/>";
echo ".col-static-1 {width:". $calc*(8.33333333/100) ."px;}<br/>";
echo "}<br/><br/>";
?>



<?php 
/*
.col-static-12 {
  width: 100%;
}
.col-static-11 {
  width: 91.66666667%;
}
.col-static-10 {
  width: 83.33333333%;
}
.col-static-9 {
  width: 75%;
}
.col-static-8 {
  width: 66.66666667%;
}
.col-static-7 {
  width: 58.33333333%;
}
.col-static-6 {
  width: 50%;
}
.col-static-5 {
  width: 41.66666667%;
}
.col-static-4 {
  width: 33.33333333%;
}
.col-static-3 {
  width: 25%;
}
.col-static-2 {
  width: 16.66666667%;
}
.col-static-1 {
  width: 8.33333333%;
}
.col-static-pull-12 {
  right: 100%;
}
.col-static-pull-11 {
  right: 91.66666667%;
}
.col-static-pull-10 {
  right: 83.33333333%;
}
.col-static-pull-9 {
  right: 75%;
}
.col-static-pull-8 {
  right: 66.66666667%;
}
.col-static-pull-7 {
  right: 58.33333333%;
}
.col-static-pull-6 {
  right: 50%;
}
.col-static-pull-5 {
  right: 41.66666667%;
}
.col-static-pull-4 {
  right: 33.33333333%;
}
.col-static-pull-3 {
  right: 25%;
}
.col-static-pull-2 {
  right: 16.66666667%;
}
.col-static-pull-1 {
  right: 8.33333333%;
}
.col-static-pull-0 {
  right: auto;
}
.col-static-push-12 {
  left: 100%;
}
.col-static-push-11 {
  left: 91.66666667%;
}
.col-static-push-10 {
  left: 83.33333333%;
}
.col-static-push-9 {
  left: 75%;
}
.col-static-push-8 {
  left: 66.66666667%;
}
.col-static-push-7 {
  left: 58.33333333%;
}
.col-static-push-6 {
  left: 50%;
}
.col-static-push-5 {
  left: 41.66666667%;
}
.col-static-push-4 {
  left: 33.33333333%;
}
.col-static-push-3 {
  left: 25%;
}
.col-static-push-2 {
  left: 16.66666667%;
}
.col-static-push-1 {
  left: 8.33333333%;
}
.col-static-push-0 {
  left: auto;
}
.col-static-offset-12 {
  margin-left: 100%;
}
.col-static-offset-11 {
  margin-left: 91.66666667%;
}
.col-static-offset-10 {
  margin-left: 83.33333333%;
}
.col-static-offset-9 {
  margin-left: 75%;
}
.col-static-offset-8 {
  margin-left: 66.66666667%;
}
.col-static-offset-7 {
  margin-left: 58.33333333%;
}
.col-static-offset-6 {
  margin-left: 50%;
}
.col-static-offset-5 {
  margin-left: 41.66666667%;
}
.col-static-offset-4 {
  margin-left: 33.33333333%;
}
.col-static-offset-3 {
  margin-left: 25%;
}
.col-static-offset-2 {
  margin-left: 16.66666667%;
}
.col-static-offset-1 {
  margin-left: 8.33333333%;
}
.col-static-offset-0 {
  margin-left: 0;
}
@media (min-width: 768px) {
  .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12 {
    float: left;
  }
  .col-sm-12 {
    width: 100%;
  }
  .col-sm-11 {
    width: 91.66666667%;
  }
  .col-sm-10 {
    width: 83.33333333%;
  }
  .col-sm-9 {
    width: 75%;
  }
  .col-sm-8 {
    width: 66.66666667%;
  }
  .col-sm-7 {
    width: 58.33333333%;
  }
  .col-sm-6 {
    width: 50%;
  }
  .col-sm-5 {
    width: 41.66666667%;
  }
  .col-sm-4 {
    width: 33.33333333%;
  }
  .col-sm-3 {
    width: 25%;
  }
  .col-sm-2 {
    width: 16.66666667%;
  }
  .col-sm-1 {
    width: 8.33333333%;
  }
  .col-sm-pull-12 {
    right: 100%;
  }
  .col-sm-pull-11 {
    right: 91.66666667%;
  }
  .col-sm-pull-10 {
    right: 83.33333333%;
  }
  .col-sm-pull-9 {
    right: 75%;
  }
  .col-sm-pull-8 {
    right: 66.66666667%;
  }
  .col-sm-pull-7 {
    right: 58.33333333%;
  }
  .col-sm-pull-6 {
    right: 50%;
  }
  .col-sm-pull-5 {
    right: 41.66666667%;
  }
  .col-sm-pull-4 {
    right: 33.33333333%;
  }
  .col-sm-pull-3 {
    right: 25%;
  }
  .col-sm-pull-2 {
    right: 16.66666667%;
  }
  .col-sm-pull-1 {
    right: 8.33333333%;
  }
  .col-sm-pull-0 {
    right: auto;
  }
  .col-sm-push-12 {
    left: 100%;
  }
  .col-sm-push-11 {
    left: 91.66666667%;
  }
  .col-sm-push-10 {
    left: 83.33333333%;
  }
  .col-sm-push-9 {
    left: 75%;
  }
  .col-sm-push-8 {
    left: 66.66666667%;
  }
  .col-sm-push-7 {
    left: 58.33333333%;
  }
  .col-sm-push-6 {
    left: 50%;
  }
  .col-sm-push-5 {
    left: 41.66666667%;
  }
  .col-sm-push-4 {
    left: 33.33333333%;
  }
  .col-sm-push-3 {
    left: 25%;
  }
  .col-sm-push-2 {
    left: 16.66666667%;
  }
  .col-sm-push-1 {
    left: 8.33333333%;
  }
  .col-sm-push-0 {
    left: auto;
  }
  .col-sm-offset-12 {
    margin-left: 100%;
  }
  .col-sm-offset-11 {
    margin-left: 91.66666667%;
  }
  .col-sm-offset-10 {
    margin-left: 83.33333333%;
  }
  .col-sm-offset-9 {
    margin-left: 75%;
  }
  .col-sm-offset-8 {
    margin-left: 66.66666667%;
  }
  .col-sm-offset-7 {
    margin-left: 58.33333333%;
  }
  .col-sm-offset-6 {
    margin-left: 50%;
  }
  .col-sm-offset-5 {
    margin-left: 41.66666667%;
  }
  .col-sm-offset-4 {
    margin-left: 33.33333333%;
  }
  .col-sm-offset-3 {
    margin-left: 25%;
  }
  .col-sm-offset-2 {
    margin-left: 16.66666667%;
  }
  .col-sm-offset-1 {
    margin-left: 8.33333333%;
  }
  .col-sm-offset-0 {
    margin-left: 0;
  }
}
@media (min-width: 992px) {
  .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12 {
    float: left;
  }
  .col-md-12 {
    width: 100%;
  }
  .col-md-11 {
    width: 91.66666667%;
  }
  .col-md-10 {
    width: 83.33333333%;
  }
  .col-md-9 {
    width: 75%;
  }
  .col-md-8 {
    width: 66.66666667%;
  }
  .col-md-7 {
    width: 58.33333333%;
  }
  .col-md-6 {
    width: 50%;
  }
  .col-md-5 {
    width: 41.66666667%;
  }
  .col-md-4 {
    width: 33.33333333%;
  }
  .col-md-3 {
    width: 25%;
  }
  .col-md-2 {
    width: 16.66666667%;
  }
  .col-md-1 {
    width: 8.33333333%;
  }
  .col-md-pull-12 {
    right: 100%;
  }
  .col-md-pull-11 {
    right: 91.66666667%;
  }
  .col-md-pull-10 {
    right: 83.33333333%;
  }
  .col-md-pull-9 {
    right: 75%;
  }
  .col-md-pull-8 {
    right: 66.66666667%;
  }
  .col-md-pull-7 {
    right: 58.33333333%;
  }
  .col-md-pull-6 {
    right: 50%;
  }
  .col-md-pull-5 {
    right: 41.66666667%;
  }
  .col-md-pull-4 {
    right: 33.33333333%;
  }
  .col-md-pull-3 {
    right: 25%;
  }
  .col-md-pull-2 {
    right: 16.66666667%;
  }
  .col-md-pull-1 {
    right: 8.33333333%;
  }
  .col-md-pull-0 {
    right: auto;
  }
  .col-md-push-12 {
    left: 100%;
  }
  .col-md-push-11 {
    left: 91.66666667%;
  }
  .col-md-push-10 {
    left: 83.33333333%;
  }
  .col-md-push-9 {
    left: 75%;
  }
  .col-md-push-8 {
    left: 66.66666667%;
  }
  .col-md-push-7 {
    left: 58.33333333%;
  }
  .col-md-push-6 {
    left: 50%;
  }
  .col-md-push-5 {
    left: 41.66666667%;
  }
  .col-md-push-4 {
    left: 33.33333333%;
  }
  .col-md-push-3 {
    left: 25%;
  }
  .col-md-push-2 {
    left: 16.66666667%;
  }
  .col-md-push-1 {
    left: 8.33333333%;
  }
  .col-md-push-0 {
    left: auto;
  }
  .col-md-offset-12 {
    margin-left: 100%;
  }
  .col-md-offset-11 {
    margin-left: 91.66666667%;
  }
  .col-md-offset-10 {
    margin-left: 83.33333333%;
  }
  .col-md-offset-9 {
    margin-left: 75%;
  }
  .col-md-offset-8 {
    margin-left: 66.66666667%;
  }
  .col-md-offset-7 {
    margin-left: 58.33333333%;
  }
  .col-md-offset-6 {
    margin-left: 50%;
  }
  .col-md-offset-5 {
    margin-left: 41.66666667%;
  }
  .col-md-offset-4 {
    margin-left: 33.33333333%;
  }
  .col-md-offset-3 {
    margin-left: 25%;
  }
  .col-md-offset-2 {
    margin-left: 16.66666667%;
  }
  .col-md-offset-1 {
    margin-left: 8.33333333%;
  }
  .col-md-offset-0 {
    margin-left: 0;
  }
}
@media (min-width: 1200px) {
  .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12 {
    float: left;
  }
  .col-lg-12 {
    width: 100%;
  }
  .col-lg-11 {
    width: 91.66666667%;
  }
  .col-lg-10 {
    width: 83.33333333%;
  }
  .col-lg-9 {
    width: 75%;
  }
  .col-lg-8 {
    width: 66.66666667%;
  }
  .col-lg-7 {
    width: 58.33333333%;
  }
  .col-lg-6 {
    width: 50%;
  }
  .col-lg-5 {
    width: 41.66666667%;
  }
  .col-lg-4 {
    width: 33.33333333%;
  }
  .col-lg-3 {
    width: 25%;
  }
  .col-lg-2 {
    width: 16.66666667%;
  }
  .col-lg-1 {
    width: 8.33333333%;
  }
  .col-lg-pull-12 {
    right: 100%;
  }
  .col-lg-pull-11 {
    right: 91.66666667%;
  }
  .col-lg-pull-10 {
    right: 83.33333333%;
  }
  .col-lg-pull-9 {
    right: 75%;
  }
  .col-lg-pull-8 {
    right: 66.66666667%;
  }
  .col-lg-pull-7 {
    right: 58.33333333%;
  }
  .col-lg-pull-6 {
    right: 50%;
  }
  .col-lg-pull-5 {
    right: 41.66666667%;
  }
  .col-lg-pull-4 {
    right: 33.33333333%;
  }
  .col-lg-pull-3 {
    right: 25%;
  }
  .col-lg-pull-2 {
    right: 16.66666667%;
  }
  .col-lg-pull-1 {
    right: 8.33333333%;
  }
  .col-lg-pull-0 {
    right: auto;
  }
  .col-lg-push-12 {
    left: 100%;
  }
  .col-lg-push-11 {
    left: 91.66666667%;
  }
  .col-lg-push-10 {
    left: 83.33333333%;
  }
  .col-lg-push-9 {
    left: 75%;
  }
  .col-lg-push-8 {
    left: 66.66666667%;
  }
  .col-lg-push-7 {
    left: 58.33333333%;
  }
  .col-lg-push-6 {
    left: 50%;
  }
  .col-lg-push-5 {
    left: 41.66666667%;
  }
  .col-lg-push-4 {
    left: 33.33333333%;
  }
  .col-lg-push-3 {
    left: 25%;
  }
  .col-lg-push-2 {
    left: 16.66666667%;
  }
  .col-lg-push-1 {
    left: 8.33333333%;
  }
  .col-lg-push-0 {
    left: auto;
  }
  .col-lg-offset-12 {
    margin-left: 100%;
  }
  .col-lg-offset-11 {
    margin-left: 91.66666667%;
  }
  .col-lg-offset-10 {
    margin-left: 83.33333333%;
  }
  .col-lg-offset-9 {
    margin-left: 75%;
  }
  .col-lg-offset-8 {
    margin-left: 66.66666667%;
  }
  .col-lg-offset-7 {
    margin-left: 58.33333333%;
  }
  .col-lg-offset-6 {
    margin-left: 50%;
  }
  .col-lg-offset-5 {
    margin-left: 41.66666667%;
  }
  .col-lg-offset-4 {
    margin-left: 33.33333333%;
  }
  .col-lg-offset-3 {
    margin-left: 25%;
  }
  .col-lg-offset-2 {
    margin-left: 16.66666667%;
  }
  .col-lg-offset-1 {
    margin-left: 8.33333333%;
  }
  .col-lg-offset-0 {
    margin-left: 0;
  }
}
*/
 ?>