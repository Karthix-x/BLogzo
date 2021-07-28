
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Blogzo</title>
        <meta name="description" content="">
        <link rel="icon" href="<?php echo base_url('assets/pics/icon12.png');?>" type="image/png">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	
		<link href='https://fonts.googleapis.com/css?family=Lobster|Raleway:400,200' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.7.1/dist/css/uikit.min.css" />

<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.7.1/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.7.1/dist/js/uikit-icons.min.js"></script>
  <link rel="stylesheet" href="style.css">
		
		<link rel="stylesheet" href="<?php echo base_url('assets/css/blogstyle1.css');?>">
<!-- UIkit JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/js/uikit.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/js/uikit-icons.min.js"></script>
    </head>
	<header><img src="<?php echo base_url('assets/pics/blozoo.gif');?>" height="170px" width="170px"  ></header>
    <body>
   

<!-- UIkit SECTION -->


<div id="card" class="uk-child-width-1-2@s uk-align-center uk-card-large" uk-grid>
    <div class="uk-align-center">
        <div class="uk-card uk-card-default uk-card-hover uk-card-large uk-card-body">
       
           <h1 class="uk-text-center uk-heading-medium uk-text-primary uk-text-bolder"> <?= $result[0]['blog_title'] ?> </h1>

   <img  class="uk-card-hover" src="<?php echo base_url().$result[0]['blog_img'];?> " alt="">

          
           
            <p class="uk-text-center uk-text-lead"> <?= $result[0]['blog_desc'] ?> </p>
        </div>
    </div>
</div>


</body>
</html>