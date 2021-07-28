<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Blogzo Admin Login</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="<?php echo base_url('assets/pics/icon12.png');?>" type="image/png">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <link href="https://fonts.googleapis.com/css?family=Asap" rel="stylesheet">
        
        <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css');?>">
      
    </head>
    <body>
 
    
<div  id="float">
      <div class="float-right  p-4">
        <a href="<?php echo base_url('home');?>">
       <button class="btn btn-dark"> <span class="bi bi-house-fill"></span>  HOME </button></a>
    </div></div>

        <img src="<?php echo base_url('assets/pics/icon11.png');?>" height="100px" width="100px " class="icon">
       
    <form class="login" action="<?= base_url().'admin/login/login_post' ?>" method="post" >
    <?php   
            if ($error != "NO_ERROR") {
                echo '<div class="alert alert-danger" role="alert">';
              echo "$error";
              echo '</div>';
            }

       ?>
        <h2>Blogzo Admin Login</h2>
  <input type="text" placeholder="Username" name="email" required autofocus>
  <input type="password" placeholder="Password" name="password" required autofocus>
  <button> <i class="bi bi-person-fill"></i> Login </button> 
  
</form>

  
        <script src="" async defer></script>
    </body>
</html>