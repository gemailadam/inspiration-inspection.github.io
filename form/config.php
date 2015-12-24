<?php 
// configuration Settings

// Mysql Settings

// define constant varible database name and make it global scope for all functions 

define('DB_NAME', '');

// define constant varible user and make it global scope for all functions 
 

define('DB_USER', '');

// define constant varible user password and make it global scope for all functions 

define('DB_PASSWORD', '');

// define constant varible database host and make it global scope for all functions 

define('DB_HOST', '');

/* The following less important but recomended*/

// define constant varible character set and make it global scope for all functions 

define('DB_CHARSET', 'utf8');// important search

// define constant varible collection and make it global scope for all functions 

define('DB_COLLATE', '');//??????????


/* define global scope variable , local scope  

//constant has global scope automaticaly 
//define('DB_abc',''); 

$var =1;//global scope

function(){
	
	global $var;// declare variable as global to use it inside and outside  

	$var2;//local variable

	echo DB_abc;//constant defined 
}
*/
 ?>