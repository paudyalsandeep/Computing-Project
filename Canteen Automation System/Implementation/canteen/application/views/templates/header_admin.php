<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

	<style>
		body{margin-top:20px;}
		.fa-fw {width: 2em;}
	</style>

	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-3">
				<ul class="nav nav-pills nav-stacked">
					<li id="user_nav"><a href="<?php echo base_url(); ?>admin/get_users"><i class="fa fa-user-circle-o fa-fw"></i>Users</a></li>
					<li id="college_nav"><a href="<?php echo base_url(); ?>college/get_college"><i class="fa fa-institution fa-fw"></i>College</a></li>
					<li id="roles_nav"><a href="<?php echo base_url(); ?>role/get_role"><i class="fa fa-users fa-fw"></i>Role</a></li>
					<li id="items_nav"><a href="<?php echo base_url(); ?>item/get_item"><i class="fa fa-cutlery fa-fw"></i>Food</a></li>
					<li><a href="#"><i class="fa fa-cart-arrow-down fa-fw"></i>Orders</a></li>
					<li><a href="#"><i class="fa fa-truck fa-fw"></i>Delivered</a></li>
					

				</ul>
			</div>