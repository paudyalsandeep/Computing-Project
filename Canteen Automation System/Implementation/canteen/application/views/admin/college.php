<script>
	$(document).ready(function () {
  $(".nav li").removeClass("active");//this will remove the active class from  
                                     //previously active menu item 
                                     $('#college_nav').addClass('active');
  //for demo
  //$('#demo').addClass('active');
  //for sale 
  //$('#sale').addClass('active');
});
</script>

<style>
	table tr
	{
		cursor: pointer;transition: all .25s ease-in-out;
	}
	table tr:hover
	{
		background-color: #ddd;
	}
</style>

<div class="col-lg-9 well">
	<?php 
            if ($this->session->flashdata('successful')) 
            {
                echo '<div class="alert alert-success">';
                //echo '<a href="#" class="close" data-dissmiss="alert" aria-label="close">&times;</a>';
                echo $this->session->flashdata('successful') ;
                echo '</div>';
            }
            if ($this->session->flashdata('errors')) 
            {
                echo '<div class="alert alert-danger">';
                //echo '<a href="#" class="close" data-dissmiss="alert" aria-label="close">&times;</a>';
                echo $this->session->flashdata('errors') ;
                echo '</div>';
            }
        ?>
	<form class="form-group" method="post" action="<?php echo base_url(); ?>college/crudCollege">
		<label for="college">College Name</label>
		<input type="text" class="form-control" id="college" name="college" placeholder="Enter college name here">
		<label for="address">College Address</label>
		<input type="text" class="form-control" id="address" name="address" placeholder="Enter college address here"><br>
		<input type="submit" class="btn btn-success btn-block" value="Add College" name="btnAdd">
		<input type="submit" class="btn btn-primary btn-block" value="Update College" name="btnUpdate">
		<input type="submit" class="btn btn-danger btn-block" value="Delete College" name="btnDelete">
	</form>

	<div class="table-responsive-lg table-bordered">
		<table class="table" id="table">
			<thead class="thead-dark">
				<tr>
					<th>College Name</th>
					<th>Address</th>
				</tr>
			</thead>
			<tbody>

				<?php
				foreach ($users as $row)

					{?>
						<tr>
							<td hidden=""><?php echo $row->CollegeID; ?></td>
							<td><?php echo $row->CollegeName; ?></td>
							<td><?php echo $row->Address; ?></td>
							
						</tr>
					<?php }

					?>

				</tbody>
			</table>
		</div>
	</div>
</div>


<script>

	var table = document.getElementById('table');

	for(var i = 1; i < table.rows.length; i++)
	{
		table.rows[i].onclick = function()
		{
             //rIndex = this.rowIndex;
             document.getElementById("college").value = this.cells[1].innerHTML;
             document.getElementById("address").value = this.cells[2].innerHTML;
        };
    }

</script>


</body>
</html>