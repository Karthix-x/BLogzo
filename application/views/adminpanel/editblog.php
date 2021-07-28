<?php 
   //echo "<pre>"; print_r($result); die();
 ?>
<?php $this->load->view("adminpanel/header"); ?>

   
      
    <p class="h2 d-flex justify-content-center">EDIT BLOG</p>

    <div class="d-flex justify-content-center">
<div class="card shadow p-3 mb-5 bg-white rounded " style="width: 80rem;">
      <form enctype="multipart/form-data" action="<?= base_url().'admin/blog/editblog_post' ?>" method="post">
      <p class="h6 text-primary">Select any option</p>
        <select class="custom-select bg-warning text-dark font-weight-bold" name="publish_unpublish">
          <option value="1" <?= ( $result[0]['status'] == "1" ? "selected" : "" ); ?>>Publish</option>
          <option value="0" <?= ( $result[0]['status'] == "0" ? "selected" : "" ); ?>>Unpublish</option>
        </select>
        <br><br>
        <p class="h6 text-primary">Edit Blog Title</p>
        <input type="hidden" name="blog_id" value="<?= $blog_id ?>">
        <div class="form-group" style="margin-top: 10px;">
          <input type="text" value="<?= $result[0]['blog_title'] ?>" class="form-control" name="blog_title" placeholder="Title">
        </div>
        <p class="h6 text-primary">Edit Blog Description</p>
        <div class="form-group">
          <textarea class="form-control" name="desc" placeholder="Blog Desc"><?= $result[0]['blog_desc'] ?></textarea>
        </div>
        <p class="h6 text-primary">Change Image</p>
        <div class="form-group">
          <img width="100" src="<?= base_url().$result[0]['blog_img']?>">
          <input type="file" class="form-control" name="file" placeholder="Title">
        </div>
        
        <button type="submit" class="btn btn-primary">SUBMIT</button>


      </form>

      </div>
</div>
  </div>
</div>

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