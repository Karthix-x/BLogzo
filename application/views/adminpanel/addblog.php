<?php $this->load->view("adminpanel/header"); ?>
<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
    

  </head>
  <body>
   
  <p class="h1 d-flex justify-content-center">ADD BLOG</p>
 
   
      
      
     <div class="d-flex justify-content-center">
      <div class="card shadow p-3 mb-5 bg-white rounded " style="width: 60rem;">
      
      <form enctype="multipart/form-data" action="<?= base_url().'admin/blog/addblog_post' ?>" method="post">
        
        <div class="form-group">
          <input type="text" class="form-control" name="blog_title" placeholder="Blog Title" required>
        </div>
        <p class="h6 text-primary"> Blog Description</p>
        <div class="form-group">
          <textarea class="form-control" name="desc" placeholder="Blog Description"  required minlength="10" ></textarea>
        </div>
        <p class="h6 text-primary">Add Image</p>
 
        <div class="form-group ">
          <input type="file" class="form-control form-control-lg" name="file" placeholder="Title">
        </div>
     
        <button type="submit" class="btn btn-primary d-flex justify-content-center">Add Blog</button>


      </form>

    </div>
    </div>
      
   
  </div>
</div>

<script src="" async defer></script>
  </body>
</html>
<?php $this->load->view('adminpanel/footer.php'); ?>


<script type="text/javascript">
  <?php 
      if (isset($_SESSION['inserted'])) {
        if ($_SESSION['inserted']=="yes") {
          # code...
          echo "alert('Data Inserted Successfully!');";
        }
        else{
          echo "alert('Not Inserted!');";
        }
      }
   ?>
</script>

<script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
          <script>  
        CKEDITOR.replace( 'desc' );
          </script>