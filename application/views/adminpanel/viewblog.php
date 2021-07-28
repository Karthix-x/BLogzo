<?php $this->load->view("adminpanel/header"); ?>

   
      
<p class="h2 d-flex justify-content-center">VIEW BLOG</p>
<div class="d-flex justify-content-center">
<div class="card shadow p-3 mb-5 bg-white rounded " style="width: 90rem;">
      <div class="table-responsive">
        <table class="table table-hover table-bordered ">
		<thead class="thead-dark text-center">
            <tr class="h5 sans">
              <th>Sr No</th>
              <th>Title</th>
              <th class="col-sm-5">Description</th>
              <th>Image</th>
              <th>Edit</th>
              <th>Delete</th>
			  
            </tr>
          </thead>
          <tbody class="">
          	<?php 
          	if ($result) {
          		$counter=1;
          		foreach ($result as $key => $value) {
          			echo "<tr>
			              <td class=\"h5 text-center\">".$counter."</td>
			              <td class=\"h5\">".$value['blog_title']."</td>
			              <td>".$value['blog_desc']."</td>
			              <td class=\"text-center\"><img src='".base_url().$value['blog_img']."' class='img-fluid' width='100'></td>
			              
			              <td class=\"h5 text-center\"><a class=\"btn btn-warning  \" href='".base_url().'admin/blog/editblog/'.$value['blogid']."'><span class=\"btn-label\"><i class=\"fa fa-edit\"></i></span>  Edit</a></td>
			              
			              <td class=\"h5 text-center\"><a class=\"btn delete btn-danger \" href='#.' data-id='".$value['blogid']."'>  <span class=\"btn-label\"><i class=\"fa fa-trash\"></i></span> Delete</a></td>

			            </tr>";

			            $counter++;
          		}

          		
          	}
          	else{
          		echo "<tr><td colspan='6'>No Records found</td><tr>";
          	}
          		

          	 ?>

            
            
          </tbody>
        </table>
      </div>
</div>
</div>
  </div>
</div>

<?php $this->load->view('adminpanel/footer.php'); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
	$(".delete").click(function(){

		var delete_id = $(this).attr('data-id');

		var bool = confirm('Are you Sure you want to delete the blog forever ?');
		console.log(bool);

		if (bool) {
			//alert("Move to delete functionality using AJAX");

			$.ajax({
				url:'<?= base_url().'admin/blog/deleteblog/'?>',
				type:'post',
				data:{'delete_id': delete_id},
				success: function(response){
					console.log(response);
					if (response == "deleted") {
						location.reload();
					}else if (response == "notdeleted"){
						alert("Something went wrong!");
					}
				}
			});
		}else{
			alert("Your Blog is Safe");

		}
	});


	<?php 

			if (isset($_SESSION['updated'])) {
				if ($_SESSION['updated'] == "yes") {
					echo 'alert("Data has been updated!");';
				}else if($_SESSION['updated'] == "no"){
					echo 'alert("Some error occurred & data not updated!");';

				}
			}

	 ?>

</script>