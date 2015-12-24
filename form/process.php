<?php 
// config
// require_once 'config.php';

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


<?php 
//Functions

// essential function for database and host connection
function qwe_sqlconnect($hst,$user,$pwd,$db){

	$link=mysql_connect($hst,$user,$pwd);

	if (!$link) {
		die('Error Type 1 Try again'. mysql_error());
	}

	$db_selected=mysql_select_db($db,$link);

	if (!$db_selected) {
		die('Error Type 2 Try again'. $db .':'. mysql_error());
	}

	$first_nm_value= $_POST['first_nm'];	
	$last_nm_value= $_POST['last_nm'];	
	$email_value= $_POST['email'];	
	$problem_value= $_POST['problem'];

	$sql="INSERT INTO qwe_form (first_nm , last_nm ,email,problem) VALUES ('$first_nm_value','$last_nm_value','$email_value','$problem_value')";	

	if(!mysql_query($sql)){
		die('Error Type 3 Try again :' . mysql_error());
	}	

}

// if there a table with the same name
function qwe_tableExist($tablename,$database=false){

	if (!$database) {
		$result=mysql_query("SELECT DATABASE()");
		$database=mysql_result($result, 0);
	}
}

//
function qwe_fieldExist($table,$column,$column_attr = "VARCHAR(255) NULL"){
	$exists=false;
	$columns=mysql_query("show column from $table");
	while ($c=mysql_fetch_assoc($column) {
		if ($c['Field']==$column) {
			$exists=true;
			break;
		}
		if (!$exists) {
			mysql_query("alter table '$table' add '$column' $column_attr");
		}
	}
}



//clean information of user data submited , because validation or trusted user data to not harm your database 
//[sql injection attack] [there are some characters used to inject database for injection attack]
// search injection attack and those characters 
function qwe_clean($array){

//mysql_real_escape_string is a function to escape data and used by php to protect against injection attack
	return array_map('mysql_real_escape_string', $array) ;
}

//
function qwe_get_ip(){
	if (qwe_valid_ip($_SERVER['HTTP_CLIENT_IP'])) {
		return $_SERVER['HTTP_CLIENT_IP'];
	}
}

?>

<?php 
//Process

// securty check if the form submitted from your domain or another spy domain to compleate processing the form or not
// if the form submitted from other spy domain [stop it , kill it] ,to not pass any bad information to our database
// that mean white list domains allowed only

$domain=$_SERVER['HTTP_HOST'];//?
$uri=parse_url($_SERVER['HTTP_REFERER']);//?
$r_domain=substr($uri['host'], strpos($uri['host'], "."),strlen($uri['host']));//?

if ($domain==$r_domain) {
	
	//connect to database
	$link=qwe_sqlconnect(DB_USER,DB_PASSWORD,DB_NAME);

	//clean bad sql injection characters that may be used for sql injection attck by malicious codes
	// the valuse will be stored the row values it self [that mean not executed values codes] what is row values?????
	$_POST=qwe_clean($_POST);


	// main variables to proccess the form
	$table=$_POST['form_id'];
	$keys=implode(",", (array_keys($_POST)));
	$values=implode(",", (array_values($_POST))); 

	//values for redirect 
	//??? if you put values at input hidden name="redirect_to" value="http://inspiration-inspection.ml" use the following 
	$redirect=$_POST['redirect_to'];
	//if you want to redirect using ur page server submition e.g input hidden name="redirect_to" value="" 
	$referred=$_SERVER['HTTP_REFERER'];

	$query=parse_url($referred,PHP_URL_QUERY);

	$referred=str_replace( array('?' ,$query ), '', $referred );


	// create new recordes at the database table like time and ip , important for know when it submitted
	$time_fields='timestamp,ip';
	$time_values=time() ."','". qwe_get_ip();
}
?>