<?php $this->load->view("adminpanel/header"); ?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        </div>
        
            

      <div class="row d-flex justify-content-center" >
         <div class="col-md-3 alert" >
         <div class="card shadow p-3 mb-5 bg-white rounded" style="width: 12rem;">
    <img class="card-img-top" src="https://img.icons8.com/dusk/100/000000/view-file.png"/>
    <div class="card-body">
        <a href="<?= base_url().'admin/blog/'?>" class="btn btn-primary d-flex justify-content-center">View Blogs</a>
    </div>
    </div>
        </div>
        <div class="col-md-1"></div>
         <div class="col-md-3 alert">
         <div class="card shadow p-3 mb-5 bg-white rounded" style="width: 12rem;">
    <img class="card-img-top" src="https://img.icons8.com/dusk/100/000000/add-file--v1.png"/>
    <div class="card-body">
        <a href="<?= base_url().'admin/blog/addblog'?>" class="btn btn-primary d-flex justify-content-center">Add Blog</a>
    </div>
    </div>
        </div>
      </div>
    </main>
  </div>
</div>


<?php $this->load->view('adminpanel/footer.php'); ?>