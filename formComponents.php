<?php 

$msg=$_GET['msg'];

if ($msg=='1') {
	echo "<p>Your Information Submitted Successfully.</p>";
}

?>

<form action="#" method="post">

<!-- input types -->

	<!-- 1) hidden -->
	<!-- important to pass value to automatically create a new table so each form will submitted to a new table for that new form  -->
	<input type="hidden" name="redirect_to" value="">
	<input type="hidden" name="form_id" value="form_2">


	<!-- 2) text  -->
	<input type="text" name="txt_first_nm" placeholder="input your first name">
	<input type="text" name="txt_first_nm" placeholder="input your last name">
	<input type="text" name="txt_first_nm" placeholder="input your E-mail">
	<input type="text" name="txt_first_nm" placeholder="input your Problem">

	<!-- 3) textarea -->
	<textarea name="problem" id="" cols="30" rows="10"></textarea>

	<!-- 4) label -->
	<label for="" name="lbl_first_nm"></label>
	<label for="" name="lbl_last_nm"></label>
	<label for="" name="lbl_email"></label>
	<label for="" name="lbl_problem"></label>

	<!-- 5) select -->
	<select name="slct_country" id="">
		
		<optgroup label="asia">
		
		<option value="">sudia arabia</option>

		</optgroup>
		
		<optgroup label="africa">
		
		<option value="">egypt</option>

		</optgroup>

		<optgroup label="nourth america">
		
		<option value="">us</option>

		</optgroup>				

		<optgroup label="south america">
		
		<option value="">brazil</option>

		</optgroup>				

		<optgroup label="urop">
		
		<option value="">england</option>

		</optgroup>				

		<optgroup label="others">
		
		<option value="">astralia</option>
		<option value="">north pole</option>
		<option value="">south pole</option>

		</optgroup>	

	</select>


	<!-- 6) radiobox -->
	<input type="radio" name"">

	<!-- 7) checkbox -->
	<input type="checkbox" name="">

	<fieldset>
		<legend>What is Your Favorite car?</legend>
		<input type="checkbox" name="car" value="pejut" />Cats <br />
		<input type="checkbox" name="car" value="marcides" />Dogs<br />
		<input type="checkbox" name="car" value="bmw" />Birds<br />
		<input type="submit" value="Submit now" />
	</fieldset>

	<!-- 8) button -->
	<input type="submit" name="">
	<input type="button" name="">
	<button name=""></button>

	<!-- 9) number -->
	<input type="number" name="quantity" min="1" max="5">

	<!-- old
	 button checkbox file hidden image password radio reset submit text
	-->

	<!-- TML5 added several new input types:
	color    date    datetime    datetime-local    email    month
    number   range   search      tel               time     url      week
 	-->

	<!-- all inputs 
	button-checkbox-color-date-datetime/datetime-local/-email-file-hidden-image-month-number-password-radio-range
	-reset-search-submit-tel-text-time-url-week 
	--> 
	
	<!-- 10) range  -->
	<input type="range" name="points" min="0" max="10">
	
	<!-- 11) color -->
	<input type="color" name="favcolor" value="#ff0000">
	
	<!-- 12) time -->
  	<input type="time" name="usr_time">

	<!-- 13) week -->
  	<input type="week" name="week_year">

	<!-- 14) month -->  
	<input type="month" name="daymonth">

	<!-- 15) date and time datetime -->
	<input type="datetime" name="bdaytime">

	<!-- 16) date and time no time zone [local] -->
	<input type="datetime-local" name="bdaytime">  
	
	<!-- 17) email -->
  	<input type="email" name="email">

  	  <input type="search" name="googlesearch">

  	    <input type="tel" name="usrtel">

  	      <input type="url" name="homepage">
</form>