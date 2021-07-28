<?php


?>



<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Blogzo</title>
        <meta name="description" content="">
        <link rel="icon" href="<?php echo base_url('assets/pics/icon12.png');?>" type="image/png">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/css/uikit.min.css" />
		<link rel="stylesheet" href="<?php echo base_url('assets/css/blogstyle.css');?>">
<!-- UIkit JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/js/uikit.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/js/uikit-icons.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<script src="uikit/dist/js/uikit-icons.min.js"></script>
    </head>
    <body>

	
    <div class="header">
	<div class="floating">
	<div class="uk-animation-toggle" tabindex="0">
	<div class="uk-align-right uk-padding-small uk-animation-shake  ">
<a href="<?php echo base_url('admin/login');?>">
<button id="float" class="btn btn-dark"> <span class="bi bi-file-person-fill"></span>  ADMIN </button></a>
</div></div></div>
<!--Content before waves-->
<div class="inner-header flex">
<!--Just the logo.. Don't mind this-->
<img src="<?php echo base_url('assets/pics/icon11.png');?>" height="150px" width="150px " class="icon">
<h1>Blogzo</h1>

</div>


<!--Waves Container-->
<div>
<svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
<defs>
<path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
</defs>
<g class="parallax">
<use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
<use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
<use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
<use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
</g>
</svg>
</div>
<!--Waves end-->

</div>
<!--Header ends-->

<!-- <a class="uk-button uk-button-primary   uk-align-right" href="#target" uk-scroll>Scroll down</a> -->

<!--Content starts-->
<div class="content flex">
</div>
<!--Content ends-->




<div class="content">
<div class="uk-align-right uk-padding-small ">
<a  href="#target" class="uk-icon-button  uk-button-danger  " uk-icon="arrow-down" uk-scroll=""></a>
</div>
<h2> There are<strong> <?=sizeof($result)?> </strong> Blogs</h2>
</div>
<!-- UIkit SECTION -->
<?php

foreach ($result as $key => $value){
?>
<div>
	
<div class="uk-section uk-section-default ">
 <div class="uk-container  ">
	    <div class="uk-margin uk-grid-small uk-child-width-expand@s uk-text-center " uk-grid >
		    <div>
			    <div class="uk-animation-toggle" tabindex="0">
			        <div class="uk-margin uk-card uk-card-default uk-card-hover uk-animation-shake ">
					<div class="uk-card-badge uk-label uk-padding-small"> <span uk-icon="calendar"></span> <?= $value['created_time'] ?></div>
				        <div class="uk-card-media-top">
					        <img src="<?php echo base_url().$value['blog_img'];?>" alt="">
						</div>
					    <div class="uk-card-body">
						
						    <h3 class="uk-card-title"><?= $value['blog_title'] ?></h3>
						
							<a href="<?= base_url(). 'home/blog_detail/'.$value['blogid']?> "><button class="uk-button uk-button-danger">view full blog</button></a>
							
						</div>
					
					</div>
				</div>
			</div>
			
			
		</div>
	</div>
	</div>


<?php
}
?>

<div class="uk-align-right uk-padding-small">
<a id="target" href="#top" class="uk-icon-button  uk-button-danger  " uk-icon="arrow-up" uk-scroll=""></a>
</div>
        <script src="" async defer></script>
    </body>
</html>