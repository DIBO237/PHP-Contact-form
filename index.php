<!-- header -->
<?php 
require 'logic/logic.php';
$title= "New blog";
require 'includes/header.php';

// $arr = array(1,2,3,4,5,6,7);
// foreach ($arr as $i) {
// 	echo $i;
// }





?>
<!-- header end -->

<!-- your BODY codes goes here -->
<div class="container">
	<div class="content mt-4">
		<div> 


			<form class="form-control" method="POST">
			<div class="col text-center mt-3">

				<h2>CONTACT US</h2>
				<hr>


			 </div>
				
				<div class="col">

					<div class="col mt-4">

						<div class="form-floating mb-3">
						  <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
						  <label for="floatingInput">Your Name</label>
						</div>
						
					</div>
					<div class="row">
					<div class="col mt-3" >

						<label for="email">Email:</label>
						<input class="form-control" type="text" name="email">
						
					</div>
					<div class="col mt-3">

						<label for="NAme">Phone(optional):</label>
						<input class="form-control" type="text" name="phone">
						
					</div>
				     </div>
					<div class="col mt-3">
						<label for="Query">Your Query:</label>
						<textarea class="form-control" name="content" id="Query" cols="5" rows="5"></textarea> 
						
					</div>

					<div class="col center mb-2 mt-3">
						<button class="btn btn-outline-success" type="submit" name="sub" data-bs-toggle="modal" data-bs-target="#exampleModal">SUBMIT</button>
						
					</div>
					
				</div>	

			</form>

		</div>
		
	</div>
	

</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Blog Submitted Successfully
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- modalend -->


<!-- BODY CODES ENDS HERE -->

<!-- footer -->
<?php 
include 'includes/footer.php';
?>
<!-- footer end