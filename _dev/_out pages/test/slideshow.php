<!Doctype html>
<html >
	<head>
		<meta charset="UTF-8"><!---->
		<meta name="viewport" content="width=device-width,initial-scale=1"><!--mobil first media query to work at mobile good -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge" ><!--for bootstrap to work good at IE-->
		<title></title>
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="">
		<link rel="stylesheet" href="style.css">

		<!-- IE 9 use different method than IE 7 & 8 to start good -->		
		<!--[if it ie 9]>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
		<![endif]-->

		<!--search difference between wordpress html5.js vs html5shiv.js by cdn-->

	</head>
	<body>

	<div class="container">

		<!-- 1) header-->
		<div class="header">
			<?php 
			    //total number of images you will add to slideshow
				$imageTotal=8;
				$description[1]='some description text1 ';
				$description[2]='some description text2 ';
				$description[3]='some description text3 ';
				$description[4]='some description text4 ';
				$description[5]='some description text5 ';
				$description[6]='some description text6 ';
				$description[7]='some description text7 ';
				$description[8]='some description text7 ';
			 
			 ?>
			 <div class="gallerycontainer">
			 
			 	<h1>Gallery Title</h1>
			 
			 	<div class="galleryThumbnilContainer">
			 		<div class="galleryThumbnil">
			 			<?php 
			 				for ($t=1; $t<=$imageTotal; $t++) { 
			 					echo '<a href="javascript: changeimage('.$t.')" class="thumbnilsimage'.$t.'"><img src="images/thumb/image'.$t.'.jpg" width="auto" height="100" alt=""/></a>';
			 				}
			 			 ?>
			 		</div>
			 	</div>
			 
			 	<div class="galleryPreviewContainer">
			 		<div class="galleryPreviewImage">
			 			<?php 
			 				for ($i=1; $i <= $imageTotal ; $i++) { 
			 					echo '<img class="previewImage'.$i.'" src="images/image'.$i.'.jpg" width="900" height="auto" alt=""/>';
			 				}
			 			 ?>
			 		</div>
			 		
			 		<div class="galleryPreviewarrow">
			 			<a href="#" class="previousslidearrow">&lt;</a>
			 			<a href="#" class="nextslidearrow">&gt;</a>
			 		</div>
			 	</div>

			 	<div class="galleryNavigationBullets">
			 		<?php 
			 			for ($b=1; $b <=$imageTotal ; $b++) { 
			 					echo '<a href="javascript: changeimage('.$b.')" class="galleryBullets'.$b.'"><span>Bullet</span></a>';			 			
			 			}
			 		 ?>
			 	</div>
			 
			 </div>
		
			<div class="gallerydescription">
				<?php 
					for ($x=1; $x <=$imageTotal ; $x++) { 
						echo '<div class="description'.$x.'">'.$description[$x].'</div>';
					}
				 ?>
			</div>	


		</div>
		<!-- END header-->


		<!-- 2 ) main page-->
		<div class=""></div>
	
		<!-- 444 sidebar if you want -->
		<div class=""></div>
		<!-- END sidebar if you want -->

	
		<!-- 3 ) footer-->
		<div class=""></div>
		<!-- END footer-->
	
	</div>

<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript">
	//variables
	var imageTotal=<?php echo $imageTotal; ?>;
	var currentImage=1;
	var thumbTotalWidth=0;

$('a.galleryBullets' + currentImage).addClass('active');
$('a.thumbnilsimage' + currentImage).addClass('active');
$('div.description'  + currentImage).addClass('visible');

    //Set width for thumbnail container
    $(window).load(function(){
    	$('.galleryThumbnil a img').each(function(){
    		thumbTotalWidth +=$(this).width();
    	});
    })

	//Preview arrow code 
	
	$('a.previousslidearrow').click(function(){
		$('img.previewImage' + currentImage).hide();
		$('a.galleryBullets' + currentImage).removeClass('active');
		$('a.thumbnilsimage' + currentImage).removeClass('active');
		$('div.description'  + currentImage).removeClass('visible');

		currentImage--;
		if(currentImage==0){
			currentImage=imageTotal;
		}

		$('img.previewImage' + currentImage).show();
		$('a.galleryBullets' + currentImage).addClass('active');
		$('a.thumbnilsimage' + currentImage).addClass('active');
		$('div.description'  + currentImage).addClass('visible');
	});
</script>
</body>
</html>	

