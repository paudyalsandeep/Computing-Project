<script>
	$(document).ready(function () {
  $(".nav li").removeClass("active");//this will remove the active class from  
                                     //previously active menu item 
  $('#items_nav').addClass('active');
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
	<form class="form-group" method="post" action="<?php echo base_url(); ?>item/insert_item">
		<label for="item">Item</label>
		<input type="text" class="form-control" id="item" name="item" placeholder="Enter item here"><br>
		<label for="item">Price</label>
		<input type="text" class="form-control" id="price" name="price" placeholder="Enter price here"><br>
		<input type="submit" class="btn btn-success btn-block" value="Add Item">
		<input type="submit" class="btn btn-primary btn-block" value="Update Item">
		<input type="submit" class="btn btn-danger btn-block" value="Delete Item">
	</form>
	<div class="table-responsive-lg table-bordered">
		<table class="table" id="table">
			<thead class="thead-dark">
				<tr>
					<th>Item</th>
					<th>Price</th>
				</tr>
			</thead>
			<tbody>

				<?php
				foreach ($items as $row)

					{?>
						<tr>
							<td><?php echo $row->item; ?></td>
							<td><?php echo $row->price; ?></td>
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
             document.getElementById("item").value = this.cells[0].innerHTML;
             document.getElementById("price").value = this.cells[1].innerHTML;
        };
    }

</script>


</body>
</html>