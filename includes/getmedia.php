 <div id="admin_content">
	     <div class="search">
	    	<div class="input-group">
				  <input type="text" class="form-control">
				  <span class="input-group-btn">
				  <button class="btn btn-default" type="button">
				  Search
				  </button>
				  </span>
				</div>
	    	</div>
	    	<h3>MEDIA</h3>
	    <form method="post" enctype="multipart/form-data" action="" id="form">
	    <input style="background-color:grey;" type="file" name="image" id="image" ><br/>
	    <span><input type="submit" class="btn btn-primary" value="Upload" name="upload"></span>
	     <span><input type="submit" value="Select" name="select" class="btn btn-primary">
	     </form><br/>
	     <div id="media_space">
	     <div>
         	<?php require ("../includes/uploads.php");

         	?>
         </div>
	     </div>
        </div>