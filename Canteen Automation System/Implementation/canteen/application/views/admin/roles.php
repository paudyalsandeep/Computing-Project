<script>
	$(document).ready(function () {
  $(".nav li").removeClass("active");//this will remove the active class from  
                                     //previously active menu item 
  $('#roles_nav').addClass('active');
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
	<form class="form-group" name="roleForm" method="post" action="<?php echo base_url(); ?>role/insert_role">
		<label for="role">Role</label>
		<input type="text" class="form-control" id="role" name="role" placeholder="Enter role here"><br>
		<input type="submit" class="btn btn-success btn-block" value="Add Role">
		<input type="submit" class="btn btn-primary btn-block" value="Update Role"> 
		<input type="submit" class="btn btn-danger btn-block" value="Delete Role">
	</form>
	<div class="table-responsive-lg table-bordered">
		<table class="table" id="table">
			<thead class="thead-dark">
				<tr>
					<th>Roles</th>
				</tr>
			</thead>
			<tbody>

				<?php
				foreach ($roles as $row)

					{?>
						<tr>
							<td><?php echo $row->Role; ?></td>

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
             document.getElementById("role").value = this.cells[0].innerHTML;
        };
    }

</script>

</body>
</html>