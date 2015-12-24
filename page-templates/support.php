<?php 
/*
template Name: Support Form
*/
?>
<?php get_template_part('page-templates/head_html'); ?>


<body <?php body_class( ); ?> >
	<div class="container">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

			<!-- 1) header-->
			<header>
				<div class="row">
					<div class=" col-xs-12 col-lg-12 col-md-12 col-sm-12">
						<?php get_header(); ?>
					</div>
				</header>
				<!-- 2 ) main -->
				<div class="main col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="row">
						<!-- 2-1 ) page part -->
						<div class="page">
							<div class=" col-xs-9 col-lg-9 col-md-12 col-sm-12 ">
								<div class="qwe_form">
									<!--form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"-->
									<form action="#" method="post">
										<table class="table table-responsive table-hover">
											<tbody>
												<tr class="warning active">
													<td><label>First Name :</label></td><td><input type="text" name="first_nm"></td>
												</tr>
												<tr class="info active">
													<td><label for="">Last Name :</label></td><td><input type="text" name="last_nm"></td>
												</tr>										
												<tr class="danger active">
													<td><label for="">E-mail :</label></td><td><input type="text" name="email"></td>
												</tr>										
												<tr class="success active">
													<td><label for="">Problem :</label></td><td><textarea name="problem" placeholder="write you problem here, thank you"></textarea></td>
												</tr>
												<tr class="warning active">
													<td><input type="submit" name="submit"></td><td></td>
												</tr>									
											</tbody>
										</table>
									</form>
								</div>
								<div id="db_define">

<?php
// define variables and set to empty values
/*
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

$firstnameErr = $lastnameErr $emailErr = $problemErr= ""; //$genderErr = $websiteErr = "";
$first_nm =$last_nm =$problem = $email = "";//$gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["first_nm"])) {
    $firstnameErr = "First Name is required";
  } else {
    $first_nm = test_input($_POST["first_nm"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$first_nm)) {
      $firstnameErr = "Only letters and white space allowed";
    }
  }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["last_nm"])) {
    $lastnameErr = "Last Name is required";
  } else {
    $last_nm = test_input($_POST["last_nm"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$last_nm)) {
      $lastnameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["problem"])) {
    $problemErr = "Last Name is required";
  } else {
    $last_nm = test_input($_POST["problem"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$problem)) {
      $problemErr = "Only letters and white space allowed";
    }
  }
*/
/*
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

*/

									 

									define('DB_NAME', 'b7_16817694_wordpress20151030');
									define('DB_USER', 'b7_16817694');
									define('DB_PASSWORD', 'qwerREWQ1234$#@!');
									define('DB_HOST', 'sql100.byethost7.com');//localhost mean at the same server

									function qwe_clean($array){

										return array_map('mysql_real_escape_string', $array) ;
									}

									$_POST=qwe_clean($_POST);
			
												$link=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);

												if (!$link) {
													die('Error Type 1 Try again'. mysql_error());
												}

												$db_selected=mysql_select_db(DB_NAME,$link);

												if (!$db_selected) {
													die('Error Type 2 Try again'. DB_NAME .':'. mysql_error());
												}

												$first_nm_value= $_POST['first_nm'];	
												$last_nm_value= $_POST['last_nm'];	
												$email_value= $_POST['email'];	
												$problem_value= $_POST['problem'];

												$sql="INSERT INTO qwe_form (first_nm , last_nm ,email,problem) VALUES ('$first_nm_value','$last_nm_value','$email_value','$problem_value')";	

												if(!mysql_query($sql)){
													die('Error Type 3 Try again :' . mysql_error());
												}	
												
												?>


								</div>

											<?php  comments_template( 'page-templates/comments.php' ); ?> 


							</div>
						</div>


						<!-- 2-2 ) sidebar part if you want -->
						<div class="sidebar">
							<div class=" col-xs-3 col-lg-3 col-md-12 col-sm-12 ">
								<?php get_sidebar(); ?>
								<br/>
							</div>
						</div>

					</div>
					<!--End Row -->
				</div>
				<!--End main -->
				<br>
				<!-- 3 ) footer-->
				<footer>
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<br/>
							<?php get_footer(); ?>
						</div>
					</div>
				</footer>
				<!-- End footer-->
			</div>	
		</div>
		<!-- End Container-->

		<?php get_template_part('page-templates/script'); ?>

</body>
</html>