<script>
	$(document).ready(function () {
  $(".nav li").removeClass("active");//this will remove the active class from  
                                     //previously active menu item 
  $('#user_nav').addClass('active');
});
</script>



			<div class="col-lg-9 well">
				<div class="table-responsive-lg table-bordered">
					<table class="table">
						<thead class="thead-dark">
							<tr>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Email</th>
								<th>Phone</th>
							</tr>
						</thead>
						<tbody>

							<?php
							foreach ($users as $row)

								{?>
									<tr>
										<td><?php echo $row->fname; ?></td>
										<td><?php echo $row->lname; ?></td>
										<td><?php echo $row->email; ?></td>
										<td><?php echo $row->phone; ?></td>
										</tr>
									<?php }

									?>

								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</body>
		</html>